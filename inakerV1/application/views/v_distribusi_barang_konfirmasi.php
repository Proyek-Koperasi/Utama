  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Permintaan Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Distribusi Barang</a></li>
        <li>Konfirmasi Pengiriman Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Nama Koperasi Primer</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Status</th>
                    <th>Konfirmasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $a = 1; foreach ($row as $r) {
                    ?>
                      <tr>
                        <td><?php echo $a; ?></td>
                        <td><?php echo $r->nama_barang; ?></td>
                        <td><?php echo $r->jumlah_barang; ?></td>
                        <td><?php echo $r->nama_kp; ?></td>
                        <td><?php if($r->tanggal_kirim == '0000-00-00'){ echo "-"; }else{ echo date('d M Y',strtotime($r->tanggal_kirim)); } ?></td>
                        <td><?php if($r->status == 0){ echo "Belum Dikirim"; }else{ echo "Sudah Dikirim"; }?></td>
                        <td align="center"><?php if($r->status == 0){ echo '<a href="'.base_url().'c_distribusi_barang/proses_konfirmasi/'.$r->id_distribusi.'"><i class="fa fa-check"></i>'; }else{ echo "Terkonfirmasi"; }?></td>
                      </tr>
                    <?php $a = $a + 1; } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Nama Koperasi Primer</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Status</th>
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