<footer class="main-footer">
    
</footer>
<div class="control-sidebar-bg"></div>
</div>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $('#IdProvinsi').change(function(){
        var IdProvinsi = $("#IdProvinsi").val();
        $.ajax({
          url: "<?=base_url();?>ProvKota/ambilkota.php",
          data: "IdProvinsi="+IdProvinsi,
          cache: false,
          success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $('#IdKota').html(msg);
          }
        });
      });
  });
</script>
</body>
</html>