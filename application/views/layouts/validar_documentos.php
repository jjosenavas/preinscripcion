<script>
  $("#estatus").on("change", function(event) {
    event.preventDefault();
    let base_url = "<?php echo base_url(); ?>";
    let estatus = $("#estatus").val();   
    let cedula_ch  = $("#cedula_check").val();
    let notas_ch   = $("#notas_check").val();
    let titulo_ch  = $("#titulo_check").val();
    let rusnies_ch = $("#rusnies_check").val()
  
  });


</script>