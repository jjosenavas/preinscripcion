<script>
    $(".btn_remover").on("click", function(event) {
        event.preventDefault();
        let base_url = "<?php echo base_url(); ?>";
        let id_usuario = $(this).val();

        $.confirm({
            title: 'Confirm!',
            content: 'Simple confirm!',
            buttons: {
                confirm: function() {

                    $.ajax({
                        url: base_url + "usuarios/usuarios/delete",
                        type: "POST",
                        data: {
                            id_usuarios: id_usuario
                        }

                    });
                      window.location.reload();
                },
                cancel: function() {
                    $.alert('Canceled!');
                },
                somethingElse: {
                    text: 'Something else',
                    btnClass: 'btn-blue',
                    keys: ['enter', 'shift'],
                    action: function() {
                        $.alert('Something else?');
                    }
                }
            }
        });
        // let res = confirm('¿ Está seguro de borrar este registro ?');
        // if (res == true) {
        //     window.location = $(this).attr('href');
        // }
    });
</script>