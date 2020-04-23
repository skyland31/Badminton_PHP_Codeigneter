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
    startDate: '0d',
    minDate: moment().add('d', 1).toDate()
  });

  function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
  }

  $(document).ready(function () {

    $("#start").datepicker('setStartDate, setMinDate').on('changeDate', function (selected) {
      var end_date = new Date(selected.date.valueOf()); //date end of register
      
      $('#end').datepicker('setStartDate', addDays(end_date,1) ).on('changeDate', function (selected){
        var end_pay = new Date(selected.date.valueOf());
        $('#endPay').datepicker('setStartDate', end_pay);

        $('#compet_start').datepicker('setStartDate', addDays(end_pay, 1)).on('changeDate', function (selected) {
          var compet_end = new Date(selected.date.valueOf());
          $('#compet_end').datepicker('setStartDate', addDays(compet_end, 1));
        })
      })
      
    });

});

</script>

