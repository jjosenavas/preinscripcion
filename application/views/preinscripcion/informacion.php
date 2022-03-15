<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->    
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
                            <h5 class="card-title m-0">Estimado Estudiante</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"> Te ofrecemos la oportunidad de formarte como Técnico Superior Univesitario (TSU) en las
                                carreras de:</h6>

                            <p class="card-text">
                                <li>ADMINISTRACIÓN</li>
                                <li>CONTADURÍA</li>
                                <li>INFORMÁTICA</li>
                                <li>EDUCACIÓN INTEGRAL</li>
                                <li>EDUCACIÓN PREESCOLAR</li>
                                <li>EDUCACIÓN ESPECIAL</li>
                                <li>MECÁNICA INDUSTRIAL</li>
                                <li>ELECTRÓNICA</li>
                                <li>ELECTROTECNIA</li>
                            </p>
                        </div>

                    </div>
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
                <div class="col-lg-6">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title">Para este proceso de preinscripción es importante tener:</h5><br>
                        </div>
                        <div class="card-body">
                            <li>Título de bachiller original autenticado.</li>
                            <li>Notas certificadas.</li>
                            <li> Cédula de identidad vigente.</li>
                            <li>Carta de buena conducta.</li>
                            <li>Partida de nacimiento.</li>
                            <li>Carnet militar.</li>
                            <br>
                            <h6 class="card-title">Si tienes toda la documentación puedes hacer clic en "PREINSCRIPCIÓN"
                                y llenar el formulario.</h6><br><br><br>
                            <form action="<?php echo base_url(); ?>preinscripcion/preinscripcion/verificarAspirante" method="POST">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="cedula">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-info btn-flat">PREINSCRIPCIÓN</button>
                                    </span>
                                </div>
                                <!-- <a href="<?php //echo base_url(); ?>preinscripcion/preinscripcion/RegistroAspirante" class="btn btn-danger">PREINSCRIPCIÓN</a><br> -->
                            </form>
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