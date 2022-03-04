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
                    <div class="callout callout-danger">
                        <h5><i class="fas fa-info"></i> Importante:</h5>
                        Este es el primer paso para ti que quieres formarte en una carrera universitaria en nuestro instituto.
                        Registra cada uno de los datos que se solicitan, deben ser actualizados y reales, no dejes datos en blanco.
                    </div>

                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-12"><br><br>
                                    <!-- general form elements -->
                                    <div class="card card-danger">
                                        <div class="card-header">
                                            <h3 class="card-title">Nuevo aspirante</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="new_asp" role="form" action="<?php echo base_url(); ?>preinscripcion/preinscripcion/store" method="POST">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="cedula">Cédula</label>
                                                            <input minlength="7" maxlength="8" type="text" class="form-control form-control-sm" name="cedula" id="cedula" onkeypress="return soloNumeros(event)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Nombres">Primer nombre</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="p_nombre" id="p_nombre" onkeypress="return soloLetras(event)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="s_nombre">Segundo nombre</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="s_nombre" id="s_nombre">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="p_apellido">Primer apellido</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="p_apellido" id="p_apellido" onkeypress="return soloLetras(event)">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="p_apellido">Segundo apellido</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="s_apellido" id="s_apellido" onkeypress="return soloLetras(event)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="fecha_nac">Fecha de nacimiento</label>
                                                            <input type="date" class="form-control form-control-sm" name="fecha_nac" id="fecha_nac">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="lug_nac">Lugar de nacimiento</label>
                                                            <input type="text" class="form-control form-control-sm" name="lug_nac" id="lug_nac">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Username">Sexo</label>
                                                            <select name="sexo" id="sexo" class="form-control form-control-sm">
                                                                <option value="">Seleccione...</option>
                                                                <option value="femenino">Femenino</option>
                                                                <option value="masculino">Masculino</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Username">Estado civil</label>
                                                            <select name="estado_civil" id="estado_civil" class="form-control form-control-sm">
                                                                <option value="">Seleccione...</option>
                                                                <option value="soltero">Soltero(a)</option>
                                                                <option value="casado">Casado(a)</option>
                                                                <option value="viudo">Viudo(a)</option>
                                                                <option value="concubino">Concubino(a)</option>
                                                                <option value="divorciado">Divorciado(a)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="direccion">Dirección</label>
                                                            <input minlength="10" maxlength="300" type="text" class="form-control form-control-sm" name="direccion" id="direccion">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Email">Correo Electronico</label>
                                                            <input type="email" class="form-control form-control-sm" name="email" id="emaill">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="telefono">Número de teléfono</label>
                                                            <input minlength="10" maxlength="11" type="text" class="form-control form-control-sm" name="telefono" id="telefono" onkeypress="return soloNumeros(event)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="plantel">Nombre del plantel de procedencia</label>
                                                            <input minlength="10" maxlength="100" type="text" class="form-control form-control-sm" name="plantel" id="plantel">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="ano_egre">Año de egreso</label>
                                                            <select name="ano_egre" id="ano_egre" class="form-control form-control-sm">
                                                                <option value='' selected>Seleccione año</option>
                                                                <?php for ($i = date('o'); $i >= 2000; $i--) {

                                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="rusnie">RUSNIES (OPSU)</label>
                                                            <input minlength="11" maxlength="16" type="text" class="form-control form-control-sm" name="rusnie" id="rusnie" onkeypress="return soloNumeros(event)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="serial">Serial del título de bachiller</label>
                                                            <input minlength="11" maxlength="16" type="text" class="form-control form-control-sm" name="serial" id="serial" onkeypress="return alfanumerico(event)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="carrera">Carrera</label>
                                                            <select name="carrera" id="carrera" class="form-control form-control-sm">
                                                                <option value="">Seleccione una carrera</option>
                                                                <option value="Educación especial">Educación especial</option>
                                                                <option value="Educación integral">Educación integral(a)</option>
                                                                <option value="Educación preescolar">Educación preescolar(a)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- /.card-body -->
                                                <hr class="info">
                                                <div class="">
                                                    <a href="<?php echo base_url(); ?>preinscripcion/preinscripcion" class="btn btn-app">
                                                        <i class="fas fa-reply-all color_rojo"></i> Volver
                                                    </a>
                                                    <button type="submit" id="btn_save" class="btn btn-app"><i class="fas fa-save color_rojo"></i> Registrar</button>
                                                </div>
                                                <hr>
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