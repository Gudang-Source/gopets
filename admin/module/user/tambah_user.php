<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div><form class="form-horizontal" action="../Admin/module/user/aksi_simpan.php" method="post">
              
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">ID User</label>
                <input type="text" class="form-control" placeholder="Enter ID User" id="id_user" name="id_user">
              </div>
              <div class="form-group">
                <label for="inputName">Nama User</label>
                <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Enter username">
              </div>
              <div class="form-group">
                    <label for="InputPassword1">Password</label>
                    <input type="password" class="form-control" id="InputPassword" id="password" name="password" placeholder="Password">
                  </div>
              <div class="form-group">
                    <label for="InputEmail">Alamat Email</label>
                    <input type="email" class="form-control" id="email_user" name="email_user"  placeholder="Enter email">
                  </div>
              <div class="form-group">
                <label for="inputDescription">Alamat Lengkap</label>
                <textarea id="alamat_user" name="alamat_user"  class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Nomor Tellphone</label>
                <input type="text"class="form-control"id="no_telp_user" name="no_telp_user"  placeholder="Enter Phone Number">
              </div>
              <div class="form-group">
      
    </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
         <div class="row">
        <div class="col-12">
          <input type="submit" value="Tambahkan User" class="btn btn-success float-right">
        </div>
      </div>
        </div>
      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
