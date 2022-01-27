

<section class="content">
        <link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/gif">

    


    
    <script>
       $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
        
    </script>
      <!-- Default box -->
    <div class="box">
        
        <div class="box-header with-border">
            <h3 class="box-title">Tablero Principal</h3>
 <script>
       $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
        
    </script>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
             </div>
              
            <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $irreparable;?></h3>  

                <p>IRREPARABLES</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <h3><?php echo $enserviciotecnico;?></h3>  

                <p>EN SERVICIO TECNICO</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
               <h3><?php echo $enprocesodeformateo;?></h3>  

                <p>EN PROCESO DE FORMATEO</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <h3><?php echo $alaesperadeserviciotecnico;?></h3>  

                <p>ESPERA DE SERVICIO TECNICO</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
            </div>
          </div>
            
             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-danger">
              <div class="inner">
               <h3><?php echo $robado;?></h3>  

                <p>ROBADOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
            </div>
          </div>
            
            
             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <h3><?php echo $prestados;?></h3>  

                <p>PRESTADOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
            </div>
          </div>
            
             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <h3>
                         <?php if ($disponiblesparaprestamo): ?>
                            <?php $i = 1;?>
                            <?php foreach ($disponiblesparaprestamo as $dispo): ?>
                                
                      <tr>
                        <td>
                                                 <?php echo $dispo->total; ?>

                        </td>
                       
                     
                          
          
                      </tr>
                                
                        <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?></h3>  

                <p>DISPONIBLES PARA PRESTAMO</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
                            
        </div>
        <div class="box-body">
            <div class="row">
            
            
              
            
          </div>
        </div>
        <!-- /.box-body -->
    </div>
      <!-- /.box -->
</section>
 