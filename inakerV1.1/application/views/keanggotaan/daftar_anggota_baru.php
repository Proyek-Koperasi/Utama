<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Daftar 
        <small>Anggota Baru</small>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          <form action="<?=base_url();?>c_keanggotaan/ProsesRegister/" enctype="multipart/form-data" method="post">
            <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No KTP</label>
                  <div class="col-sm-7">
                    <input type="text" name="NoKTP" class="form-control" placeholder="No KTP">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-7">
                    <input type="text" name="Nama" class="form-control" placeholder="Nama Lengkap">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                  <div class="col-sm-4">
                    <input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir">
                  </div>
                  <div class="col-sm-3">
                    <input type="date" name="tgl" class="form-control">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <select name="JenisKelamin" class="form-control">
                    <option>- Pilih Jenis Kelamin-</option>
                    <option value="Laki Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Lengkap</label>
                  <div class="col-sm-3">
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
                       </div>
                     <div class="col-sm-2">
                     <select name="IdProvinsi" class="form-control" id="IdProvinsi">
                      <option>Pilih Provinsi</option>
                  <?php
          
                  foreach($isi as $row){
                
                  ?>
                   <option value="<?=$row['IdProvinsi']?>"><?=$row['NamaProvinsi']?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="col-sm-2">
                  <select name="IdKota" class="form-control" id="IdKota">
                  <option>Pilih Kota</option>
                  </select>
                  </div> 
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No Handphone / Telepon</label>
                  <div class="col-sm-7">
                    <input type="text" name="NoHp" class="form-control" placeholder="No Handphone / Telepon">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-7">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Kantor / Kerja</label>
                  <div class="col-sm-7">
                    <input type="text" name="alamatKerja" class="form-control" placeholder="Alamat Kantor / Kerja">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-7">
                    <input type="username" name="username" class="form-control" placeholder="Username">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Email</label>
                  <div class="col-sm-7">
                    <input type="email" name="AlamatEmail" class="form-control" placeholder="Alamat Email">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-7">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pas foto</label>
                  <div class="col-sm-7">
                    <input type="file" name="foto" class="form-control">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">KTP</label>
                  <div class="col-sm-7">
                    <input type="file" name="ktp" class="form-control">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pendaftaraan</label>
                  <div class="col-sm-7">
                    <input type="text" name="tgldaftar" value="<?php echo date("Y-m-d");?>" class="form-control" readonly>
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                    <input type="submit" value="Daftar" class="btn btn-primary btn-block btn-flat">
                  </div>
                  <div class="col-sm-2">
                    <input type="button" onClick="window.location.href='<?=base_url();?>'" value="Batal" class="btn btn-danger btn-block btn-flat">
                  </div>
                </div>
              </div>
             </div>
            </form>
        </section>   
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>