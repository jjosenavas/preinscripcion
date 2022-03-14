<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Editar <small>Usuarios</small></h1>
  </section>
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
                <h3 class="card-title">Editar usuario</h3>
              </div>
              <div class="card-body">
                <form id="edit_user" action="<?php echo base_url(); ?>usuarios/usuarios/update" method="POST">
                  <input type="hidden" value="<?php echo $usuarios->id; ?>" name="idusuarios">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $usuarios->nombres; ?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $usuarios->apellidos; ?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="Email">Correo Electronico</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $usuarios->email; ?>">
                      </div>
                      <z>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="Username">Nombre de Usuario</label>
                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $usuarios->username; ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-footer">
                  <a href="<?php echo base_url(); ?>usuarios/usuarios" class="btn btn-app">
                      <i class="fas fa-reply-all color_rojo"></i> Cancelar
                    </a>
                  <button type="submit" id="btn_edit_user" class="btn btn-app"><i class="fas fa-save color_info"></i> Guardar</button>
                  </div>
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