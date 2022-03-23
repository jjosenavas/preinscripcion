<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

    $carrera_ofertada = 1;
    $imagen_carrera = '';
    // var_dump($fecha_actual);echo 'actual <br>';var_dump($fecha_educacion_desde);echo 'desde <br>';var_dump($fecha_rezagados_hasta);echo 'hasta';exit;
    if ($fecha_actual >= $fecha_educacion_desde && $fecha_actual <= $fecha_educacion_hasta) {
        $carrera_ofertada = "<li>EDUCACIÓN INTEGRAL</li><li>EDUCACIÓN PREESCOLAR</li><li>EDUCACIÓN ESPECIAL</li>";
    } else if ($fecha_actual >= $fecha_electronica_desde && $fecha_actual <= $fecha_electronica_hasta) {
        $carrera_ofertada = "<li>ELECTRÓNICA</li><li>ELECTROTECNIA</li>";
    } else if ($fecha_actual >= $fecha_mecanica_desde && $fecha_actual <= $fecha_mecanica_hasta) {
        $carrera_ofertada = "<li>MECÁNICA</li>";
    } else if ($fecha_actual >= $fecha_informatica_desde && $fecha_actual <= $fecha_informatica_hasta) {
        $carrera_ofertada = "<li>INFORMÁTICA</li>";
    } else if ($fecha_actual >= $fecha_admin_empre_desde && $fecha_actual <= $fecha_admin_empre_hasta) {
        $carrera_ofertada = "<li>ADMINISTRACIÓN DE EMPRESAS</li>";
    } else if ($fecha_actual >= $fecha_contaduria_desde && $fecha_actual <= $fecha_contaduria_hasta) {
        $carrera_ofertada = "<li>CONTADURÍA</li>";
    } else if ($fecha_actual >= $fecha_rezagados_desde && $fecha_actual <= $fecha_rezagados_hasta) {
        $carrera_ofertada = "<li>EDUCACIÓN INTEGRAL</li><li>EDUCACIÓN PREESCOLAR</li><li>EDUCACIÓN ESPECIAL</li><li>ELECTRÓNICA</li><li>ELECTROTECNIA</li><li>MECÁNICA</li><li>INFORMÁTICA</li><li>ADMINISTRACIÓN DE EMPRESAS</li><li>CONTADURÍA</li>";
    }

    ?>
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> PROCESO DE PREINSCRIPCIÓN</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Estimado Aspirante</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"> Te ofrecemos la oportunidad de formarte como Técnico Superior Univesitario (TSU) en las
                                carreras de:</h6><br><br>

                            <p class="card-text">
                                <?php if ($fecha_actual >= $fecha_educacion_desde && $fecha_actual <= $fecha_educacion_hasta) :  ?>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/educacion1.jpg' alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/educacion2.jpg' alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/educacion3.jpg' alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- <img src='<?php echo base_url(); ?>assets/img/educacion.png' alt='Educación'> -->
                        <?php endif; ?>
                        <?php if ($fecha_actual >= $fecha_electronica_desde && $fecha_actual <= $fecha_electronica_hasta) :  ?>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/electronica1.jpg' alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/electronica2.jpg' alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/electrotecnia3.jpg' alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/electrotecnia4.jpg' alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if ($fecha_actual >= $fecha_mecanica_desde && $fecha_actual <= $fecha_mecanica_hasta) :  ?>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/pmecanica1.jpg' alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src='<?php echo base_url(); ?>assets/img/pmecanica2.jpg' alt="Second slide">
                                    </div>                                    
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if ($fecha_actual >= $fecha_informatica_desde && $fecha_actual <= $fecha_informatica_hasta) :  ?>
                            <?php echo $carrera_ofertada; ?>
                        <?php endif; ?>
                        <?php if ($fecha_actual >= $fecha_admin_empre_desde && $fecha_actual <= $fecha_admin_empre_hasta) :  ?>
                            <?php echo $carrera_ofertada; ?>
                        <?php endif; ?>
                        <?php if ($fecha_actual >= $fecha_contaduria_desde && $fecha_actual <= $fecha_contaduria_hasta) :  ?>
                            <?php echo $carrera_ofertada; ?>
                        <?php endif; ?>
                        <?php if ($fecha_actual >= $fecha_rezagados_desde && $fecha_actual <= $fecha_rezagados_hasta) :  ?>
                            <?php echo $carrera_ofertada; ?>
                        <?php endif; ?>
                        <?php if ($fecha_actual < $fecha_educacion_desde) :  ?>
                            <?php echo '<p style="color: red; font-size: 25px;">Proceso inactivo, comienza el lunes 14-03-2022</p>'; ?>
                        <?php endif; ?>
                        <?php if ($fecha_actual > $fecha_rezagados_hasta) :  ?>
                            <?php echo '<p style="color: red; font-size: 25px;">Proceso culminado</p>'; ?>
                        <?php endif; ?>
                        </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title">Para este proceso de selección y admisión debes tener los siguientes documentos, debidamente escaneados:</h5><br>
                        </div>
                        <div class="card-body">
                            <li>Cédula de identidad vigente.</li>
                            <li>Título de bachiller original autenticado.</li>
                            <li>Notas certificadas.</li>
                            <li>Certificado OPSU</li>
                            <br>
                            <h6 class="card-title">Si tienes toda la documentación puedes ingresar cédula de identidad sin puntos y hacer clic en "PREINSCRIPCIÓN"
                                y llenar el formulario que se te presentará.</h6><br><br><br>
                            <?php if ($carrera_ofertada != 1) : ?>
                                <form id="consulta_form" action="<?php echo base_url(); ?>preinscripcion/preinscripcion/verificarAspirante" method="POST">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" name="cedula" id="cedula" maxlength="8" minlength="7" onkeypress="return soloNumeros(event)">

                                        <span class="input-group-append">
                                            <button id="btn_cedula" type="submit" class="btn btn-info btn-flat">PREINSCRIPCIÓN</button>
                                        </span>
                                    </div>
                                    <span id="cedula_message"></span>
                                </form>
                            <?php endif; ?>
                        </div>

                    </div><!-- /.card -->
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Importante</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">En nuestro sitio web puedes encontrar información relacionada con cada
                                unas de las carreras que ofrecemos en el "Área Académica".</h6>
                            <br><br><br>
                            <a href="http://www.iujobarquisimeto.edu.ve/" target="_blank" class="btn btn-danger">Ir al sitio web</a>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->