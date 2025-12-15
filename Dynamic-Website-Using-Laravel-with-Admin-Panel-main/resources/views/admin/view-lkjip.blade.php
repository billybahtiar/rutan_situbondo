@include('admin/header')

<div class="content-wrapper">

    <!-- Page Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            <h1>View / Manage LKJIP</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">LKJIP Table</li>
            </ol>
          </div>

        </div>
      </div>
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">
            <div class="card">

              <div class="card-header">
                <h3 class="card-title">View / Edit / Delete LKJIP</h3>
              </div>

              <div class="card-body">

                <table id="example2" class="table table-bordered table-hover">
                  <thead valign="center">
                    <tr>
                      <th>Tahun</th>
                      <th>Judul / Deskripsi</th>
                      <th>File Dokumen</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                  @foreach($arr as $lkjip)
                    <tr>
                      <td>{{ $lkjip->tahun }}</td>
                      <td>{{ $lkjip->judul }}</td>

                      <td align="center">
                        <a href="{{ asset('lkjip/'.$lkjip->file) }}" target="_blank" class="btn btn-info btn-sm">
                          Lihat / Download
                        </a>
                      </td>

                      <td>
                        <a href="/admin/edit-lkjip/{{ $lkjip->id }}" class="btn btn-primary btn-sm">Edit</a>
                      </td>

                      <td>
                        <a href="/admin/view-lkjip/{{ $lkjip->id }}" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                  @endforeach

                  <tr>
                    <td colspan="5" align="center" height="50">
                      <a href="/admin/add-lkjip" class="btn btn-primary">Add New LKJIP</a>
                    </td>
                  </tr>

                </table>

              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

</div>

@include('admin/footer')

<aside class="control-sidebar control-sidebar-dark"></aside>

@include('admin/scripts')
