<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <?php if ($this->session->flashdata("trueee")) : ?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-check"></i><?php echo $this->session->flashdata("trueee"); ?></p>
      </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata("falseee")) : ?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa  fa-check"></i><?php echo $this->session->flashdata("falseee"); ?></p>

      </div>
    <?php endif; ?>
    <div class="row">

      <div class="col-md-12">

        <div class="card card-info">

          <div class="card-header">
            <h3 class="card-title">Listado de preinscriptos</h3>
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
              <table id="listado_preinscripto" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Cédula</th>
                    <th>Primer nombre</th>
                    <th>Segundo nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>fecha de nacimiento</th>
                    <th>Sexo</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Carrera</th>
                    <th>Opción</th>
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