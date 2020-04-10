<script>
    $(document).ready(function () {
        $.get(<?php echo base_url('api/Competition/allCompetation') ?>, function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });

</script>