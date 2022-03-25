<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0"> PROCESO DE PREINSCRIPCIÓN</h1> -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
        <a href="" class="navbar-brand">
              <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo Institucional" width="270" height="70">        
          </a>   <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                           <p>Estudiante <?php echo $cursos->nombre1.' '.$cursos->apellido1.' cédula: '.$cursos->cedula.', usted se ha registrado de forma satisfactoria en los cursos de formación complementaria.';?> </p>
                           
                        </div>
                        
                        <div class="">
                            <a href="<?php echo base_url(); ?>auth" class="btn btn-app no-print">
                                <i class="fas fa-reply-all color_rojo"></i> Inicio
                            </a>
                            <button class="btn btn-app no-print" onclick="jQuery('#imprimir').print()">
                                <i class="fas fa-print color_rojo"></i> Imprimir
                            </button>
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