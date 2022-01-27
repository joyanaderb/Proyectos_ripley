<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:40 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MONITOREO SERVICIOS CCR</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
</head>
  
    
    <style>
        
        .content-wrapper {
     background-image: url("<?php echo base_url(); ?>assets/fondoripleyfinal.png");
    padding: 1.5rem 1.7rem;
    width: 100%;
    -webkit-flex-grow: 1;
    flex-grow: 1;
}
        
   .table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td {
    padding: 0.2rem
;
    vertical-align: top;
    border-top: 1px
 solid #e0e0ef;
} 
        
        .tm-status-circle {
  display: inline-block;
  margin-right: 5px;
  vertical-align: middle;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  margin-top: -3px;
}
.moving {
  background-color: #9be64d;
  box-shadow: 0 0 8px #9be64d, inset 0 0 8px #9be64d;
}
.pending {
  background-color: #efc54b;
  box-shadow: 0 0 8px #efc54b, inset 0 0 8px #efc54b;
}
.cancelled {
  background-color: #da534f;
  box-shadow: 0 0 8px #da534f, inset 0 0 8px #da534f;
}
        
        button {
  background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  /*input has OS specific font-family*/
  color: black;
 
  cursor: pointer;
}
        
        </style>
    
    <head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
      setInterval("auto_refresh_function();", 30000);
        function auto_refresh_function() {
          $('#container').load("<?php echo base_url(); ?>index.php/monitor/recarga");
        }
</script>
  </head>
    
    
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5  id="exampleModalLabel" align="center">Documentación Carga Auris PROD</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        
                            <embed src="<?php echo base_url(); ?>assets/cargastock.pdf" width="1250" height="500" 
 type="application/pdf">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div>
    
     <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5  id="exampleModalLabel" align="center">DOCUMENTACION CARGA BASE STOCK</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        
                            <embed src="<?php echo base_url(); ?>assets/cargastock.pdf" width="1250" height="500" 
 type="application/pdf">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div>
    

    <div id="container">
    
<body class="horizontal-menu">
  <div class="container-scroller">
    
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
        
          
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
                  <h4 class="card-title" align="center"><b><u> Ejecutados / A la espera</u></b></h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                     <table class="table">
                            <thead>
                                <tr> 
                                    <th>Proceso</th>
                                    <th scope="col">Estado</th>
                                    
                                    
                                    <th scope="col">Hora última ejecucion: </th>
                                    
                                
                                  
                                </tr>
                            </thead>
                         
                            <tbody>
                                 <?php if ($datos): ?>
                            <?php $i = 1;?>
                            <?php foreach ($datos as $st): ?>
                                <tr>
                                    
                           
                                    <th scope="row">
                                    <?php if ($st->id == '1'): ?>
<button data-toggle="modal" data-target="#exampleModal">Informa Carga Masiva</button>
                                        
                                        
                                        
<?php elseif ($st->id == '2'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso Logistica por hora</button>                         

                                        

      
     <?php elseif ($st->id == '4'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso AurisProd</button>                  
   <?php elseif ($st->id == '5'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso casos abiertos portal</button>                
  <?php elseif ($st->id == '6'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso BT AURIS CCR</button>                                      
   <?php elseif ($st->id == '7'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso solicitudes día</button>                                     
                                   
 <?php elseif ($st->id == '9'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso Debito</button>  
                                        
 <?php elseif ($st->id == '10'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso reporte celulas hora</button>   

  <?php elseif ($st->id == '11'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Carga base stock</button>                                           
                                        
<?php elseif ($st->id == '12'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso cascada</button>         
                                        
 <?php elseif ($st->id == '13'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso cancelación compra</button>
     
 <?php elseif ($st->id == '14'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso SernacNaguilar</button>          
 <?php elseif ($st->id == '15'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso RepCepeda</button>                                         
<?php elseif ($st->id == '16'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso AurisProd_E3</button>  
                                        
<?php elseif ($st->id == '17'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso casos criticos día</button>
                                        

 
<?php elseif ($st->id == '19'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Carga masiva formulario</button>                                         
                                        
                                        
<?php endif ?>                                     
                                    
                                    </th>
                                    
                                    <td>
                                         <?php if ($st->Estado == 'Ejecutado'): ?>
  <div class="tm-status-circle moving"></div>
      EJECUTADO                                  
<?php elseif ($st->Estado == 'A la Espera'): ?>
 <div class="tm-status-circle pending"> </div>
            A LA ESPERA 
                                        <?php elseif ($st->Estado == 'Iniciado'): ?>
 <div class="tm-status-circle pending"> </div>
            INICIADO   
<?php endif ?>
                                        
                                    </td>
                                    
                                    <td align="center"><?php
$FechaRetiroCambio = $st->hora_ejecucion;
  echo date('H:i:s', strtotime($FechaRetiroCambio));
?></td>
                                    
                                    
                      
                                </tr>
                                
                                      <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?>
                            
                           
                           
                             
                              
                             
                        
                            </tbody>
                        </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                
                  <h4 class="card-title" align="center"><b><u> Próximas ejecuciones</u></b></h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                         
                            <thead>
                                
                                <tr>
                                    <th scope="col">Proceso</th>
                                    <th scope="col">Estado</th>
                                    
                                    
                                    <th scope="col">H.Próxima ejecución</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                  <?php if ($datos2): ?>
                            <?php $i = 1;?>
                            <?php foreach ($datos2 as $st): ?> 
                                <tr>
                                   
                           
                                   <th scope="row">
                                    <?php if ($st->id == '1'): ?>
<button data-toggle="modal" data-target="#exampleModal">Informa Carga Masiva</button>
                                        
                                        
                                        
<?php elseif ($st->id == '2'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso Logistica por hora</button>                         

                                        

      
     <?php elseif ($st->id == '4'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso AurisProd</button>                  
   <?php elseif ($st->id == '5'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso casos abiertos portal</button>                
  <?php elseif ($st->id == '6'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso BT AURIS CCR</button>                                      
   <?php elseif ($st->id == '7'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso solicitudes día</button>                                     
                                   
 <?php elseif ($st->id == '9'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso Debito</button>  
                                        
 <?php elseif ($st->id == '10'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso reporte celulas hora</button>   

  <?php elseif ($st->id == '11'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Carga base stock</button>                                           
                                        
<?php elseif ($st->id == '12'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso cascada</button>         
                                        
 <?php elseif ($st->id == '13'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso cancelación compra</button>
     
 <?php elseif ($st->id == '14'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso SernacNaguilar</button>          
 <?php elseif ($st->id == '15'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso RepCepeda</button>                                         
<?php elseif ($st->id == '16'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso AurisProd_E3</button>  
                                        
<?php elseif ($st->id == '17'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Proceso casos criticos día</button>
                                        

 
<?php elseif ($st->id == '19'): ?>
<button data-toggle="modal" data-target="#exampleModal2">Carga masiva formulario</button>                                         
                                        
                                        
<?php endif ?>                                     
                                    
                                    </th>
                                    <td>
                                        <?php if ($st->Estado == 'Siguiente Ejecucion'): ?>
  <div class="tm-status-circle moving"></div>
      S.EJECUCIÓN                                 
<?php elseif ($st->Estado == 'A la Espera'): ?>
 <div class="tm-status-circle pending"> </div>
            A LA ESPERA 
                                        <?php elseif ($st->Estado == 'Iniciado'): ?>
 <div class="tm-status-circle pending"> </div>
            INICIADO   
<?php endif ?>
                                    </td>
                                    
                                    <td align="center"><?php
$FechaRetiroCambio = $st->hora_ejecucion;
  echo date('H:i:s', strtotime($FechaRetiroCambio));
?></td>
                    
                                </tr>
                              <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?>     
                                     
                            
                           
                           
                             
                              
                             
                        
                            </tbody>
                        
                        </table>
                      
                  </div>
                  
                </div>
                  <div class="card-body">
                       <?php if ($datos3): ?>
                            <?php $i = 1;?>
                            <?php foreach ($datos3 as $st): ?>  
                  <h4 class="card-title" align="center"><u><b> Fallidos</b></u></h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                   <table class="table">
                       
                            <thead>
                                <tr>
                                     
                                    <th scope="col"><b></b>Proceso</th>
                                    <th scope="col">Estado</th>
                                    
                                    
                                    <th scope="col">Fecha</th>
                                    
                                     <th scope="col">Hora</th>
                                  
                                </tr>
                            </thead>
                    
                            <tbody>
                                 
                                <tr>
                                    
                           
                                    <th scope="row"><b><?php echo $st->nombre_proceso ?></b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled">
                                        </div><?php echo $st->estado_proceso ?>
                                    </td>
                                    
                                    <td align="center"><?php
$FechaRetiroCambio = $st->fecha_hora_inicio;
  echo date('d-m-Y', strtotime($FechaRetiroCambio));
?></td>
                                    
                                    <td align="center"><?php
$FechaRetiroCambio = $st->fecha_hora_inicio;
  echo date('h:i', strtotime($FechaRetiroCambio));
?></td>
                      
                                </tr>
                                
                                    
                           
                           
                             
                              
                             
                        
                            </tbody>
                       
                       
                            
                        </table>
                      
                  </div>
                        <?php $i++;?>
                                
                            <?php endforeach;?>
                                    <?php endif;?>
                </div>
                  
              </div>
            </div>
          </div>
        
         
          
         
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">RIPLEY CCR 2021<a href="https://www.urbanui.com/" target="_blank"></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">MONITOREO DE SERVICIOS CRITICOS</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>js/misc.js"></script>
  <script src="<?php echo base_url(); ?>js/settings.js"></script>
  <script src="<?php echo base_url(); ?>js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

    </div>
<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:40 GMT -->
</html>
