<script>
    $(function () {
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