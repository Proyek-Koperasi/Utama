  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Hak Akses
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Pengaturan</a></li>
        <li>Pengaturan Hak Akses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <a href="<?php echo base_url(); ?>c_super_user/manageUser/tambah/0"><button type="button" class="btn btn-danger">Tambah</button></a>
          <br />
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Hak Akses</th>
                    <th colspan="3" style="text-align: center;">Action</th>
                    <th hidden="hidden"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $a = 1; foreach ($row as $r) {
                    ?>
                      <tr>
                        <td><?php echo $a; ?></td>
                        <td><?php echo $r->username; ?></td>
                        <td><?php echo $r->nama; ?></td>
                        <td><?php echo $r->nama_akses; ?></td>
                        <td style="text-align: center;"><a href="<?php echo base_url(); ?>c_super_user/resetPasswordHA/<?php echo $r->id; ?>">Reset</a></td>
                        <td style="text-align: center;"><a href="<?php echo base_url(); ?>c_super_user/manageUser/edit/<?php echo $r->id; ?>">Edit</a></td>
                        <td style="text-align: center;"><a href="<?php echo base_url(); ?>c_super_user/manageUser/hapus/<?php echo $r->id; ?>">Hapus</a></td>
                        <td hidden="hidden"></td>
                      </tr>
                    <?php $a = $a + 1; } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Hak Akses</th>
                    <th colspan="3" style="text-align: center;">Action</th>
                    <th hidden="hidden"></th>
                  </tr>
                </tfoot>
              </table>
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