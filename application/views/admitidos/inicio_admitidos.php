<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container">
            <?php if ($this->session->flashdata("listo")) : ?>
                <div class=" alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><i class="icon fa fa-check"></i><?php echo $this->session->flashdata("listo"); ?></p>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata("error")) : ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><i class="icon fa  fa-check"></i><?php echo $this->session->flashdata("error"); ?></p>

                </div>
            <?php endif; ?>
            <div class="row mb-2">
                <div class="col-lg-4">
                </div>
                <div class="col-sm-4">
                    <h1 class="m-0"> Curso introductorio</h1>
                </div><!-- /.col -->
                <div class="col-lg-4">
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- /.col-md-6 -->
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title">Resultados de selección del curso introductorio lapso 2-2022</h5><br>
                        </div>
                        <div class="card-body">

                            <h6 class="card-title">Por favor introduce tu número de cédula y presiona consultar</h6><br><br><br>
                            <div class="col-lg-12">
                                <form id="consulta_form" action="<?php echo base_url(); ?>admitidos/admitidos/verificarAdmitidos" method="POST">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" name="cedula" id="cedula" maxlength="8" minlength="7" onkeypress="return soloNumeros(event)" required>

                                        <span class="input-group-append">
                                            <button id="btn_cedula" type="submit" class="btn btn-info btn-flat">CONSULTAR</button>
                                        </span>
                                    </div>
                                    <span id="cedula_message"></span>
                                </form>
                            </div>
                        </div>

                    </div><!-- /.card -->
                </div>
                <div class="col-lg-2">
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->