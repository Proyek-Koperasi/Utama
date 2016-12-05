<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        List 
        <small>Data Anggota</small> | <small><a href="<?php base_url() ?>daftar_anggota">Tambah Data Anggota</a></small>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          
                <form action="" method="">
                      <div class="panel-body">
                      <div class="row control-group">
                            <table id="" class="table table-bordered table-hover table-striped tablesorter">
                            <thead>
                            <div class="modal-body">
                                <tr>
                                <th class="bg-success text-center">No</th>
                                <th class="bg-success text-center">Nama</th>
                                <th class="bg-success text-center">NIP / NIK</th>
                                <th class="bg-success text-center">Alamat</th>                                
                                <th class="bg-success text-center">Telepon / HP</th>                                
                                <th class="bg-success text-center">E-Mail</th>
                                <th colspan="" class="bg-success text-center">Opsi</th>
                                </tr>
                            </div>
                            </thead>
                        
                            <tbody>
                                <?php $no=1; 
                                foreach ($dataanggota as $row){?>
                                <tr>
                                  <td class="text-center"><?php echo $no; ?></td>
                                  <td><?php echo $row->nama_ang; ?></td>
                                  <td><?php echo $row->noKtp_ang; ?></td>
                                  <td><?php echo $row->alamat_ang; ?></td>
                                  <td><?php echo $row->telp_ang; ?></td>
                                  <td><?php echo $row->email_ang; ?></td>
                                  <td class='text-center'>
                                    <div class='btn-group'>
                                      <a href="<?php echo base_url(); ?>c_keanggotaan/detail_anggota/<?php echo $row->id_anggota; ?>" class='btn btn-info'>
                                        <i class="fa fa-tasks"></i>
                                      </a>
                                      <!-- <a href="<?php echo base_url(); ?>halamananggota/edit_dtanggota/<?php echo $row->id_anggota; ?>" class='btn btn-success'> -->
                                        <!-- <i class="fa fa-pencil"></i> -->
                                      <!-- </a> -->
                                    </div>
                                  </td>
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                   
                </div>
            
        </section>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>