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
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <hr>
                  <form action="<?php echo base_url();?>mantenimiento/usuarios/update" method="POST">
                  <input type="hidden" value="<?php echo $usuarios->id;?>" name="idusuarios">
                      <div class="form-grou">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $usuarios->nombres;?>">
                      </div>
                      <div class="form-grou">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $usuarios->apellidos;?>">
                      </div>
                      <div class="form-grou">
                        <label for="Email">Correo Electronico</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $usuarios->email;?>">
                      </div>
                                     <div class="form-grou">
                        <label for="Username">Nombre de Usuario</label>
                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $usuarios->username;?>">
                      </div>
                      <div class="form-grou">
                        <label for="Password">Contraseña</label>
                        <input type="password" class="form-control" name="" id="password" value="<?php echo $usuarios->password;?>">
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                      </div>
                  </form>
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
