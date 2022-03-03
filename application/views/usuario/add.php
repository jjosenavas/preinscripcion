<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-solid">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <?php if ($this->session->flashdata("error")) : ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>

              </div>
            <?php endif; ?>
            <hr>

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Nuevo usuario</h3>
              </div>
              <div class="card-body">
                <form id="new_user" role="form" action="<?php echo base_url(); ?>usuarios/usuarios/store" method="POST" action="<?php echo base_url(); ?>mantenimiento/categorias/store" method="POST">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input maxlength="30" type="text" class="form-control form-control-sm" name="nombres" id="nombres" onkeypress="return soloLetras(event)">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="Apellidos">Apellidos</label>
                        <input maxlength="30" type="text" class="form-control form-control-sm" name="apellidos" id="apellidos" onkeypress="return soloLetras(event)">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="Email">Correo Electronico</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Ingrese email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="Username">Nombre de Usuario</label>
                        <input maxlength="20" type="text" class="form-control form-control-sm" name="username" id="username" placeholder="Nombre de usuario">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="Password">Contraseña</label>
                        <input maxlength="8" minlength="" type="text" class="form-control form-control-sm" name="password" id="password" placeholder="Contraseña">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="Password">Repetir contraseña</label>
                        <input maxlength="8" minlength="" type="text" class="form-control form-control-sm" name="password_val" id="password_val" placeholder="repita contraseña">
                      </div>
                    </div>
                  </div>

                  <!-- /.card-body -->
                  <hr class="info">
                  <div class="">                   
                    <a href="<?php echo base_url(); ?>usuarios/usuarios" class="btn btn-app">
                      <i class="fas fa-reply-all color_rojo"></i> Cancelar
                    </a>
                    <button type="submit" id="btn_save" class="btn btn-app"><i class="fas fa-save color_info"></i> Guardar</button>
                  </div>
                  <hr>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->