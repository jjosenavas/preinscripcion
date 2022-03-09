<!-- Content Wrapper. Contains page content -->
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

    $carrera_ofertada = 'Proceso inactivo';

    if ($fecha_actual >= $fecha_educacion_desde && $fecha_actual <= $fecha_educacion_hasta) {

        $carrera_ofertada = "<option value='Educación integral'>EDUCACIÓN INTEGRAL</option><option value='Educación preescolar'>EDUCACIÓN PREESCOLAR</option><option value='Educación especial'>EDUCACIÓN ESPECIAL</option>";
    } else if ($fecha_actual >= $fecha_electronica_desde && $fecha_actual <= $fecha_electronica_hasta) {
        $carrera_ofertada = "<option value='Electrónica'>ELECTRONICA</option><option value='Electrotecnia'>ELECTROTECNIA</option>";
    } else if ($fecha_actual >= $fecha_mecanica_desde && $fecha_actual <= $fecha_mecanica_hasta) {
        $carrera_ofertada = "<option value='Mecánica'>MECANIICA</option>";
    } else if ($fecha_actual >= $fecha_informatica_desde && $fecha_actual <= $fecha_informatica_hasta) {
        $carrera_ofertada = "<option value='Informática'>INFORMÁTICA</option>";
    } else if ($fecha_actual >= $fecha_admin_empre_desde && $fecha_actual <= $fecha_admin_empre_hasta) {
        $carrera_ofertada = "<option value='Administración de empresas'>ADMINISTRACIÓN DE EMPRESAS</option>";
    } else if ($fecha_actual >= $fecha_contaduria_desde && $fecha_actual <= $fecha_contaduria_hasta) {
        $carrera_ofertada = "<option value='Contaduría'>CONTADURÍA</option>";
    }

    ?>
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
                    <h5><i class="fas fa-info tamano_icono"></i>mportante:</h5>
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
                                                            <input minlength="8" maxlength="8" type="text"  class="form-control form-control-sm" name="cedula" id="cedula" onkeypress="return soloNumeros(event)" onblur="comprobarCedula()" required>
                                                            <span id="cedula_message"></span>
                                                            <span id="cedula_data" style="color:red; font-size: 12px;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Nombres">Primer nombre</label>
                                                            <input minlength="3" maxlength="45" type="text" onkeypress="nextel(event)" class="form-control form-control-sm" name="p_nombre" id="p_nombre" onkeypress="return soloLetras(event)">
                                                            <span id="p_nombre_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="s_nombre">Segundo nombre</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="s_nombre" id="s_nombre" onkeypress="return soloLetras(event)">
                                                            <span id="s_nombre_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="p_apellido">Primer apellido</label>
                                                            <input minlength="3" maxlength="45" type="text" class="form-control form-control-sm" name="p_apellido" id="p_apellido" onkeypress="return soloLetras(event)">
                                                            <span id="p_apellido_message"></span>
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
                                                            <input type="date" class="form-control form-control-sm" name="fecha_nac" id="fecha_nac" required>
                                                            <span id="fecha_nac_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="lug_nac">Lugar de nacimiento</label>
                                                            <input type="text" class="form-control form-control-sm" name="lug_nac" id="lug_nac" onkeypress="return soloLetras(event)" required>
                                                            <span id="lug_nac_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Username">Sexo</label>
                                                            <select name="sexo" id="sexo" class="form-control form-control-sm" required>
                                                                <option value="">Seleccione...</option>
                                                                <option value="femenino">Femenino</option>
                                                                <option value="masculino">Masculino</option>
                                                            </select>
                                                            <span id="sexo_message"></span>
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
                                                            <span id="estado_civil_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="direccion">Dirección</label>
                                                            <input minlength="10" maxlength="300" type="text" class="form-control form-control-sm" name="direccion" id="direccion" onkeypress="return alfaNumerico(event)" required>
                                                            <span id="direccion_message"></span>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Email">Correo Electrónico</label>
                                                            <input type="text" class="form-control form-control-sm" name="email" id="email" onblur="validarEmail()" required>
                                                            <span id="email_message"></span>
                                                        </div>                                                        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="telefono">Número de teléfono</label>
                                                            <input minlength="10" maxlength="11" type="text" class="form-control form-control-sm" name="telefono" id="telefono" onkeypress="return soloNumeros(event)">
                                                            <span id="telefono_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="plantel">Nombre del plantel de procedencia</label>
                                                            <input minlength="10" maxlength="100" type="text" class="form-control form-control-sm" name="plantel" id="plantel" required>
                                                            <span id="plantel_message"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="ano_egre">Año de egreso</label>
                                                            <select name="ano_egre" id="ano_egre" class="form-control form-control-sm" required>
                                                                <option value='' selected>Seleccione año</option>
                                                                <?php for ($i = date('o'); $i >= 1985; $i--) {

                                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                            <span id="ano_egre_message"></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="rusnie">RUSNIES (OPSU)</label>
                                                            <input minlength="11" maxlength="16" type="text" class="form-control form-control-sm" name="rusnie" id="rusnie" onkeypress="return soloNumeros(event)" onblur="comprobarRusnies()">
                                                            <span id="rusnie_message"></span>
                                                            <span id="rusnie_data" style="color:red; font-size: 14px;"></span>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="serial">Serial del título de bachiller</label>
                                                            <input minlength="11" maxlength="16" type="text" class="form-control form-control-sm" name="serial" id="serial" onkeypress="return alfanumerico(event)" onblur="comprobarTitulo()">
                                                            <span id="serial_message"></span>
                                                            <span id="titulo_data" style="color:red; font-size: 14px;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="carrera">Carrera</label>
                                                            <select name="carrera" id="carrera" class="form-control form-control-sm">
                                                                <?php echo $carrera_ofertada; ?>
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