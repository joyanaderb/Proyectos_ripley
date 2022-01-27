
  <!-- End custom js for this page-->
<!DOCTYPE html>
<html lang="en">
 

                

 
             
    


    
   
<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Acta gestión retiro y/o cambio</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/vendor.bundle.addons.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
 
    
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
    
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
    
    
    
    <html>
  <head>
    <title>Title of the Document</title>
  </head>
  <body>
    <script>
        
            function myFunction() {

        
        const queryString = window.location.search;

console.log(queryString);
      const urlParams = new URLSearchParams(queryString);
      const nrocontacto = urlParams.get('NroContacto');
      document.getElementById("nrocontacto").innerHTML = nrocontacto;
      // 
   
                
            }
      // empty string
    </script>
  </body>
</html>
    
    
    <script>
    
    </script>

      <!-- partial -->
          
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/horizontal-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->

<body class="horizontal-menu" onload="myFunction()">

    
    <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
  
    <!-- partial -->
    <div class="container-fluid">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"  onclick="window.print();" 
><i class="fas fa-print" style="font-size: 24px;" ></i> </div>
    
      </div>
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      

                      
      <!-- partial -->
      <div class="main-panel">

        <div class="content-wrapper">
          <div class="page-header">
              
            <h2 class="page-title" style=color:#6A148E;>
                                      &nbsp;<img src="<?php echo base_url(); ?>assets/images/logoripleyacta.png" alt="logo"/>	

             &nbsp; ACTA PARA GESTIÓN DE RETIRO O CAMBIO - EDITAR TICKET NRO: <?php echo $this->input->get('NroContacto'); ?>
            </h2>

            <nav aria-label="breadcrumb" style=padding-right:150px>
           <h5 class="text" >

                                    
                                

               
               
            
                    
            </h5>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
        
                  
                            <form id="save" method="post" action="<?= base_url() ?>index.php/administradoractas/update" >     
               <div class="card">
            <div class="card-body">
              <h4 class="card-title">EDICIÓN TICKET</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead style=background-color:#663399;>
                        <tr>
                          <th style=color:white;>Número Ticket</th>
                            <th style=color:white;>Fecha Creación Acta</th>
                            <th style=color:white;>Motivo</th>
                            <th style=color:white;>Comuna</th>
                            <th style=color:white;>Region</th>
                            <th style=color:white;>F.Retiro/Cambio AURIS</th>
                            <th style=color:white;>Estado Ticket</th>
                            <th style=color:white;>Fecha Real Cumplimiento</th>
                            <th style=color:white;>Historial</th>
                            <th style=color:white;>Acciones</th>
                           


                        </tr>
                      </thead>
                   <tbody id="myTable">
                       <?php foreach ($resultado as $act): ?>  
                                                 <form method="post" action="<?= base_url() ?>index.php/administradoractas/update" > 

                        <tr>  
                            <td> <a href="<?php echo base_url(); ?>index.php/creacionacta/edit/<?php echo $act->NroContacto; ?>" target="_blank"><?php echo $act->NroContacto; ?></a> <input type=hidden name="NroContacto" value="<?php echo $act->NroContacto; ?>" /> </td>
                            <td><?php echo $act->fechaGeneracion; ?> <input type=hidden name="fechaGeneracion" value="<?php echo $act->fechaGeneracion; ?>" /></td>
                            <td><?php echo $act->tipoGestion; ?> <input type=hidden name="tipoGestion" value="<?php echo $act->tipoGestion; ?>" /> </td>
                            <td><?php echo $act->Comuna1; ?> <input type=hidden name="Comuna1" value="<?php echo $act->Comuna1; ?>" /></td>
                             <td><?php echo $act->Comuna1; ?> <input type=hidden name="comuna2" value="<?php echo $act->Comuna1; ?>" /></td>
   <td><input id="date" name="fechaRetiroCambioAuris" type="date" value="<?php echo $act->fechaRetiroCambioAuris; ?>"></td>
                       <td >   
                                <select  id="slct" style=width:100px;align:left;border-color:#6A148E; name="estadoActa" placeholer="Seleciona una opcion">
                                    <optgroup label="Ingresado"> 
<option <?php if($act->estadoActa == "No Tomado"){ echo 'selected="selected"'; } ?> value="No Tomado">No Tomado</option>                                        
<option <?php if($act->estadoActa == "Ingresado - Ingresado"){ echo 'selected="selected"'; } ?> value="Ingresado - Ingresado">Ingresado - Ingresado</option>
                                     <optgroup label="Realizado"> 
<option <?php if($act->estadoActa == "Realizado - Retiro Realizado"){ echo 'selected="selected"'; } ?> value="Realizado - Retiro Realizado">Realizado - Retiro Realizado</option>
                                         
<option <?php if($act->estadoActa == "Realizado - Cambio Realizado"){ echo 'selected="selected"'; } ?> value="Realizado - Cambio Realizado">Realizado - Cambio Realizado</option>
                                         <optgroup label="Incompleto">
  <option <?php if($act->estadoActa == "Incompleto - Capacidad del Camion"){ echo 'selected="selected"'; } ?> value="Incompleto - Capacidad del Camion">Incompleto - Capacidad del Camion</option>     

 <option <?php if($act->estadoActa == "Incompleto - Retiro Incompleto"){ echo 'selected="selected"'; } ?> value="Incompleto - Retiro Incompleto">Incompleto - Retiro Incompleto</option>  
                                    <optgroup label="Incumplimiento">
 <option <?php if($act->estadoActa == "Incumplimiento - Sin Moradores"){ echo 'selected="selected"'; } ?> value="Incumplimiento - Sin Moradores">Incumplimiento - Sin Moradores</option>
                                        
<option <?php if($act->estadoActa == "Incumplimiento - Cliente Desiste"){ echo 'selected="selected"'; } ?> value="Incumplimiento - Cliente Desiste">Incumplimiento - Cliente Desiste</option> 
                                        
<option <?php if($act->estadoActa == "Incumplimiento - Capacidad del Camion"){ echo 'selected="selected"'; } ?> value="Incumplimiento - Capacidad del Camion">Incumplimiento - Capacidad del Camion</option> 
                                        
                    </select>
                                
                            </td><td><input id="date" name="fechaRealCumplimiento" type="date" value="<?php echo $act->fechaRealCumplimiento; ?>"></td>

                          
                              <td>

<a href="<?php echo base_url(); ?>index.php/administradoractas/historialdeticketpornumeroticket/?NroContacto=<?php echo $act->NroContacto; ?>" target="_blank"><?php echo $act->NroContacto; ?></a>
                            </td>
                           
                            
                              <td>
<input type=hidden name="FechaUltimaModificacion" value="<?php echo date('d-m-Y G:i:s');?>" />
                                  <input type=hidden name="nombreModificador" readonly="readonly" value="<?php echo $this->session->userdata("nombre"); ?>" />

        <input type="submit" name="actualizar"  class="btn btn-primary float-center" value="Guardar">

                            </td>
                        
                        </tr>
                         
                                   
         
                   </form>
                         <?php endforeach;?>
                      </tbody>
                    </table>

                  </div>
                 

              </div>
            </div>
          </div>      
                 
       
         
                    </div>
                        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            
            


     

            
            

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
    
        </footer>
        <!-- partial -->

      </div>
      <!-- main-panel ends -->

    </div>
          
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- container-scroller -->
    </div>
  <!-- plugins:js -->

  <script src="<?php echo base_url(); ?>assets/vendor/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/tree.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>

              
       

    
<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
</html>
