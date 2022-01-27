




<html>
<head>
    <title>Importar CSV - CCR RIPLEY</title>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    
</head>
<body>
    
    <style>
    .navbar {
  min-height: 95px;
}
.navbar-nav > li > a {
  line-height: 65px;
}
.navbar-toggle {
  margin-top: 25px;
}
@media (min-width: 768px) {
  .navbar-nav.navbar-right:last-child {
    margin-right: 0;
  }
}
.main {
  margin: 0 auto -60px;
}
.main .img-responsive {
  margin-bottom: 30px;
}
footer, .footer-push {
  height: 65px;
  background-color: #f5f5f5;
}
.social-icons {
  margin-right: 15px;
  font-size: 40px;
  line-height: 75px;
}
    </style>
    
  <header>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <h3 align="center">REVISIÓN DE CASOS CCR</h3>
      

  
    </div>
  </nav>
</header>

<!-- content -->
<section class="main">
  <div class="container grid-custom">
    <div class="row">
      <div class="col-sm-6">
       <h3 align="center">CARGAR CASOS</h3>
		<br />

		<form method="post" id="import_csv" enctype="multipart/form-data">
			<div class="form-group" align="center">
				<label>Seleccionar Archivo</label>
				<input type="file" name="csv_file" id="csv_file" required accept=".csv" />
                <br>
                	<button  type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Importar y marcar casos</button>
			</div>
			<br />
		
		</form>
		<br />
      </div>
         <div class="col-sm-6">
       <h3 align="center">CASOS A CARGAR</h3>
		<br />
             <div class="form-group" align="center">
				<label>Casos por revisar: <?php echo $casosamarcar;?></label>
                 <br>
                 <a  class="btn btn-info" href="http://10.5.60.241/codeigniter_demo/phpexcel/download" target="_blank">Descargar casos a revisar</a>
                 <a  class="btn btn-info" href="http://10.5.60.241/importarcsv/csv_import/casosamarcarvista" >Ver Casos a revisar</a>


             </div>
            
		<br />
      </div>
   
    </div>
  
  </div>

  <div class="footer-push"></div>
</section>

<!-- footer -->

    
    
    
    
	<div class="container box">
		
		<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2 align="center">Casos a marcar</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <thead>
          <tr>
            <th>ID</th>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>OC</th>
                            <th>Fecha ingreso</th>
                            <th>Hora ingreso</th>
                            <th>Comentario</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($resultado): ?>
                            <?php $i = 1;?>
                            <?php foreach ($resultado as $result): ?>
            
           
                                
                      <tr>
                       <td><?php echo $result->id; ?></td>
                            <td><?php echo $result->rut; ?></td>
                            <td><?php echo $result->nombre_cli; ?></td>
                            <td><?php echo $result->telefono; ?></td>
                            <td><?php echo $result->correo; ?></td>
                            <td><?php echo $result->oc; ?></td>
                             <td><?php echo $result->fecha_ingreso; ?></td>
                            <td><?php echo $result->hora_ingreso; ?></td>
                            <td><?php echo $result->comentario; ?></td>
                         
                          
          
                      </tr>
                                
                        <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?>
        </tbody>
        <tfoot>
         
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='<?php echo base_url(); ?>assets/jsdatatables/jquery.dataTables2.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script><script  src="<?php echo base_url(); ?>assets/jstablaprincipal/script.js"></script>

    
</body>
</html>

	</div>
</body>
</html>



<script>
$(document).ready(function(){

	load_data();

	function load_data()
	{
		$.ajax({
			url:"<?php echo base_url(); ?>csv_import/load_data",
			method:"POST",
			success:function(data)
			{
				$('#imported_csv_data').html(data);
			}
		})
	}

	$('#import_csv').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"<?php echo base_url(); ?>csv_import/import",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			beforeSend:function(){
				$('#import_csv_btn').html('Importando');
			},
			success:function(data)
			{
				$('#import_csv')[0].reset();
				$('#import_csv_btn').attr('disabled', false);
				$('#import_csv_btn').html('Importacion realizada');
			window.location.reload(false); 
			}
		})
	});
	
});
</script>

