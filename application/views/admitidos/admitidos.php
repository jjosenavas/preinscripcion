<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">

                <div class="col-sm-4">
                    <h1 class="m-0"> Curso introductorio</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <?php $resultado = '';
                //var_dump($data_admitido);exit;
                if ($data_admitido != NULL) {
                    $resultado = '<strong>Usted ha sido seleccionado(a) para el ,proceso de inscripción de Estudiantes Nuevo Ingreso para el lapzo 2 - 2022. Debes asistir al instituto
                                   el día:          , a las           , debes ser puntual.</strong>';
                    $resultado2 = 'Requisitos: <br><li>Cédula de Identidad Vigente(Original y copia ampliada)</li><li>Partida de nacimiento (Original y copia)</li><li>Título de bachiller con estampillas (Original y copia)</li><li>Notas certificadas con estampillas (Original y copia)</li><li>Dos fotos carnet (Recientes)</li><li>Constancia de inscripción militar (Copia)</li><li>Carta de buena conducta (Original y copia)</li><li>Certificado de participación en el OPSU (RUSNIEU)(Original y copia)</li><li>Una carpeta amarilla tamaño oficia sin gancho</li><li>Sobre manila oficio</li><li>Inscripción $10, mensualidad $20, carnet, porta carnet y cinta $3</li>
                     <strong>Nota:</strong>';
                } else {
                    $resultado = 'En esta oportunidad usted no ha sido seleccionado, gracias por su participación. Le invitamos a participar en el siguiente proceso de Selección y Admisión. <br> Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos.<br> Estaremos esperando su regreso.';
                }

                ?>
                <!-- /.col-md-6 -->

                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title">Apreciado aspirante <strong><?php echo $data_admitido->nombre1 . ' ' .  $data_admitido->apellido1 . ' número de cédula: ' . $data_admitido->cedula . ' de la carrera: ' . $data_admitido->carrera ?></strong></h5><br>
                        </div>
                        <div class="card-body">

                            <h6 class="card-title"><?php echo $resultado;  ?></h6><br><br><br>
                            <h6 class="card-title"><?php echo $resultado2;  ?></h6><br><br><br>
                            <div class="col-lg-12">
                                <form id="consulta_form" action="" method="POST">
                                    <div class="input-group input-group-sm">
                                        <input type="hidden" name="chequeado" value="1">
                                        <input type="hidden" name="cedula" value="<?php echo $data_admitido->cedula; ?>">
                                    </div><br>
                                    <button id="btn_cedula" type="submit" class="btn btn-danger btn-flat">Aceptar</button>
                                </form>
                            </div>
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