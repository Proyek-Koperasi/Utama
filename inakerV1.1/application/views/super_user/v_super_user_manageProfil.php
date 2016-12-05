  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Pengaturan</a></li>
        <li>Pengaturan Hak Akses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Profil</h3>
            </div>

            <?php foreach ($row as $r) { ?>
              <form role="form" method="post" action="<?php echo base_url()."c_super_user/editProfil/1"; ?>">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Koperasi</label>
                    <input type="text" class="form-control" id="nama_koperasi" name="nama_koperasi" value="<?php echo $r->nama_koperasi; ?>" placeholder="Nama Koperasi">
                  </div>
                  <div class="form-group">
                    <label>Alamat Koperasi</label>
                    <input type="text" class="form-control" id="alamat_koperasi" name="alamat_koperasi" value="<?php echo $r->alamat_koperasi; ?>" placeholder="Alamat Koperasi">
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            <?php } ?>
            <!-- /.form -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  
<!-- ./wrapper -->