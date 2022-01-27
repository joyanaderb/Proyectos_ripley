<section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Registrar Asignación</h3>

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
                    <table id="example1" class="table table-bordered table-dataTables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Numación de Equipo</th>
                                <th>Nº Serie Equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Disco duro</th>
                                <th>Estado</th>
                                <th>editorial_libro</th>
                                <th>Descripción Estado</th>
                                <?php if($permisos->insert == 1):?>
                                <th>Acciones</th>
                                <?php endif;?>

                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($libros): ?>
                                <?php $i = 1;?>
                            <?php foreach ($libros as $libro): ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $libro->codigo_libro; ?></td>
                                    <td><?php echo $libro->isbn_libro; ?></td>
                                    <td><?php echo $libro->titulo_libro; ?></td>
                                    <td><?php echo $libro->autor_libro; ?></td>
                                    <td><?php echo $libro->subtitulo_libro; ?></td>
                                    <td><?php echo $libro->editorial_libro; ?></td>
                                    <?php $disponibles = $libro->ejemplares_libro - $libro->prestados_libro;?>
                                    <?php if ($disponibles == 0): ?>
                                        <td><span class="label label-danger">No Disponible</span></td>

                                    <?php else: ?>
                                        <td><span class="label label-success">Disponible</span></td>
                                    <?php endif;?>
                                    <td><?php echo $libro->facultad; ?></td>

                                    <?php if ($disponibles == 0): ?>
                                        <td><button type="button" class="btn btn-warning btn-sm" disabled="disabled"><i class="fa fa-check" aria-hidden="true"></i> Seleccionar</button></td>

                                    <?php else: ?>
                                    
                                    <?php if($permisos->insert == 1):?>
                                        
                                        <td><button type="button" class="btn btn-warning btn-sm btn-select" value="<?php echo $libro->id_libro ?>" data-toggle="modal" data-target="#myModal" ><i class="fa fa-check" aria-hidden="true"></i> Seleccionar</button></td>
                                    <?php endif;?>
                                    <?php endif;?>
                                </tr>
                                <?php $i++;?>
                            <?php endforeach;?>
                        <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      <!-- /.box -->
    </div>
</section>

    <div class="modal modal-primary fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
                <strong>FORMULARIO DE ASIGNACIÓN</strong>
          </div>
          <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>backend/prestamos/store" method="POST">
          <div class="modal-body">

                <div class="form-group">
                    <label  class="col-sm-3 control-label" for="codigo">Numeración del Equipo:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="idLibro">
                        <input type="text" class="form-control" id="codigo" disabled="disabled" />
                    </div>
                </div>
              
             <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">marca:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="titulo_libro" value="titulo_libro">
                        <input type="text" class="form-control" id="titulo_libro" name="titulo_libro" />
                    </div>
                </div>
              
               <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">modelo:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="autor_libro" value="autor_libro">
                        <input type="text" class="form-control" id="autor_libro" name="autor_libro" />
                    </div>
                </div>
              
               <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">Serie:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="isbn_libro" value="isbn_libro">
                        <input type="text" class="form-control" id="isbn_libro" name="isbn_libro" />
                    </div>
                </div>
              
                <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">Disco duro:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="subtitulo_libro" value="subtitulo_libro">
                        <input type="text" class="form-control" id="subtitulo_libro" name="subtitulo_libro" />
                    </div>
                </div>
              
              <div class="form-group">
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
                    <label  class="col-sm-3 control-label" for="nombre">Numeración del Equipo:</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="nombres" value="nombres">
                        <input type="text" class="form-control" id="nombres" name="nombres" />
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
              
              
               <div class="form-group">
                    <label  class="col-sm-3 control-label" for="nombre">Region</label>
                    <div class="col-sm-4">
                        <input type="hidden" name="region" value="region">
                        <input type="text" class="form-control" id="region" name="region" />
                    </div>
                </div>
           
                <div class="form-group">
                    <label for="fecha" class="col-md-3 control-label">Fecha Prestamo:</label>
                    <div class="col-md-4">
                        <input type="text" name="fecprestamo" class="form-control" id="fecha" placeholder="Ingrese fecha de Asignación" required>
                    </div>
                </div>
              <div class="form-group">
                  <div class="form-check">
                      <label for="fecha" class="col-md-3 control-label">¿Se presta audifonos?:</label>
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="prestamoAudifono" id="optionsRadios1" value="si" checked>
                              SI
                            </label>
                          </div>
                 <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="prestamoAudifono" id="optionsRadios1" value="no">
                              NO
                            </label>
                          </div>
              </div>
          </div>
          <div class="modal-footer">
               
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-outline">Guardar</button>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


<form action="cargar_archivo" method="post" enctype="multipart/form-data">
<input type="file" name="mi_archivo">
</form>
<input type="submit" value="Submit">