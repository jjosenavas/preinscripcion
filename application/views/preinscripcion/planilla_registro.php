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
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Estimado (a) Aspirante: <strong> <?php echo $nombre1;
                                                                                        echo ' ';
                                                                                        echo $apellido1;
                                                                                        echo ', cédula de indentidad número: ';
                                                                                        echo $cedula; ?></strong></h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"> Usted se ha registrado de forma satisfactoria en la carrera: <strong><?php echo $carrera; ?> </strong>.
                                El siguiente paso es el envío de tus documentos en formato digital entre el y el , a los correos que se entaran publicando en nuestro sitio web y por nuestras redes sociales
                            </h6><br><br>

                        </div>
                        <div class="">
                            <a href="<?php echo base_url(); ?>preinscripcion/preinscripcion" class="btn btn-app">
                                <i class="fas fa-reply-all color_rojo"></i> Volver
                            </a>                            
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->