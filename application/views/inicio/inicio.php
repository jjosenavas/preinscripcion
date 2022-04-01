 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <!--<div class="col-sm-12">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="/seminario/welcome">inicio</li>
                     </ol>
                 </div>-->
                 <!-- /.col -->

             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-12">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3><?php echo $total_total->total; ?></h3>

                             <p>Total preinscriptos</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-person-add"></i>
                         </div>
                         <a href="<?php echo base_url(); ?>seguimiento/seguimiento/aspirantesTotal" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="content">
         <div class="container-fluid">
             <div class="card card-default">
                 <div class="">
                     <div class="card-header">
                         <label>Resumen de Educación</label>

                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-md-3">
                             <div class="small-box bg-info">
                                 <div class="inner">
                                     <h3><?php echo $total->total; ?></h3>

                                     <p>Total Educación</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="small-box bg-success">
                                 <div class="inner">
                                     <h3><?php echo $integral->integral; ?><sup style="font-size: 20px"></sup></h3>

                                     <p>Educación Integral</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="small-box bg-danger">
                                 <div class="inner">
                                     <h3><?php echo $preescolar->preescolar; ?></h3>

                                     <p>Educación preescolar</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <!-- small box -->
                             <div class="small-box bg-warning">
                                 <div class="inner">
                                     <h3><?php echo $especial->especial; ?></h3>

                                     <p>Educación especial</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="content">
         <div class="container-fluid">
             <div class="card card-default">
                 <div class="">
                     <div class="card-header">
                         <label>Resumen de Electrónica y Electrotecnia</label>

                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-md-3">
                             <div class="small-box bg-info">
                                 <div class="inner">
                                     <h3><?php echo $electronica->electronica; ?></h3>

                                     <p>Total Electrónica</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="small-box bg-success">
                                 <div class="inner">
                                     <h3><?php echo $electrotecnia->electrotecnia; ?><sup style="font-size: 20px"></sup></h3>

                                     <p>Total Electrotecnia</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

      <section class="content">
         <div class="container-fluid">
             <div class="card card-default">
                 <div class="">
                     <div class="card-header">
                         <label>Resumen de Mecánica</label>

                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-md-3">
                             <div class="small-box bg-info">
                                 <div class="inner">
                                     <h3><?php echo $mecanica->mecanica; ?></h3>

                                     <p>Total Mecánica</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>                         
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="content">
         <div class="container-fluid">
             <div class="card card-default">
                 <div class="">
                     <div class="card-header">
                         <label>Resumen de Informática</label>

                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-md-3">
                             <div class="small-box bg-info">
                                 <div class="inner">
                                     <h3><?php echo $informatica->informatica; ?></h3>

                                     <p>Total Informática</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-person-add"></i>
                                 </div>
                                 <a href="<?php echo base_url(); ?>seguimiento/seguimiento" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                         </div>                         
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </div>