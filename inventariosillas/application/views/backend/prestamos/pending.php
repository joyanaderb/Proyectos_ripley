
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


<script>$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );</script>


<section class="content">
    
    
     
      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Devoluciones Pendientes</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
             </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="table table-bordered table-dataTables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Numeración de Equipo</th>
                                <th>Nº Serie Equipo</th>
                                 <th>Marca Equipo</th>
                                <th>Modelo Equipo</th>
                                 <th>Disco duro</th>
                                <th>Ram</th>
                                <th>RUT Ejecutivo</th>
                                <th>Nombre Ejecutivo</th>
                                <th>Estado</th>
                                 <th>Región</th>
                                <th>Fec. de Asignación</th>
                                <th>Documento</th>
                                <th>Imprimir Doc</th>
                              <?php if($permisos->update == 1):?>
                                <th>Acción</th>
                                 <?php endif;?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($prestamos): ?>
                                <?php $i = 1;?>
                                <?php foreach ($prestamos as $prestamo): ?>
                                    <?php if ($prestamo->estado_prestamo == 0): ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $prestamo->codigo_libro; ?></td>
                                            <td><?php echo $prestamo->isbn_libro; ?></td>
                                            <td><?php echo $prestamo->titulo_libro; ?></td>
                                             <td><?php echo $prestamo->autor_libro; ?></td>
                                            <td><?php echo $prestamo->subtitulo_libro; ?></td>
                                    <td><?php echo $prestamo->editorial_libro; ?></td>
                                            <td><?php echo $prestamo->rut_completo; ?></td>
                                            <td><?php echo $prestamo->nombre;?></td>
                                            <td><?php echo $prestamo->estado;?></td>
                                            <td><?php echo $prestamo->region; ?></td>
                                            <td><?php echo $prestamo->fechaprestamo; ?></td>
                                               <td><a href="<?php echo base_url(); ?>uploads/<?php echo $prestamo->rut_completo; ?>.pdf" class="btn btn-success" download="Documento <?php echo $prestamo->rut_completo; ?>" >Descargar</a></td>
                                             <td><button type="button" class="btn btn-warning btn-sm btn-select" value="<?php echo $prestamo->id_libro ?>" data-toggle="modal" data-target="#myModal" ><i class="fa fa-check" aria-hidden="true"></i> Ver datos</button></td>
                                              

                                            <td>
                                               <?php if($permisos->update == 1):?>
                                                <a href="<?php echo base_url(); ?>backend/prestamos/update/<?php echo $prestamo->id; ?>" class="btn btn-danger btn-xs btn-flat" title="Finalizar Prestamo"><i class="fa fa-hourglass-end" aria-hidden="true"></i> Finalizar</a>
                                                
                                   <?php endif;?>
                                        </td>
                                            
                                        </tr>
                                        <?php $i++;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
      <!-- /.box -->
    
    
</section>


 <div class="modal modal-primary fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
                <strong>FORMULARIO DE ASIGNACIÓN</strong>
          </div>
          <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>backend/prestamos/store2" method="POST">
          <div class="modal-body">

                <div class="form-group">
                    <label  class="col-sm-3 control-label" for="codigo">Numeración del Equipo:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="idLibro">
                        <input type="text" class="form-control" id="codigo" disabled="disabled" />
                    </div>
                </div>
              
             <div class="form-group" hidden>
                    <label  class="col-sm-3 control-label" for="nombre">marca:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="titulo_libro" value="titulo_libro">
                        <input type="text" class="form-control" id="titulo_libro" name="titulo_libro" />
                    </div>
                </div>
              
               <div class="form-group" hidden>
                    <label  class="col-sm-3 control-label" for="nombre">modelo:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="autor_libro" value="autor_libro">
                        <input type="text" class="form-control" id="autor_libro" name="autor_libro" />
                    </div>
                </div>
              
               <div class="form-group" hidden>
                    <label  class="col-sm-3 control-label" for="nombre">Serie:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="isbn_libro" value="isbn_libro">
                        <input type="text" class="form-control" id="isbn_libro" name="isbn_libro" />
                    </div>
                </div>
              
                <div class="form-group" hidden>
                    <label  class="col-sm-3 control-label" for="nombre">Disco duro:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="subtitulo_libro" value="subtitulo_libro">
                        <input type="text" class="form-control" id="subtitulo_libro" name="subtitulo_libro" />
                    </div>
                </div>
              
              <div class="form-group" hidden>
                    <label  class="col-sm-3 control-label" for="nombre">Ram</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="editorial_libro" value="editorial_libro">
                        <input type="text" class="form-control" id="editorial_libro" name="editorial_libro" />
                    </div>
                </div>
              
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="dni" >RUT Ejecutivo:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="idLector">
                        <input type="text" class="form-control" id="dni" placeholder="RUT" required/>
                    </div>
                    <button type="button" id="btn-comprobardni" class="btn btn-warning btn-flat"> <i class="fa fa-search" aria-hidden="true"></i> Comprobar</button>
                   

                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">Nombre:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="nombres" value="nombres">
                        <input type="text" class="form-control" id="nombres" name="nombres" />
                    </div>
                </div>
              
            
                <div class="form-group" hidden>
                    <label  class="col-sm-3 control-label" for="nombre">Supervisor:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="rut_completo" value="rut_completo">
                        <input type="text" class="form-control" id="rut_completo" name="rut_completo" />
                    </div>
                </div>
              
              
               <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">nombre_cargo:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="nombre_cargo" value="nombre_cargo">
                        <input type="text" class="form-control" id="nombre_cargo" name="nombre_cargo" />
                    </div>
                </div>
              
                <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">Supervisor:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="nombreSuper" value="nombreSuper">
                        <input type="text" class="form-control" id="nombreSuper" name="nombreSuper" />
                    </div>
                </div>
              
              
               <div class="form-group" hidden>
                    <label  class="col-sm-3 control-label" for="nombre">Region</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="region" value="region">
                        <input type="text" class="form-control" id="region" name="region" />
                    </div>
                </div>
              
               <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">Dirección</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="direccion">
                        <input type="text" class="form-control" id="direccion" name="direccion" />
                    </div>
                </div>
              
                 <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">CECO</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="ceco">
                        <input type="text" class="form-control" id="ceco" name="ceco" />
                    </div>
                </div>
           
                <div class="form-group">
                    <label for="fecha" class="col-md-3 control-label">Fecha Prestamo:</label>
                    <div class="col-md-4">
                        <input type="text" name="fecprestamo" class="form-control" id="fecha" placeholder="Ingrese fecha de Asignación" required>
                    </div>
                </div>
             
          </div>
          <div class="modal-footer">
               
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-outline">Imprimir PDF</button>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>