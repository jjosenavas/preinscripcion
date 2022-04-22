<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">        
        <div class="row">

            <div class="col-md-12">

                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title">Listado de aceptados</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="Username">Carrera a seleccionar</label>
                                        <select name="carrera" id="carrera" class="form-control form-control-sm">
                                            <option value="">Seleccione una carrera por favor</option>
                                            <option value="todas">Todas</option>
                                            <?php if (!empty($carreras)) : ?>
                                                <?php foreach ($carreras as $carrera) : ?>
                                                    <option value="<?php echo $carrera->nombre_carrera ?>">
                                                        <?php echo $carrera->nombre_carrera ?>

                                                    </option>
                                                <?php endforeach; ?>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="listado_inscripto" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Cédula</th>
                                        <th>Primer nombre</th>
                                        <th>Segundo nombre</th>
                                        <th>Primer apellido</th>
                                        <th>Segundo apellido</th>
                                        <th>Carrera</th>
                                        <th>Semestre</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<!-- /.box-body -->
</section>
</div>
<!-- /.content-wrapper -->