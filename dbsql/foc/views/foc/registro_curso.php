<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Inscripción en formación complementaria</h1>
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

                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-danger">
                                        <div class="card-header">
                                            <h3 class="card-title">Registrar curso</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="new_curso_foc" role="form" action="<?php echo base_url(); ?>foc/foc/store" method="POST">
                                                <input type="hidden" name="id_estudiante" value="<?php echo $id_estudiante ?>" />
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="table-responsive">
                                                            <label>Magis Profesional</label>
                                                            <table id="dgeneral" class="display border1 table table-hover table-striped">

                                                                <thead style="background: #F5F5F5">
                                                                    <th class="text-center cabecera">#</th>
                                                                    <th class="text-center cabecera">Curso</th>
                                                                    <th class="text-center cabecera">Costo</th>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1;
                                                                    if (!empty($cursos)) : ?>
                                                                        <?php foreach ($cursos as $curso) : ?>
                                                                            <?php if ($curso->nombre_d == 'Académica') : ?>
                                                                                <input type="hidden" name="id_curso_profesional[]" value="<?php echo $id = $curso->id; ?>" />
                                                                                <tr class="text-center">
                                                                                    <td> <?php echo $i++; ?></td>
                                                                                    <td class="text-center">
                                                                                        <?php echo $curso->nombre_c; ?>
                                                                                    </td>
                                                                                    <td><?php echo $curso->costo; ?></td>
                                                                                </tr>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    <?php endif; ?>
                                                                </tbody>
                                                            </table>

                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Username">Magis Humano</label>
                                                            <select name="curso_2" id="curso_2" class="form-control form-control-sm" title="Selecciona un curso por favor">
                                                                <option value="">Seleccione...</option>
                                                                <?php if (!empty($cursosHumana)) : ?>
                                                                    <?php foreach ($cursosHumana as $curso) : ?>
                                                                        <?php if ($curso->nombre_d == 'Cultural') : ?>
                                                                            <option value="<?php echo $curso->id ?>">
                                                                                <?php echo $curso->nombre_c ?>
                                                                            </option>
                                                                        <?php endif ?>
                                                                    <?php endforeach; ?>
                                                                <?php endif ?>
                                                            </select>
                                                            <span id="sexo_message"></span>
                                                        </div>
                                                    </div>

                                                    <!-- /.card-body -->
                                                    <hr class="info">
                                                    <div class="">
                                                        <!-- <a href="<?php echo base_url(); ?>foc/foc/logout" class="btn btn-app">
                                                        <i class="fas fa-reply-all color_rojo"></i> Volver
                                                    </a> -->
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