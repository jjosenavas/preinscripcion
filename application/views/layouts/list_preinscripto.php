<script>
  $("#carrera").on("change", function(event) {
    event.preventDefault();
    let base_url = "<?php echo base_url(); ?>";
    let carrera = $("#carrera").val();

    if ($("#carrera").val() != "") {

      $('#listado_preinscripto').DataTable({
        "columnDefs": [{
                    targets: [6],
                    render: $.fn.dataTable.render.moment('DD-MM-YYYY')
                }],
          "language": {
          "processing": "Procesando...",
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": " ",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "loadingRecords": "Cargando...",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"

          }
        },
        destroy: true,
        "ajax": {
          url: base_url + "seguimiento/seguimiento/totalInscripto",
          type: "POST",
          dataType: "json",
          data: {
            data_carrera: carrera
          }
        }
      });


    } else {
      alert("!Seleccione una carrera por favor¡");
    }

  });


  $(function() {
    $("#listado_preinscripto").DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>