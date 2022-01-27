<!DOCTYPE html>
<html lang="en">
<head>
	<title>Acta gestión cambio o retiro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estiloslogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
      
    
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" action="<?php echo base_url('index.php/Test/hasil')?>" action="GET">
					<span class="login100-form-title p-b-20">
<img src="<?php echo base_url(); ?>assets/images/ripleylogo7.png" alt="logo"/>		<h1 class="p-t-23 p-b-1" style=font-size:15px>hola, <?php echo $this->session->userdata("nombre"); ?></h1>		</span>
					<div class="wrap-input100 rs1 validate-input" data-validate = "Ingresa un N° de gestión válido">
						<input class="input100" type="text" name="cari" >
						<span class="label-input100">Crear Acta por N° de gestión</span>
					</div>
					
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							CREAR ACTA
						</button>
					</div>
					
				
                    <form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
					</span>
					
					<div class="wrap-input100 rs1" data-validate = "Ingresa un N° de gestión válido">
						<input class="input100" type="text" name="username">
						<span class="label-input100">Buscar acta creada por N° de gestión</span>
					</div>
					
					
				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" value="Cari">
							BUSCAR ACTA CREADA
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
						</a>
					</div>
				</form>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/estiloslogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/estiloslogin/js/main.js"></script>

</body>
</html>