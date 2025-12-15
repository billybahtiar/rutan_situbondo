<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/* =====================================================
| ADMIN PANEL ROUTES
====================================================== */

Route::prefix('admin')->middleware('login_chk')->group(function () {
    Route::any('/dashboard', [UserController::class, 'tentang_rutan']);
    Route::any('/tentang-rutan', [UserController::class, 'tentang_rutan']);

    // Slider
    Route::any('/add-slider', [UserController::class, 'add_slider']);
    Route::any('/view-slider', [UserController::class, 'view_slider']);
    Route::any('/view-slider/{id}', [UserController::class, 'delete_slider']);
    Route::any('/edit-slider/{id}', [UserController::class, 'edit_slider']);
    Route::post('/edit-slider/{id}', [UserController::class, 'submit_edit_slider']);

    // Services
    Route::any('/add-services', [UserController::class, 'add_services']);
    Route::any('/view-services', [UserController::class, 'view_services']);
    Route::any('/view-services/{id}', [UserController::class, 'delete_services']);
    Route::any('/edit-services/{id}', [UserController::class, 'edit_services']);
    Route::post('/edit-services/{id}', [UserController::class, 'submit_edit_service']);

    // Clients
    Route::any('/add-client', [UserController::class, 'add_client']);
    Route::any('/view-client', [UserController::class, 'view_client']);
    Route::any('/view-client/{id}', [UserController::class, 'delete_client']);
    Route::any('/edit-client/{id}', [UserController::class, 'edit_client']);
    Route::post('/edit-client/{id}', [UserController::class, 'submit_edit_client']);

    // Blog
    Route::any('/add-blog', [UserController::class, 'add_blog']);
    Route::any('/view-blog', [UserController::class, 'view_blog']);
    Route::any('/view-blog/{id}', [UserController::class, 'delete_blog']);
    Route::any('/edit-blog/{id}', [UserController::class, 'edit_blog']);
    Route::post('/edit-blog/{id}', [UserController::class, 'submit_edit_blog']);

    // Thought
    Route::any('/add-thought', [UserController::class, 'add_thought']);
    Route::any('/view-thought', [UserController::class, 'view_thought']);
    Route::any('/view-thought/{id}', [UserController::class, 'delete_thought']);
    Route::any('/edit-thought/{id}', [UserController::class, 'edit_thought']);
    Route::post('/edit-thought/{id}', [UserController::class, 'submit_edit_thought']);

    // Photos
    Route::any('/add-photos', [UserController::class, 'add_photos']);
    Route::any('/view-photos', [UserController::class, 'view_photos']);
    Route::any('/view-photos/{id}', [UserController::class, 'delete_photos']);
    Route::any('/edit-photos/{id}', [UserController::class, 'edit_photos']);
    Route::post('/edit-photos/{id}', [UserController::class, 'submit_edit_photos']);

    // LKJIP Admin
    Route::any('/add-lkjip', [UserController::class, 'add_lkjip']);
    Route::any('/view-lkjip', [UserController::class, 'view_lkjip']);
    Route::any('/view-lkjip/{id}', [UserController::class, 'delete_lkjip']);
    Route::any('/edit-lkjip/{id}', [UserController::class, 'edit_lkjip']);
    Route::post('/edit-lkjip/{id}', [UserController::class, 'submit_edit_lkjip']);

    Route::any('/view-contacts', [UserController::class, 'view_contacts']);
});

// Admin auth
Route::any('/admin/index', [UserController::class, 'index_admin']);
Route::any('/admin/log-out', [UserController::class, 'logout_admin']);


/* =====================================================
| FRONTEND ROUTES
====================================================== */

Route::any('/', [UserController::class, 'index']);
Route::any('/services', [UserController::class, 'services']);
Route::any('/clients', [UserController::class, 'clients']);
Route::any('/about', [UserController::class, 'about']);
Route::any('/blog', [UserController::class, 'blog']);
Route::any('/lkjip', [UserController::class, 'lkjip']);

// Blog Single
Route::any('/blog-single', [UserController::class, 'blog_single']);
Route::any('/blog-single/{id}', [UserController::class, 'blog_single_id']);
Route::get('/delete/{id}/{d_id}', [UserController::class, 'blog_comment_dlt']);

Route::any('/work-3columns', [UserController::class, 'photos']);
Route::any('/contact', [UserController::class, 'contact']);

/* =====================================================
| STATIC VIEW ROUTES (dengan "/" agar tidak bentrok)
====================================================== */
$staticViews = [
    'product-roti', 'product-teh', 'product-carwash', 'product-kerajinan',
    'product-perikanan', 'product-perkebunan', 'rawon23', 'visi-misi',
    'tupoksi', 'struktur-organisasi', 'profil-pejabat', 'tentang-rutan',
    'kunjungan-napi', 'kunjungan-tahanan', 'integrasi', 'magang',
    'pengaduan', 'layanan-lain', 'dipa', 'lakip','survey', 'renstra','kerjasama','sop', 'kemandirian'
];


foreach ($staticViews as $v) {
    Route::get("/$v", function () use ($v) {
        return view($v);
    });
}
