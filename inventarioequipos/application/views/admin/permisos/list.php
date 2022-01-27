<section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de  Permisos</h3>

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
                    
                    <a href="<?php echo base_url(); ?>backend/permisos/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo Permiso</a>
                    
                </div>
            </div>
            <!-- /.row -->
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-dataTables">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu</th>
                                    <th>Rol</th>
                                    <th>Leer</th>
                                    <th>Insertar</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($permisos)):?>
                                    <?php foreach($permisos as $permiso):?>
                                        <tr>
                                            <td><?php echo $permiso->id;?></td>
                                            <td><?php echo $permiso->menu;?></td>
                                            <td><?php echo $permiso->rol;?></td>
                                            <td>
                                                <?php if($permiso->read == 0 ):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif;?>
                                            </td>
                                             <td>
                                                <?php if($permiso->insert == 0 ):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif;?>
                                            </td>
                                             <td>
                                                <?php if($permiso->update == 0 ):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif;?>
                                            </td>
                                             <td>
                                                <?php if($permiso->delete == 0 ):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif;?>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                     
                                                    <a href="<?php echo base_url()?>backend/permisos/edit/<?php echo $permiso->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    
                                                  
                                                    <a href="<?php echo base_url();?>backend/permisos/delete/<?php echo $permiso->id;?>" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                                 
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Categoria</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
