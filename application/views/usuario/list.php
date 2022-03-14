<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
  <?php if($this->session->flashdata("procede")):?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p><i class="icon fa fa-check"></i><?php echo $this->session->flashdata("procede"); ?></p>
          </div>
      <?php endif;?>
      <?php if($this->session->flashdata("error")):?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><i class="icon fa  fa-check"></i><?php echo $this->session->flashdata("error"); ?></p>

        </div>
    <?php endif;?>
    <!-- Default box -->
    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo base_url(); ?>usuarios/usuarios/add" class="btn btn-app"><span class="color_info fa fa-users"></span> Agregar Usuarios</a>
      </div>
    </div>
    <hr>
    <div class="col-md-12">    
      <div class="card card-info">
            <div class="card-header">
               <h3 class="card-title">Listado de usuarios</h3>
            </div>
       <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Email</th>
              <th>Usuario</th>
              <th>opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $num=0; if (!empty($usuarios)) : ?>
              <?php foreach ($usuarios as $usuarios) : ?>
                <tr>
                  <td><?php echo ++$num ?></td>
                  <td><?php echo $usuarios->nombres; ?></td>
                  <td><?php echo $usuarios->apellidos; ?></td>
                  <td><?php echo $usuarios->email; ?></td>
                  <td><?php echo $usuarios->username; ?></td>
                  <td>
                    <div class="btn-group">                      
                      <a href="<?php echo base_url() ?>usuarios/usuarios/edit/<?php echo $usuarios->id; ?>" class="btn btn-warning"><span class="fa fa-pen"></span></a>
                      <!-- <a href="< ?php echo base_url(); ?>usuarios/usuarios/delete/< ?php echo $usuarios->id; ?>" class="btn btn-danger btn_remover"><span class="fa fa-trash"></span></a> -->
                      <button id="eliminar" value="<?php echo $usuarios->id; ?>" type="button" class="btn btn-danger btn_remover"><span class="fa fa-trash"></button>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
   </div>
</div>
</div>
<!-- /.box-body -->
</section>
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Información del Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->