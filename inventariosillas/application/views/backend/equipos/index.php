<section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de  Equipos</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
             </div>
        </div>
		
		
        <div class="box-body">
            <div class="row">
                <div class="col-md-12 text-right">
                    <?php if($permisos->insert == 1):?>
                    <a href="<?php echo base_url(); ?>backend/equipos/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo Equipo</a>
                    <?php endif;?>
					
					
					
                </div>
            </div>
			
			
                
            <!-- /.row -->
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-dataTables">
                           




                        <thead>
                            <tr>
                                
                                <th>Numeración Equipo</th>
                                <th>N°Serie</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Disponible</th>
                                <th>Estado disponibilidad</th>
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
                                    
                                    <td><?php echo $libro->codigo_libro; ?></td>
                                    <td><?php echo $libro->isbn_libro; ?></td>
                                    <td><?php echo $libro->titulo_libro; ?></td>
                                    <td><?php echo $libro->autor_libro; ?></td>
                                    
                                    <?php $disponibles = $libro->ejemplares_libro - $libro->prestados_libro;?>
                                    <?php if ($disponibles == 0): ?>
                                        <td><span class="label label-danger">No Disponible</span></td>

                                    <?php else: ?>
                                        <td><span class="label label-success">Disponible</span></td>
                                    <?php endif;?>
                                    <td><?php echo $libro->facultad; ?></td>
                                    <td>
                                         <?php if($permisos->update == 1):?>
                                        <a href="<?php echo base_url(); ?>backend/equipos/edit/<?php echo $libro->id_libro; ?>" class="btn btn-info btn-xs btn-flat" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
                                         <?php endif;?>
                                        <button type="button" class="btn btn-warning btn-image btn-xs btn-flat" value="<?php echo $libro->id_libro; ?>" data-toggle="modal" data-target="#myModal" ><i class="fa fa-file-image-o" aria-hidden="true"></i></button>


                                    
                                    </td>
                                   
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
</section>


<div class="modal modal-info fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            
          
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>

          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
