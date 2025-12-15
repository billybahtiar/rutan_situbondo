@include('admin/header')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Edit LKJIP</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            @foreach($arr as $item)
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Form Edit LKJIP</h3>
                </div>

                <form method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="{{ $item->tahun }}" required>
                        </div>

                        <div class="form-group">
                            <label>Judul / Deskripsi</label>
                            <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" required>
                        </div>

                        <div class="form-group">
                            <label>File Lama</label>
                            <p><strong>{{ $item->file }}</strong></p>
                        </div>

                        <div class="form-group">
                            <label>Upload File Baru (Opsional)</label>
                            <input type="file" class="form-control" name="file">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" name="edit_lkjip" class="btn btn-warning">Update</button>
                    </div>

                </form>
            </div>
            @endforeach

        </div>
    </section>

</div>

@include('admin/footer')
@include('admin/scripts')
