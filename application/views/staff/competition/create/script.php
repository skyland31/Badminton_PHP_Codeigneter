<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>public/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>public/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/dist/js/demo.js"></script>
<script>
    var compet_type = $("#compet_type").val();
    $("#gen").hide();
    $("#compet_type").change(function (e) { 
      e.preventDefault();
      compet_type = $("#compet_type").val();
      $("#gen").show();
      option();
    });
    $("#start").change(function (e) { 
      e.preventDefault();
      $("#startPay").val($("#start").val());
    });
    function option(){
      if(compet_type == "youth"){
        $("#compet_gen").empty();
        $("#compet_gen").html( "<option value = 'U9'>U9</option><option value = 'U11'>U11</option><option value = 'U13'>U13</option><option value = 'U15'>U15</option><option value = 'U17'>U17</option>" );
      }
      else if(compet_type == "people"){
        $("#compet_gen").empty();
        $("#compet_gen").html("<option value = 'N'>N</option><option value = 'S-'>S-</option><option value = 'S+'>S+</option><option value = 'P-'>P-</option><option value = 'P+C'>P+C</option>");
      }
      else{
        $("#gen").hide();
      }
    }
    
  </script>
</body>
</html>
