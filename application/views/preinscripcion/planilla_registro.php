<!-- Content Wrapper. Contains page content -->
<div id="imprimir" class="">
<div class="content-wrapper">
<?php
    $fecha_actual                = strtotime(date("d-m-Y", time()));
    $fecha_educacion_desde       = strtotime("14-03-2022");
    $fecha_educacion_hasta       = strtotime("18-03-2022");
    $fecha_electronica_desde     = strtotime("21-03-2022");
    $fecha_electronica_hasta     = strtotime("25-03-2022");
    $fecha_mecanica_desde        = strtotime("28-03-2022");
    $fecha_mecanica_hasta        = strtotime("01-04-2022");
    $fecha_informatica_desde     = strtotime("04-04-2022");
    $fecha_informatica_hasta     = strtotime("08-04-2022");
    $fecha_admin_empre_desde     = strtotime("18-04-2022");
    $fecha_admin_empre_hasta     = strtotime("22-04-2022");
    $fecha_contaduria_desde      = strtotime("25-04-2022");
    $fecha_contaduria_hasta      = strtotime("29-04-2022");
    $fecha_rezagados_desde       = strtotime("02-05-2022");
    $fecha_rezagados_hasta       = strtotime("03-05-2022");

    $correo_envio = '';
    $fecha_limite = '';

    if ($fecha_actual >= $fecha_educacion_desde && $fecha_actual <= $fecha_educacion_hasta) {
        $correo_envio = "admisioniujoeducacion@gmail.com";
        $fecha_limite = 'Domingo 20-03-2022';
    } else if ($fecha_actual >= $fecha_electronica_desde && $fecha_actual <= $fecha_electronica_hasta) {
        $correo_envio = "admisioniujoelectro@gmail.com";
        $fecha_limite = 'Domingo 03-04-2022';
    } else if ($fecha_actual >= $fecha_mecanica_desde && $fecha_actual <= $fecha_mecanica_hasta) {
        $correo_envio = "admisioniujomecanica@gmail.com";
        $fecha_limite = 'Domingo 27-03-2022';
    } else if ($fecha_actual >= $fecha_informatica_desde && $fecha_actual <= $fecha_informatica_hasta) {
        $correo_envio = "admisioniujoinformatica@gmail.com";
        $fecha_limite = 'Domingo 10-04-2022';
    } else if ($fecha_actual >= $fecha_admin_empre_desde && $fecha_actual <= $fecha_admin_empre_hasta) {
        $correo_envio = "admisioniujoadm@gmail.com";
        $fecha_limite = 'Domingo 24-04-2022';
    } else if ($fecha_actual >= $fecha_contaduria_desde && $fecha_actual <= $fecha_contaduria_hasta) {
        $correo_envio = "admisioniujocontaduria@gmail.com";
        $fecha_limite = 'Domingo 01-05-2022';
    }
    ?>


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> PROCESO DE PREINSCRIPCIÓN</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h3 class="card-title m-0">Estimado (a) Aspirante: <strong> <?php echo $nombre1;
                                                                                        echo ' ';
                                                                                        echo $apellido1;
                                                                                        echo ', cédula de indentidad número: ';
                                                                                        echo $cedula; ?></strong></h3>
                                                                                        <h1 class="m-0 float-right"> <?php echo 'Planilla n° ' . $planilla; ?></h1>
                        </div>
                        <div class="card-body">
                            <p class="card-title"> Usted se ha registrado de forma satisfactoria en la carrera: <strong><?php echo $carrera; ?>.</strong>
                            El siguiente paso es el envío de los siguentes documentos en formato digital (scaneados):</p>
                              <li>Cédula de identidad</li>
                              <li>Título de bachiller</li>
                              <li>Planilla Opsu / Rusnies</li>
                              <li>Notas Certificadas</li>
                             <p> al correo: <?php echo '<strong>';echo $correo_envio; echo '</strong>'; echo' y la fecha límite de envío es el día ';echo '<strong>';echo $fecha_limite;echo '</strong>'; ?>
                            </p>
                            <br><br>

                        </div>
                        <div class="">
                            <a href="<?php echo base_url(); ?>preinscripcion/preinscripcion" class="btn btn-app no-print">
                                <i class="fas fa-reply-all color_rojo"></i> Volver
                            </a>
                            <button class="btn btn-app no-print" onclick="jQuery('#imprimir').print()">
                            <i class="fas fa-print color_rojo"></i> Imprimir
                           </button>
                        </div>
                    </div>

                

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
 </div>
</div>
</div>
<!-- /.content-wrapper -->