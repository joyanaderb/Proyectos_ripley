

       <!-- End Navbar -->
  <title>
DASHBOARD - AYUDARIPLEY</title>    
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favico.ico">


<link rel="stylesheet" type="text/css" href="extensions/filter-control/bootstrap-table-filter-control.css">
<script src="extensions/filter-control/bootstrap-table-filter-control.js"></script>

 <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('001d18aea19040366be9', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" align="center">
                <h5 class="title">Mis Datos</h5>
              </div>
                                        <p class="category text-center">IMPORTANTE: SI LOS DATOS MOSTRADOS SON ERRÓNEOS, FAVOR COMUNICASELO AL ÁREA ENCARGADA</p>
                
                 <div class="btn-group">
  <button type="button" class="btn btn-primary btn-simple dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    MIS ARCHIVOS DESCARGABLES
  </button>
  <div class="dropdown-menu">
      <a  href="<?php echo base_url(); ?>assets/img/download/turnosejecutivos/<?php echo $this->session->userdata("rut_completo"); ?>.pdf" download="TURNOS MAYO <?php echo $this->session->userdata("nombre"); ?>">  <button   class="dropdown-item" data-toggle="modal" data-target="#exampleModal3" onclick="notify('other',   'DESCARGANDO MIS TURNOS',   'Formato de archivo: PDF');">
 DESCARGAR MIS TURNOS DEL MES
</button></a> 
      
        <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">ANEXO HORAS EXTRAS</a>

  </div>
</div>    

              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("nombre"); ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Rut</label>
                        <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("rut_completo"); ?>">
                      </div>
                    </div>
                         <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Correo</label>
                        <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("correo"); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Sexo</label>
 <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("sexo"); ?>">                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Fecha nacimiento</label>
<input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("fecha_nacimiento"); ?>">                        </div>
                    </div>
                       <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Colaborador de ripley desde</label>
                      <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("fecha_ingreso"); ?>">
                      </div>
                    </div>
                  </div>
                      <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Estado laboral</label>
 <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("estado"); ?>">                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Usuario Auris</label>
<input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("user_auris"); ?>">                        </div>
                    </div>
                       <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Anexo Avaya</label>
                      <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("anexo"); ?>">
                      </div>
                    </div>
                            <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Àrea laboral</label>
                      <input type="text" class="form-control" disabled="" placeholder="Dato no encontrado :(" value="<?php echo $this->session->userdata("nombre_servicio"); ?>">
                      </div>
                    </div>
                  </div>
                    <div class="alert alert-dangerTextoPrograma text-center"  > 
                 
                  <span><b>Historial de asignación de equipos</b></span>
                </div> 
                    
                      <div class="box-body">
           <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter" id="example">
                      <thead class=" text-primary"> </thead>
                        <thead>
                            
                            <tr> 
                           
                                <th>Nº de equipo</th>
                                <th>NºSerie equipo</th>
                                <th>Marca equipo</th>
                                <th>Modelo equipo</th>
                                <th>Fec. de Asignación</th>
                                <th>Fec. de Devolucion</th>
                                <th>Estado Asignación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($prestamos): ?>
                            
                                <?php $i = 1;?>
                                <?php foreach ($prestamos as $prestamo): ?>

                                        <tr>
                                            <td><?php echo $prestamo->id_libro; ?></td>
                                            <td><?php echo $prestamo->isbn_libro; ?></td>
                                             <td><?php echo $prestamo->titulo_libro; ?></td>
                                             <td><?php echo $prestamo->autor_libro; ?></td>
                                            <td><?php echo $prestamo->fechaprestamo; ?></td>
                                            <td><?php echo $prestamo->fechadevolucion; ?></td>
                                            <td>
                                                <?php if ($prestamo->estado_prestamo == 0): ?>
                                                    <span class="label label-danger">En uso</span>
                                                <?php else: ?>
                                                    <span class="label label-success">Finalizado</span>
                                                <?php endif;?>

                                                
                                           <script>
                          
                          $(document).ready(function() {
  $('#example').dataTable( {
    "oSearch": {"sSearch": $('#mytext').val() }
  } );
});
                          </script>           
                                                
                                            </td>
                                        </tr>
                                    <?php $i++;?>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
            
            <!-- /.row -->
         </div>
                </div>
              </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
</div>

            
       
    
               
          
              
       
    