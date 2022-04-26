<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="col-sm-12">
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
                    <?php if ($this->session->flashdata("error_no")) : ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><i class="icon fa  fa-check"></i><?php echo $this->session->flashdata("error_no"); ?></p>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Consulta general</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-danger">
                        <h4>Apreciado estudiante</h4>
                        <div class="">
                            <h2>Para el próximo semestre, Periodo académico 2-2022, ¿Cuentas con la disponibilidad de continuar tu carrera bajo la bimodalidad, es decir, presencial y virtual según las materias?</h2>
                            <h5><strong>Nota:</strong> En caso que tsu respuesta sea negativa (NO) por favor especifique si es por trabajo u otro motivo.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="callout callout-success">
                        <div class="card-body">
                            <form id="consulta1" role="form" action="<?php echo base_url(); ?>encuesta/consulta/store" method="POST">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="Username">Número de cédula</label>
                                            <input class="form-control form-control-sm" type="text" name="cedula" id="cedula" maxlength="8" minlength="8" onkeypress="return soloNumeros(event)" onblur="comprobarCedula()" required>
                                            <span id="cedula_check" style="color:red; font-size: 14px;"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">&nbsp;&nbsp;&nbsp;
                                            <label for="Username">Respuesta</label>
                                            <div class="form-check">&nbsp;&nbsp;&nbsp;
                                                <input class="form-check-input " type="radio" name="radio1" value="SI">
                                                <label class="form-check-label">Si</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input class="form-check-input" type="radio" name="radio1" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="Username">Motivo</label>
                                            <div class="form-check">
                                                <input class="form-check-input " type="checkbox" name="trabajo" value="trabajo">
                                                <label class="form-check-label">Trabajo</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="Username">Otro (especifique)</label>
                                            <div class="form-check">
                                                <input class="form-control form-control-sm" type="text" name="otro">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"><br>
                                    <button type="submit" id="btn_enviar" class="btn btn-block btn-danger btn-sm">Enviar</button>
                                </div>
                            </form>
                        </div>

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