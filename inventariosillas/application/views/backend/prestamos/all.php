<section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Todos las Asignaciones</h3>

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
                                <th>Numaración de Equipo</th>
                                <th>NºSerie equipo</th>
                                <th>RUT Ejecutivo</th>
                                <th>Nombre Ejecutivo</th>
                                   <th>Región</th>
                                <th>Fec. de Asignación</th>
                                <th>Fec. de Devolucion</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($prestamos): ?>
                                <?php $i = 1;?>
                                <?php foreach ($prestamos as $prestamo): ?>

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $prestamo->codigo_libro; ?></td>
                                            <td><?php echo $prestamo->isbn_libro; ?></td>
                                            <td><?php echo $prestamo->rut_completo; ?></td>
                                            <td><?php echo $prestamo->nombre?></td>
                                            <td><?php echo $prestamo->region; ?></td>
                                            <td><?php echo $prestamo->fechaprestamo; ?></td>
                                            <td><?php echo $prestamo->fechadevolucion; ?></td>
                                            <td>
                                                <?php if ($prestamo->estado_prestamo == 0): ?>
                                                    <span class="label label-danger">En uso</span>
                                                <?php else: ?>
                                                    <span class="label label-success">Finalizado</span>
                                                <?php endif;?>

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