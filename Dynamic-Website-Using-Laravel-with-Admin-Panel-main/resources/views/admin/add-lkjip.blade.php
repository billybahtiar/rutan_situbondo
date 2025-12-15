@include('admin/header')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Dokumen LKJIP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Form LKJIP</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
            <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Tambah Dokumen LKJIP Baru</h3>
              </div>

              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  <!-- Tahun -->
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" id="tahun" placeholder="Masukkan Tahun" name="tahun" required>
                  </div>

                  <!-- Judul / Deskripsi -->
                  <div class="form-group">
                    <label for="judul">Judul / Deskripsi </label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Dokumen" name="judul" maxlength="255" required>
                  </div>

                  <!-- File Upload -->
                  <div class="form-group">
                    <label for="file">Upload File LKJIP (PDF / DOC / DOCX)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file" required>
                        <label class="custom-file-label" for="file">Pilih File</label>
                      </div>
                    </div>
                  </div>

                </div> <!-- end card body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit_lkjip" value="Submit">
                </div>

              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

</div>

@include('admin/footer')

<aside class="control-sidebar control-sidebar-dark"></aside>

@include('admin/scripts')
