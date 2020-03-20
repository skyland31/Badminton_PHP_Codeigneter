<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });

    $('#create-compet').validate({
      rules:{
        'name': "required",
        // 'txt-password': "required"
      },
      messages:{
        'name': "กรอก username",
        // 'txt-password': "กรอก password"
      }
    });

    // $('#frm-login').submit(function (e) { 
    //   e.preventDefault();
      
    // });
  });
</script>