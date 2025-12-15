<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\admin_login;
use App\Models\services;
use App\Models\about;
use App\Models\slider;
use App\Models\client;
use App\Models\blog;
use App\Models\photos;
use App\Models\blog_comment;
use App\Models\contact_us;
use App\Models\lkjip;
use Redirect;

class UserController extends Controller
{
    // helper: pastikan folder images ada
    protected function ensureImagesFolder()
    {
        $path = public_path('images');
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        return $path;
    }

    // helper: generate filename aman
    protected function genImageName($file)
    {
        $ext = $file->getClientOriginalExtension();
        return time() . '_' . Str::random(8) . '.' . $ext;
    }

    // helper: safely delete file jika ada
    protected function safeUnlink($filename)
    {
        if (!$filename) return;
        $full = public_path('images/' . $filename);
        if (file_exists($full) && is_file($full)) {
            try {
                @unlink($full);
            } catch (\Exception $e) {
                // swallow error, tidak fatal
            }
        }
    }

    // functions for admin (Back-end) panel
    public function index_admin(Request $req)
    {
        if ($req->session()->has('admin_login')) {
            return redirect('/admin/dashboard');
        }

        if ($req->signin) {
            $email = $req->email;
            $password = $req->password;

            $select_data = admin_login::where('email', $email)->where('password', $password)->count();

            if ($select_data > 0) {
                $arr = admin_login::where('email', $email)->where('password', $password)->first();
                session(['admin_login' => $arr['id']]);
                return redirect('/admin/dashboard');
            } else {
                return redirect('/admin/index');
            }
        }

        return view('admin/index');
    }

    // Dashboard
    public function dashboard(Request $req)
    {
        $slider = slider::count();
        $services = services::count();
        $client = client::count();
        $blog = blog::count();
        $about = about::count();
        $photos = photos::count();
        $contact_us = contact_us::count();
        $lkjip = lkjip::count();
        $notification = contact_us::where('status', 1)->count();

        return view('admin/dashboard', compact('slider', 'services', 'client', 'blog', 'about', 'photos', 'lkjip','contact_us', 'notification'));
    }

    // Tentang Rutan (new admin landing page)
    public function tentang_rutan(Request $req)
    {
        $slider = slider::count();
        $services = services::count();
        $client = client::count();
        $blog = blog::count();
        $about = about::count();
        $photos = photos::count();
        $lkjip = lkjip::count();
        $contact_us = contact_us::count();
        $notification = contact_us::where('status', 1)->count();

        $rutan_info = [
            'name' => 'Rutan Situbondo',
            'address' => 'Situbondo, Jawa Timur, Indonesia',
            'phone' => '-',
            'email' => '-',
            'description' => 'Rumah Tahanan (Rutan) Kelas IIB Situbondo. Halaman ini menampilkan ringkasan data dan informasi singkat tentang Rutan.'
        ];

        return view('admin/tentang-rutan', compact('slider', 'services', 'client', 'blog', 'about', 'photos','lkjip', 'contact_us', 'notification', 'rutan_info'));
    }

    // Slider
    public function add_slider(Request $req)
    {
        if ($req->submit_slider) {
            $this->ensureImagesFolder();

            // Validasi
            $req->validate([
                'title' => 'required|string|max:20',
                'details' => 'required|string|max:500',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $title = $req->title;
            $details = $req->details;

            $file = $req->file('image');
            $image = $this->genImageName($file);

            // try move
            try {
                $file->move(public_path('images'), $image);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar.']);
            }

            slider::create([
                'title' => $title,
                'details' => $details,
                'image' => $image
            ]);

            return redirect('/admin/view-slider');
        }
        return view('admin/add-slider');
    }

    public function view_slider(Request $req)
    {
        $arr = slider::all();
        return view('admin/view-slider', ['arr' => $arr]);
    }

    public function delete_slider(Request $req, $id)
    {
        $record = slider::where('id', $id)->first();
        if ($record) {
            $this->safeUnlink($record->image);
            slider::where('id', $id)->delete();
        }
        return redirect('/admin/view-slider');
    }

    public function edit_slider(Request $req, $id)
    {
        $arr = slider::where('id', $id)->get();
        return view('admin/edit-slider', ['arr' => $arr]);
    }

    public function submit_edit_slider(Request $req, $id)
    {
        if ($req->edit_slider) {
            $this->ensureImagesFolder();

            $req->validate([
                'title' => 'required|string|max:20',
                'details' => 'required|string|max:500',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $title = $req->title;
            $details = $req->details;
            $image_chk = $req->file('image');

            if ($image_chk == null) {
                $image = slider::where('id', $id)->first()->image;
            } else {
                $image_delete = slider::where('id', $id)->first()->image;
                $this->safeUnlink($image_delete);

                $image = $this->genImageName($image_chk);
                try {
                    $image_chk->move(public_path('images'), $image);
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar.']);
                }
            }

            slider::where('id', $id)->update([
                'title' => $title,
                'details' => $details,
                'image' => $image
            ]);

            return redirect('/admin/view-slider');
        }
    }

    // Services
    public function add_services(Request $req)
    {
        if ($req->submit_services) {
            $req->validate([
                'title' => 'required|string|max:255',
                'details' => 'required|string'
            ]);

            services::create([
                'title' => $req->title,
                'details' => $req->details
            ]);

            return redirect('/admin/view-services');
        }
        return view('admin/add-services');
    }

    public function view_services(Request $req)
    {
        $arr = services::all();
        return view('admin/view-services', ['arr' => $arr]);
    }

    public function delete_services(Request $req, $id)
    {
        services::where('id', $id)->delete();
        return redirect('/admin/view-services');
    }

    public function edit_services(Request $req, $id)
    {
        $arr = services::where('id', $id)->get();
        return view('admin/edit-services', ['arr' => $arr]);
    }

    public function submit_edit_service(Request $req, $id)
    {
        if ($req->edit_services) {
            $req->validate([
                'title' => 'required|string|max:255',
                'details' => 'required|string'
            ]);

            services::where('id', $id)->update([
                'title' => $req->title,
                'details' => $req->details
            ]);

            return redirect('/admin/view-services');
        }
    }

    // Client
    public function add_client(Request $req)
    {
        if ($req->submit_client) {
            $this->ensureImagesFolder();

            $req->validate([
                'name' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $name = $req->name;
            $file = $req->file('image');
            $image = $this->genImageName($file);

            try {
                $file->move(public_path('images'), $image);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar client.']);
            }

            client::create([
                'name' => $name,
                'image' => $image
            ]);

            return redirect('/admin/view-client');
        }
        return view('admin/add-client');
    }

    public function view_client(Request $req)
    {
        $arr = client::all();
        return view('admin/view-client', ['arr' => $arr]);
    }

    public function delete_client(Request $req, $id)
    {
        $record = client::where('id', $id)->first();
        if ($record) {
            $this->safeUnlink($record->image);
            client::where('id', $id)->delete();
        }
        return redirect('/admin/view-client');
    }

    public function edit_client(Request $req, $id)
    {
        $arr = client::where('id', $id)->get();
        // perbaikan: view path tanpa leading slash
        return view('admin/edit-client', ['arr' => $arr]);
    }

    public function submit_edit_client(Request $req, $id)
    {
        if ($req->edit_client) {
            $this->ensureImagesFolder();

            $req->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $name = $req->name;
            $image_chk = $req->file('image');

            if ($image_chk == null) {
                $image = client::where('id', $id)->first()->image;
            } else {
                $image_delete = client::where('id', $id)->first()->image;
                $this->safeUnlink($image_delete);

                $image = $this->genImageName($image_chk);
                try {
                    $image_chk->move(public_path('images'), $image);
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar client.']);
                }
            }

            client::where('id', $id)->update([
                'name' => $name,
                'image' => $image
            ]);

            return redirect('/admin/view-client');
        }
    }

    // Blog
    public function add_blog(Request $req)
    {
        if ($req->submit_blog) {
            $this->ensureImagesFolder();

            $req->validate([
                'title' => 'required|string|max:255',
                's_details' => 'required|string',
                'f_details' => 'required|string',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $file = $req->file('image');
            $image = $this->genImageName($file);

            try {
                $file->move(public_path('images'), $image);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar blog.']);
            }

            blog::create([
                'title' => $req->title,
                'short_details' => $req->s_details,
                'full_details' => $req->f_details,
                'image' => $image
            ]);

            return redirect('/admin/view-blog');
        }
        return view('admin/add-blog');
    }

    public function view_blog(Request $req)
    {
        $arr = blog::all();
        return view('admin/view-blog', ['arr' => $arr]);
    }

    public function delete_blog(Request $req, $id)
    {
        $record = blog::where('id', $id)->first();
        if ($record) {
            $this->safeUnlink($record->image);
            blog::where('id', $id)->delete();
        }
        return redirect('/admin/view-blog');
    }

    public function edit_blog(Request $req, $id)
    {
        $arr = blog::where('id', $id)->get();
        return view('admin/edit-blog', ['arr' => $arr]);
    }

    public function submit_edit_blog(Request $req, $id)
    {
        if ($req->edit_blog) {
            $this->ensureImagesFolder();

            $req->validate([
                'title' => 'required|string|max:255',
                's_details' => 'required|string',
                'f_details' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $image_chk = $req->file('image');
            if ($image_chk == null) {
                $image = blog::where('id', $id)->first()->image;
            } else {
                $image_delete = blog::where('id', $id)->first()->image;
                $this->safeUnlink($image_delete);

                $image = $this->genImageName($image_chk);
                try {
                    $image_chk->move(public_path('images'), $image);
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar blog.']);
                }
            }

            blog::where('id', $id)->update([
                'title' => $req->title,
                'short_details' => $req->s_details,
                'full_details' => $req->f_details,
                'image' => $image
            ]);

            return redirect('/admin/view-blog');
        }
    }

    // About
    public function add_thought(Request $req)
    {
        if ($req->submit_thought) {
            $req->validate([
                'thought' => 'required|string',
                'name' => 'required|string',
                'city' => 'required|string'
            ]);

            about::create([
                'thought' => $req->thought,
                'name' => $req->name,
                'city' => $req->city
            ]);

            return redirect('/admin/view-thought');
        }
        return view('admin/add-thought');
    }

    public function view_thought(Request $req)
    {
        $arr = about::all();
        return view('admin/view-thought', ['arr' => $arr]);
    }

    public function delete_thought(Request $req, $id)
    {
        about::where('id', $id)->delete();
        return redirect('/admin/view-thought');
    }

    public function edit_thought(Request $req, $id)
    {
        $arr = about::where('id', $id)->get();
        return view('admin/edit-thought', ['arr' => $arr]);
    }

    public function submit_edit_thought(Request $req, $id)
    {
        if ($req->edit_thought) {
            $req->validate([
                'thought' => 'required|string',
                'name' => 'required|string',
                'city' => 'required|string'
            ]);

            about::where('id', $id)->update([
                'thought' => $req->thought,
                'name' => $req->name,
                'city' => $req->city
            ]);

            return redirect('/admin/view-thought');
        }
    }
    // ======================= LKJIP ========================= //

public function add_lkjip(Request $req)
{
    if ($req->submit_lkjip) {

        $req->validate([
            'tahun' => 'required|integer',
            'judul' => 'required|string|max:255',
            'file'  => 'required|mimes:pdf,doc,docx|max:10240' // 10 MB
        ]);

        // Simpan file ke folder public/lkjip
        $file = $req->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();

        try {
            $file->move(public_path('lkjip_files'), $filename);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['file' => 'Gagal upload file.']);
        }

        lkjip::create([
            'tahun' => $req->tahun,
            'judul' => $req->judul,
            'file'  => $filename
        ]);

        return redirect('/admin/view-lkjip');
    }
    return view('admin/add-lkjip');
}

public function view_lkjip(Request $req)
{
    $arr = lkjip::orderBy('tahun', 'desc')->get();
    return view('admin/view-lkjip', ['arr' => $arr]);
}

public function delete_lkjip(Request $req, $id)
{
    $record = lkjip::where('id', $id)->first();
    if ($record) {

        // hapus file
        $file_path = public_path('lkjip/' . $record->file);
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        lkjip::where('id', $id)->delete();
    }

    return redirect('/admin/view-lkjip');
}

public function edit_lkjip(Request $req, $id)
{
    $arr = lkjip::where('id', $id)->get();
    return view('admin/edit-lkjip', ['arr' => $arr]);
}

public function submit_edit_lkjip(Request $req, $id)
{
    if ($req->edit_lkjip) {

        $req->validate([
            'tahun' => 'required|integer',
            'judul' => 'required|string|max:255',
            'file'  => 'nullable|mimes:pdf,doc,docx|max:10240'
        ]);

        $data = lkjip::where('id', $id)->first();

        // Jika user tidak upload file baru
        if ($req->file('file') == null) {
            $filename = $data->file;
        } else {

            // Hapus file lama
            $old_file = public_path('lkjip/' . $data->file);
            if (file_exists($old_file)) unlink($old_file);

            // Upload file baru
            $file = $req->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();

            try {
                $file->move(public_path('lkjip'), $filename);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['file' => 'Gagal upload file.']);
            }
        }

        lkjip::where('id', $id)->update([
            'tahun' => $req->tahun,
            'judul' => $req->judul,
            'file'  => $filename
        ]);

        return redirect('/admin/view-lkjip');
    }
}


    // Photos
    public function add_photos(Request $req)
    {
        if ($req->submit_photos) {
            $this->ensureImagesFolder();

            $req->validate([
                'title' => 'required|string|max:255',
                'details' => 'nullable|string',
                'type' => 'nullable|string',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $file = $req->file('image');
            $image = $this->genImageName($file);

            try {
                $file->move(public_path('images'), $image);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar.']);
            }

            photos::create([
                'title' => $req->title,
                'details' => $req->details,
                'type' => $req->type,
                'image' => $image
            ]);

            return redirect('/admin/view-photos');
        }
        return view('admin/add-photos');
    }

    public function view_photos(Request $req)
    {
        $arr = photos::all();
        return view('admin/view-photos', ['arr' => $arr]);
    }

    public function delete_photos(Request $req, $id)
    {
        $record = photos::where('id', $id)->first();
        if ($record) {
            $this->safeUnlink($record->image);
            photos::where('id', $id)->delete();
        }
        return redirect('/admin/view-photos');
    }

    public function edit_photos(Request $req, $id)
    {
        $arr = photos::where('id', $id)->get();
        return view('admin/edit-photos', ['arr' => $arr]);
    }

    public function submit_edit_photos(Request $req, $id)
    {
        if ($req->edit_photos) {
            $this->ensureImagesFolder();

            $req->validate([
                'title' => 'required|string|max:255',
                'details' => 'nullable|string',
                'type' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120'
            ]);

            $image_chk = $req->file('image');
            if ($image_chk == null) {
                $image = photos::where('id', $id)->first()->image;
            } else {
                $image_delete = photos::where('id', $id)->first()->image;
                $this->safeUnlink($image_delete);

                $image = $this->genImageName($image_chk);
                try {
                    $image_chk->move(public_path('images'), $image);
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors(['image' => 'Gagal menyimpan file gambar.']);
                }
            }

            photos::where('id', $id)->update([
                'title' => $req->title,
                'details' => $req->details,
                'type' => $req->type,
                'image' => $image
            ]);

            return redirect('/admin/view-photos');
        }
    }

    public function view_contacts(Request $req)
    {
        $arr = contact_us::all();
        return view('admin/view-contacts', ['arr' => $arr]);
    }

    public function logout_admin(Request $req)
    {
        $req->session()->flush();
        return redirect('/admin/index');
    }

    // functions for Front-end panel
    public function index(Request $req)
    {
        $slider_i = slider::all();
        $services_i = services::all();
        $photos_i = photos::all();
        $about_i = about::all();
        $blog_i = blog::all();
        $lkjip_i = lkjip::all();

        return view('index', compact('slider_i', 'services_i', 'photos_i', 'about_i', 'blog_i', 'lkjip_i'));
    }

    public function services(Request $req)
    {
        $arr = services::all();
        return view('services', ['arr' => $arr]);
    }

    public function clients(Request $req)
    {
        $arr = client::all();
        return view('clients', ['arr' => $arr]);
    }

    public function about(Request $req)
    {
        $arr = about::all();
        $arr2 = client::all();
        return view('about', ['arr' => $arr, 'arr2' => $arr2]);
    }

    public function blog(Request $req)
    {
        $arr = blog::paginate(6);
        return view('blog', ['arr' => $arr]);
    }

    public function blog_single(Request $req)
    {
        if ($req->search_text) {
            $search = $req->search_text;

            if (blog::where('title', 'like', '%' . $search . '%')->count() > 0) {
                $id = blog::where('title', 'like', '%' . $search . '%')->first()->id;

                if ($req->submit_comment) {
                    $req->validate([
                        'name' => 'required|string',
                        'email' => 'required|email',
                        'subject' => 'nullable|string',
                        'message' => 'required|string'
                    ]);

                    blog_comment::create([
                        'user_id' => $id,
                        'name' => $req->name,
                        'email' => $req->email,
                        'subject' => $req->subject,
                        'message' => $req->message
                    ]);

                    return redirect::back();
                }

                $arr = blog::where('id', $id)->get();
                $arr2 = blog_comment::where('user_id', $id)->get();

                $prev = blog::where('title', 'like', '%' . $search . '%')->where('id', '<', $id)->orderBy('id', 'desc')->first();
                $next = blog::where('title', 'like', '%' . $search . '%')->where('id', '>', $id)->orderBy('id', 'asc')->first();

                return view('blog-single', compact('arr', 'arr2', 'prev', 'next', 'search'));
            } else {
                return redirect::back()->withMessage('No records found for "' . $search . '"...!');
            }
        } else {
            $firstBlog = blog::first();
            if (!$firstBlog) {
                return redirect::back()->withMessage('No blog posts found.');
            }

            $id = $firstBlog->id;

            if ($req->submit_comment) {
                $req->validate([
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'subject' => 'nullable|string',
                    'message' => 'required|string'
                ]);

                blog_comment::create([
                    'user_id' => $id,
                    'name' => $req->name,
                    'email' => $req->email,
                    'subject' => $req->subject,
                    'message' => $req->message
                ]);

                return redirect::back();
            }

            $arr = blog::where('id', $id)->get();
            $arr2 = blog_comment::where('user_id', $id)->get();

            $prev = blog::where('id', '<', $id)->orderBy('id', 'desc')->first();
            $next = blog::where('id', '>', $id)->orderBy('id', 'asc')->first();

            return view('blog-single', compact('arr', 'arr2', 'prev', 'next'));
        }
    }

    

    public function blog_single_id(Request $req, $id)
    {
        if ($req->search_text && $req->_token) {
            $search = $req->search_text;
            return redirect()->to('/blog-single?search_text=' . urlencode($search));
        } else if ($req->search_text) {
            $search = $req->search_text;

            if ($req->submit_comment) {
                $req->validate([
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'subject' => 'nullable|string',
                    'message' => 'required|string'
                ]);

                blog_comment::create([
                    'user_id' => $id,
                    'name' => $req->name,
                    'email' => $req->email,
                    'subject' => $req->subject,
                    'message' => $req->message
                ]);

                return redirect::back();
            }

            $arr = blog::where('id', $id)->get();
            $arr2 = blog_comment::where('user_id', $id)->get();

            $prev = blog::where('title', 'like', '%' . $search . '%')->where('id', '<', $id)->orderBy('id', 'desc')->first();
            $next = blog::where('title', 'like', '%' . $search . '%')->where('id', '>', $id)->orderBy('id', 'asc')->first();

            return view('blog-single', compact('arr', 'arr2', 'prev', 'next', 'search'));
        } else {
            if ($req->submit_comment) {
                $req->validate([
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'subject' => 'nullable|string',
                    'message' => 'required|string'
                ]);

                blog_comment::create([
                    'user_id' => $id,
                    'name' => $req->name,
                    'email' => $req->email,
                    'subject' => $req->subject,
                    'message' => $req->message
                ]);

                return redirect::back();
            }

            $arr = blog::where('id', $id)->get();
            $arr2 = blog_comment::where('user_id', $id)->get();

            $prev = blog::where('id', '<', $id)->orderBy('id', 'desc')->first();
            $next = blog::where('id', '>', $id)->orderBy('id', 'asc')->first();

            return view('blog-single', compact('arr', 'arr2', 'prev', 'next'));
        }
    }

    public function blog_comment_dlt(Request $req, $id, $d_id)
    {
        blog_comment::where('id', $d_id)->delete();
        return redirect()->back();
    }

    public function photos(Request $req)
    {
        $arr = photos::paginate(6);
        return view('work-3columns', ['arr' => $arr]);
    }

    public function lkjip()
{
    $lkjip = Lkjip::orderBy('tahun', 'desc')->get();
    return view('lkjip', compact('lkjip'));
}

    public function contact(Request $req)
    {
        if ($req->submit_contact) {
            $req->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'nullable|string',
                'message' => 'required|string'
            ]);

            contact_us::create([
                'name' => $req->name,
                'email' => $req->email,
                'subject' => $req->subject,
                'message' => $req->message,
                'status' => 1
            ]);

            return redirect()->back()->with('message', 'Pesan berhasil dikirim.');
        }
        return view('contact');
    }
}



// search
