<script>
    $(document).ready(function () {
        $.getJSON(<?php echo base_url('api/Competition/allCompetation') ?>,function(data){ // คืนค่าตัวแปร data เป็น json object
        //JSON.stringify(data) 
        
        $.each(data, function (index, value) { 
            
            alert(value);   
          });
    });
    });

</script>