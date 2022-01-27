<section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de Ejecutivos</h3>
            

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
                        <script>
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: "Listado de Ventas",
                exportOptions: {
                    columns: [ 0, 1,2, 3, 4, 5 ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: "Listado de Ventas",
                exportOptions: {
                    columns: [ 0, 1,2, 3, 4, 5 ]
                }
                
            }
        ],

        language: {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
        
    </script>
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
                                <th>id en bd</th>
                                <th>Nombres</th>
                                <th>RUT</th>
                                <th>Servicio</th>
                                <th>Rut Supervisor</th>
								  <th>Estado</th>
                                <th>Region</th>
                                <th>correo</th>
                                <th>Acciones</th
                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($lectores): ?>
                            <?php $i = 1;?>
                            <?php foreach ($lectores as $lector): ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                                                        <td><?php echo $lector->id; ?></td>

                                    <td><?php echo $lector->nombre; ?></td>
                                    <td><?php echo $lector->rut_completo; ?></td>
                                    <td><?php echo $lector->nombre_servicio; ?></td>
                                    <td><?php echo $lector->supervisor; ?></td>
									<td><?php echo $lector->estado; ?></td>
                                <td><?php echo $lector->region; ?></td>

                                    <td><?php echo $lector->correo; ?></td>
                                  
                               <td>
                                         <?php if($permisos->update == 1):?>
                                       
                                         <?php endif;?>
                                        <button type="button" class="btn btn-warning btn-image btn-xs btn-flat" value="<?php echo $lector->id_lector; ?>" data-toggle="modal" data-target="#myModal" ><i class="fa fa-file-image-o" aria-hidden="true"></i></button>


                                       </td>
                                </tr>
                                <?php $i++;?>
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