<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-success">
                        </i><b>&nbsp;Hello! </b>Welcome Back <b><?php echo $this->session->userdata('email_ang'); ?> </b>
                        <i class="fa  fa-pencil"></i><b> di E-Koperasi
                    </div>
                </div>
                
                <!--end  Welcome -->
                <div class="col-lg-10 connectedSortable">
                    
                       <?php
						foreach ($views as $Array ) {		
						//print_r($Array);			
					
				?>
       <form method="post" action="<?=base_url();?>c_anggota/ProsesupdatePhoto/<?=$Array['id_anggota']?>" enctype="multipart/form-data">
<table border="0" align="center" class="table responsive">
    <tr>
      <th width="153" rowspan="4" scope="row"><img src="<?=base_url().$Array['pas_foto_ang']?>" class="img-responsive img-thumbnail" />     </th>
    <th width="144" scope="row">No KTP</th>
    <td colspan="2"><input name="NoKTP" type="text" class="form-control" value="<?=$Array['noKtp_ang']?>"  readonly/></td>
    </tr>
    
    <tr>
      <th width="144" scope="row">Nama Lengkap</th>
    <td colspan="2"><input name="Nama" type="text" class="form-control" value="<?=$Array['nama_ang']?>"  readonly/></td>
    </tr>
    <tr>
      <th scope="row"><label for="dtp_input2" class="col-sm-14 control-label">Tempat  Tanggal Lahir</label>
      <td width="201"><input name="tempat" type="text" class="form-control" value="<?=$Array['tempat_lahir_ang']?>" readonly/></td>
    <td width="144">
    <input name="tgl" type="text" class="form-control" value="<?=$Array['tgl_lahir_ang']?>" readonly/></td> 
   </tr>
    
  <tr>
    <th scope="row">Jenis Kelamin</th>
    <td colspan="2"><input name="jk" type="text" class="form-control" value="<?=$Array['jk_ang']?>" readonly/></td></tr>
    <tr>
      <th width="153" rowspan="10" scope="row"></th>
      <th scope="row">Alamat Lengkap</th>
    <td colspan="2"><input name="alamat" type="text" maxlength="75" class="form-control" value="<?=$Array['alamat_ang']?>" readonly/></td>
    </tr>
     <tr>
       <th scope="row">No Hp </th>
    <td colspan="2"><input name="NoHp" type="text" maxlength="12" class="form-control" value="<?=$Array['telp_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Pekerjaan</th>
    <td colspan="2"><input name="pekerjaan" type="text" maxlength="35" class="form-control" value="<?=$Array['pekerjaan_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Alamat Kantor / Kerja</th>
    <td colspan="2"><input name="alamatKerja" type="text" maxlength="12" class="form-control" value="<?=$Array['alamatkerja_ang']?>" readonly/></td>
    </tr> 
    <tr>
      <th scope="row">Username</th>
    <td colspan="2"><input name="Username" type="text" class="form-control" value="<?=$Array['user_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Alamat Email</th>
    <td colspan="2"><input name="AlamatEmail" type="email" class="form-control" value="<?=$Array['email_ang']?>" readonly/></td>
    </tr>
   <tr>
     <th scope="row">Password</th>
    <td colspan="2"><input name="password" type="text" class="form-control" value="<?=$Array['password_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Level</th>
      <td colspan="2"><input name="level" type="text" class="form-control" value="<?=$Array['level']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pendaftaraan</th>
      <td colspan="2"><input name="tgldaftar" type="text" class="form-control" value="<?=$Array['tgl_daftar']?>" placeholder="" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Pas Foto</th>
     <td colspan="2"><input name="foto" type="file" class="form-control" value="" /></td></tr>
    <tr>
      <input name="foto" type="hidden" class="form-control" value="<?=$Array['pas_foto_ang']?>" placeholder="" readonly/>
 <input name="ktp" type="hidden" class="form-control" value="<?=$Array['ktp_ang']?>" placeholder="" readonly/>
      <th scope="row"><div align="right"><input type="submit" value="Change Photo" class="btn btn-lg btn-success">
      </div></th>

    </tr>

       <?php
											}
										?>
</table><!-- /hello -->
</i><b> di E-Koperasi
                   
                </div>
            
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>