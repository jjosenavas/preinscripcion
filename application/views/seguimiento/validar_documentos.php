<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-12"><br><br>
                                    <!-- general form elements -->
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Proceso de verificación</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="new_admitido" role="form" action="<?php echo base_url(); ?>seguimiento/seguimiento/admitidos" method="POST">
                                                <input type="hidden" id="carrera" name="carrera" value="<?php echo (isset($data_aspirante->carrera)) ?  ($data_aspirante->carrera) : "No selecciono"; ?>" />
                                                <input type="hidden" id="telefono" name="telefono" value="<?php echo (isset($data_aspirante->telefono)) ?  ($data_aspirante->telefono) : "No tiene"; ?>" />
                                                <input type="hidden" id="direccion" name="direccion" value="<?php echo (isset($data_aspirante->direccion)) ?  ($data_aspirante->direccion) : "No tiene"; ?>" />
                                                <input type="hidden" id="fechanac" name="fechanac" value="<?php echo (isset($data_aspirante->fechanac)) ?  ($data_aspirante->fechanac) : "No tiene"; ?>" />
                                                <input type="hidden" id="id_aspirante" name="id_aspirante" value="<?php echo $data_aspirante->id ?>" />
                                                <input type="hidden" id="sexo" name="sexo" value="<?php echo $data_aspirante->sexo ?>" />

                                                <hr class="color_info">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="fecha_actual">Fecha</label>
                                                            <input type="text" class="form-control form-control-sm" name="fecha_actual" id="fecha_actual" value="<?php echo date('d-m-Y') ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="cedula">Cédula</label>
                                                            <input minlength="8" maxlength="8" type="text" class="form-control form-control-sm" name="cedula" id="cedula" onkeypress="return soloNumeros(event)" value="<?php echo (isset($data_aspirante->cedula)) ?  ($data_aspirante->cedula) : "No tiene"; ?>" required>
                                                            <span id="cedula_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Nombres">Primer nombre</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="p_nombre" id="p_nombre" onkeypress="return soloLetras(event)" value="<?php echo (isset($data_aspirante->nombre1)) ?  ($data_aspirante->nombre1) : "No tiene"; ?>">
                                                            <span id="p_nombre_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="s_nombre">Segundo nombre</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="s_nombre" id="s_nombre" onkeypress="return soloLetras(event)" value="<?php echo (isset($data_aspirante->nombre2)) ?  ($data_aspirante->nombre2) : "No tiene"; ?>">
                                                            <span id="s_nombre_message"></span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="p_apellido">Primer apellido</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="p_apellido" id="p_apellido" onkeypress="return soloLetras(event)" value="<?php echo (isset($data_aspirante->apellido1)) ?  ($data_aspirante->apellido1) : "No tiene"; ?>">
                                                            <span id="p_apellido_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="p_apellido">Segundo apellido</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="s_apellido" id="s_apellido" onkeypress="return soloLetras(event)" value="<?php echo (isset($data_aspirante->apellido2)) ?  ($data_aspirante->apellido2) : "No tiene"; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Email">Correo Electrónico</label>
                                                            <input type="text" class="form-control form-control-sm" name="email" id="email" onblur="validarEmail()" value="<?php echo (isset($data_aspirante->email)) ?  ($data_aspirante->email) : "No tiene"; ?>" required>
                                                            <span id="email_message"></span>
                                                        </div>
                                                    </div>


                                                </div>
                                                <hr class="color_info">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="card card-info">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Documentos Consignados</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <!-- checkbox -->
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <div class="icheck-primary d-inline">
                                                                                            <label for="cedula_chek">Cédula de identidad</label>
                                                                                            <input type="checkbox" id="cedula_check" name="cedula_check">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <div class="icheck-primary d-inline">
                                                                                            <label for="notas_chek">Notas certificadas</label>
                                                                                            <input type="checkbox" name="notas_check" id="notas_check">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <div class="icheck-primary d-inline">
                                                                                            <label for="titulo_chek">Título de bachiller</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                            <input type="checkbox" name="titulo_check" id="titulo_check">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <div class="icheck-primary d-inline">
                                                                                            <label for="rusnies_chek">Rusnies/OPSU</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                            <input type="checkbox" name="rusnies_check" id="rusnies_check">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Observaciones</label>
                                                            <textarea name="observaciones" id="observaciones" class="form-control form-control-sm" rows="6"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="color_info">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="info-box">
                                                            <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>
                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Total admitidos</span>
                                                                <span class="info-box-number"><?php echo $cantidad_admitidos ?></span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <hr class="color_info">
                                                <div class="">
                                                    <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="btn btn-app">
                                                        <i class="fas fa-reply-all"></i> Volver
                                                    </a>
                                                    <button type="submit" id="btn_save" class="btn btn-app"><i class="fas fa-save"></i> Registrar</button>
                                                </div>
                                                <hr class="color_info">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                    </section>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->