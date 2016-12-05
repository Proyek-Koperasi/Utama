<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-success">
                        </i>Pengunduran Diri 
                        <i class="fa  fa-pencil"></i><b>
                    </div>
                </div>
                
                <!--end  Welcome -->
                <div class="col-lg-10 connectedSortable">
                    
                        </i>               <?php
            foreach ($views as $Array ) {   
            //print_r($Array);      
          
        ?>
         <form method="post" action="<?=base_url();?>c_anggota/PengunduranDiri/<?=$Array['id_anggota']?>" enctype="multipart/form-data">
<table border="0" align="center" class="table responsive">
    <tr>
    <input name="ktp" type="hidden" class="form-control" value="<?=$Array['ktp_ang']?>"   />
    <input name="foto" type="hidden" class="form-control" value="<?=$Array['pas_foto_ang']?>"   />
      <th width="153" rowspan="4" scope="row"></th>
    <th width="144" scope="row">No KTP</th>
    <td colspan="2">
    <input name="id_anggota" type="hidden" class="form-control" value="<?=$Array['id_anggota']?>"  readonly/>
    <input name="NoKTP" type="text" class="form-control" value="<?=$Array['noKtp_ang']?>"  readonly/></td>
    
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
      <th width="153" scope="row"></th>
      <th scope="row">Alamat Lengkap</th>
    <td colspan="2"><input name="alamat" type="text" maxlength="75" class="form-control" value="<?=$Array['alamat_ang']?>" readonly/></td>
    </tr>
     <tr>
       <th width="153" rowspan="8" scope="row">&nbsp;</th>
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
      <th scope="row">Alamat Email</th>
    <td colspan="2"><input name="AlamatEmail" type="email" class="form-control" value="<?=$Array['email_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Level</th>
      <td colspan="2">
      <input name="username" type="hidden" class="form-control" value="<?=$Array['user_ang']?>" readonly/>
      <input name="password" type="hidden" class="form-control" value="<?=$Array['password_ang']?>" readonly/>
      <input name="level" type="text" class="form-control" value="<?=$Array['level']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pendaftaraan </th>
     <td colspan="2"><input name="tgldaftar" type="text" class="form-control" value="<?=$Array['tgl_daftar']?>" placeholder="" readonly/></td></tr>
     <td colspan=""><input name="tglPengunduran" type="hidden" class="form-control" value="<?php echo   date("Y-m-d")  ; ?>" placeholder="" readonly/></td></tr>

     <tr>
      <th scope="row"><b>Apakah Ada Yakin Ingin Keluar Dari Keanggotaan Koperasi ?</b></th>
     <td colspan=""></td></tr>
    <tr>
 
      <th scope="row"><div align="right"><input type="submit" value="Iya" class="btn btn-lg btn-success">
      </div></th>
      
      <th scope="row"><div align="right"><input type="submit" value="Tidak" class="btn btn-lg btn-warning">
      </div></th>

    </tr>

       <?php
                      }
                    ?>
</table><!-- /hello --></i><b>
                   
                </div>
            
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>