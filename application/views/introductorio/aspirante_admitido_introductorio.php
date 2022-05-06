<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">

                <div class="col-sm-4">
                    <h1 class="m-0"> Curso introductorio</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <?php $resultado = '';

                if ($data_aceptado->estado == 1) {
                    $resultado = '<strong>Usted ha sido seleccionado para participar en el Curso Introductorio correspondiente al Proceso de Admisión 2-2022. <br> El curso comenzará el lunes 09 de mayo  hasta el 17 de junio 2022, bajo la modalidad a distancia, a través de la plataforma virtual del instituto. <br>
                                  Para dar inicio debes cancelar el monto de 10$ pago único y registrarlo por la página web del instituto. (Obligatorio)<br> Para ingresar al aula accede al enlace  https://aulabqto.iujoac.org.ve <br> Usuario: número de cédula <br> Clave: Estudianteiujo-1 <br> Revisar información recibida en el correo electrónico para más detalles del pago y pasos a seguir.</strong>';
                } else {
                    $resultado = 'En esta oportunidad usted no ha sido seleccionado, gracias por su participación. Le invitamos a participar en el siguiente proceso de Selección y Admisión. <br> Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos.<br> Estaremos esperando su regreso.';
                }

                ?>
                <!-- /.col-md-6 -->

                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title">Apreciado aspirante <strong><?php echo $data_aceptado->nombre1 . ' ' .  $data_aceptado->apellido1 . ' número de cédula: ' . $data_aceptado->cedula . ' de la carrera: ' . $data_aceptado->carrera ?></strong></h5><br>
                        </div>
                        <div class="card-body">

                            <h6 class="card-title"><?php echo $resultado;  ?></h6><br><br><br>
                            <div class="col-lg-12">
                                <form id="consulta_form" action="<?php echo base_url(); ?>introductorio/introductorio/store" method="POST">
                                    <div class="input-group input-group-sm">
                                        <input type="hidden" name="chequeado" value="1">
                                        <input type="hidden" name="cedula" value="<?php echo $data_aceptado->cedula; ?>">
                                    </div><br>
                                    <button id="btn_cedula" type="submit" class="btn btn-danger btn-flat">Aceptar</button>
                                </form>
                            </div>
                        </div>

                    </div><!-- /.card -->
                </div>

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->