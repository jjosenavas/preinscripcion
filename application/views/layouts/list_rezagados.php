<script>
    $("#carrera").on("change", function(event) {
        event.preventDefault();
        let base_url = "<?php echo base_url(); ?>";
        let carrera = $("#carrera").val();

        if ($("#carrera").val() != "") {

            $('#listado_rezagados').DataTable({
                dom: 'Bfrtip',
                //   buttons: [
                //   'csv', 'print'
                // ],
                buttons: [{
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> IMPRIMIR',
                    className: "btn-sm btn-info",
                    header: true,
                    margin: [0, 0, 30, 0],
                    title: '',
                    pageSize: 'A4',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                        order: 'applied'
                    },
                    customize: function(win) {
                        {
                            var last = null;
                            var current = null;
                            var bod = [];

                            var css = '@page { size: landscape; }',
                                head = win.document.head || win.document
                                .getElementsByTagName('head')[0],
                                style = win.document.createElement('style');

                            style.type = 'text/css';
                            style.media = 'print';

                            if (style.styleSheet) {
                                style.styleSheet.cssText = css;
                            } else {
                                style.appendChild(win.document.createTextNode(css));
                            }

                            head.appendChild(style);
                        }
                    },
                }, {
                    extend: 'csv',
                    text: '<i class="fas fa-file-excel"></i> CSV',
                    className: "btn-sm btn-success",
                }],
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
                    url: base_url + "seguimiento/seguimiento/rezagados_list",
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
    
   
</script>