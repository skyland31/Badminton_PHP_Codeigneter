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

      
//-----------------------function--------------------------------- 
      function option(){
        if(compet_type == 1){
          $("#compet_gen").empty();
          $("#compet_gen").html( "<option value = 1>U9</option><option value = 2>U11</option><option value = 3>U13</option><option value = 4>U15</option><option value = 5>U17</option>" );
        }
        else if(compet_type == 2){
          $("#compet_gen").empty();
          $("#compet_gen").html("<option value = 6>N</option><option value = 7>S-</option><option value = 8>S+</option><option value = 9>P-</option><option value = 10>P+C</option>");
        }
        else{
          $("#gen").hide();
        }
      }


</script>

