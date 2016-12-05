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
              <?php if($status == 'tambah'){ ?>
                <h3 class="box-title">Tambah User</h3>
              <?php }elseif($status == 'edit'){ ?>
                <h3 class="box-title">Edit User</h3>
              <?php } ?>
            </div>

            <?php if($status == 'tambah'){ ?>
              <form role="form" method="post" action="<?php echo base_url()."c_super_user/addUser/" ?>">
                <div class="box-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label>Akses</label>
                    <select class="form-control" name="akses">
                      <?php foreach ($aksesall as $aa) { ?>
                        <option value="<?php echo $aa->id_akses; ?>"><?php echo $aa->nama_akses; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            <?php }elseif($status == 'edit'){ ?>
              <?php foreach ($row as $r) { ?>
              <form role="form" method="post" action="<?php echo base_url()."c_super_user/editUser/".$r->id; ?>">
                <div class="box-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $r->username; ?>" placeholder="Username" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r->nama; ?>" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label>Akses</label>
                    <select class="form-control" name="akses" disabled>
                      <?php foreach ($aksesall as $aa) { ?>
                        <option value="<?php echo $aa->id_akses; ?>" <?php if($r->id_akses == $aa->id_akses){ echo "selected='selected'"; } ?>><?php echo $aa->nama_akses; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php } ?>
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