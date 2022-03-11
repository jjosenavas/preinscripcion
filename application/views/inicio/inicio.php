 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2"> 
                 <!--<div class="col-sm-12">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="/seminario/welcome">inicio</li>
                     </ol>
                 </div>--><!-- /.col -->
                
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner">
                             <h3><?php echo $total->total; ?></h3>
                            
                             <p>Total preinscriptos</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-person-add"></i>
                         </div>
                         <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3><?php echo $integral->integral; ?><sup style="font-size: 20px"></sup></h3>

                             <p>Educación Integral</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner">
                             <h3><?php echo $preescolar->preescolar; ?></h3>

                             <p>Educación preescolar</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner">
                             <h3><?php echo $especial->especial; ?></h3>

                             <p>Educación especial</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
             </div>
         </div>
     </section>
 </div>
