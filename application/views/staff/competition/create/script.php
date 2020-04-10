<script>
  $(function () {
    
    $('#create-compet').validate({
      rules:{
        'name': "required",
        'compet_start': "required",
        'compet_end': "required",
        'palce': "required",
        'start': "required",
        'end': "required",
        'payCost': "required",
        'endPay': "required",

      },
      messages:{
        'name': "กรอกชื่อการแข่งขัน",
        'compet_start': "กรอกวันเริ่มการแข่งขัน",
        'compet_end': "กรอกวันสิ้นสุดการแข่งขัน",
        'palce': "กรอกสถานที่การแข่งขัน",
        'start': "กรอกวันเปิดรับสมัคร",
        'end': "กรอกวันปิดรับสมัคร",
        'payCost': "กรอกค่าสมัคร",
        'endPay': "กรอกวันสิ้นสุดการจ่ายเงิน",

      }

    });

  });
  $('.datepicker').datepicker({
    startDate: '-3d'
  });

  // ---------------------------------------
    $("#comEnd").hide();
    $("#comRegisEnd").hide();

    $("#start").change(function (e) { 
      e.preventDefault();
      if($("#start").val() != null){
        $("#comRegisEnd").show();
      }
      if($("#start").val() == ""){
        $("#comRegisEnd").hide();
      }
    });
    $("#compet_start").change(function (e) { 
      e.preventDefault();
      if($("#compet_start").val() != null){
        $("#comEnd").show();
      }
      if($("#compet_start").val() == ""){
        $("#comEnd").hide();
      }
    });
// ----------------------------------------------------------

//-----------------------function--------------------------------- 

</script>

