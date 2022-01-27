
<html>
<head>
    <title>Reasignación de casos</title>
    
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
      <h3 align="center">Reasignación de casos</h3>
      

  
    </div>
  </nav>
</header>

    
    
<!-- content -->
<section class="main">
  <div class="container grid-custom">
    <div class="row">
      <div class="col-sm-6">
       <h3 align="center">Reasignar</h3>
		<br />

		<form method="post" id="import_csv" enctype="multipart/form-data">
			<div class="form-group" align="center">
				<label>Seleccionar Archivo</label>
				<input type="file" name="csv_file" id="csv_file" required accept=".csv" />
                <br>
                	<button  type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Importar y reasignar casos</button>
			</div>
			<br />
		
		</form>
		<br />
      </div>
         
   <?php echo $this->session->userdata("nombre"); ?>
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
<h2 align="center">ultimos ticket reasignados</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <thead>
          <tr>
            <th>Número ticket</th>
                            <th>Agente asignado</th>
                                                       <th>Reasignado por</th>

          </tr>
        </thead>
        <tbody>
          <?php if ($resultadocargado): ?>
                            <?php $i = 1;?>
                            <?php foreach ($resultadocargado as $row): ?>
            
           
                                
                      <tr>
                        <td>
                                                 <?php echo $row->Nticket; ?>

                        </td>
                        <td>
                                                 <?php echo $row->nuevo_usuario; ?>
                        </td>
                          <td>
                                                 <?php echo $row->Supervisor; ?>
                        </td>
                          
                         
                          
                         
                          
          
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
				$('#import_csv_btn').html('Importando y reasignando casos');
			},
			success:function(data)
			{
				$('#import_csv')[0].reset();
				$('#import_csv_btn').attr('disabled', false);
				$('#import_csv_btn').html('REASIGNACIÓN REALIZADA');
				window.location.reload(false); 

			}
		})
	});
	
});
    
    
    
    
    
</script>

