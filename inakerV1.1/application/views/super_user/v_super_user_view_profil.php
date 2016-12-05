  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Pengaturan</a></li>
        <li>Profil Koperasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <div class="box box-primary">
            <div class="box-header with-border">
              <a href="<?php echo base_url()."c_super_user/manageProfil"; ?>"><i class="fa fa-edit"></i></a><h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <?php foreach ($row as $r) { ?>
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nama Koperasi</strong>

              <p class="text-muted">
                <?php echo $r->nama_koperasi; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat Koperasi</strong>

              <p class="text-muted"><?php echo $r->alamat_koperasi; ?></p>
            </div>
            <?php } ?>
            <!-- /.box-body -->
          </div>
            </div>
            <!-- /.box-body -->
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