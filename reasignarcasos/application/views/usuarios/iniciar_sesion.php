<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reasignación de casos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/loginestilo/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loginestilo/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="<?php echo base_url() ?>index.php/usuarios/iniciar_sesion_post" method="post">
					<span class="login100-form-title p-b-55">
						Reasignación de casos
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Ingresa un correo valido">
						<input class="input100" type="text" name="nombre" placeholder="Correo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Contraseña es requerida">
						<input class="input100" type="password" name="contrasena" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

				
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit">
							ENTRAR
						</button>
					</div>
                    
                     <div class="limiter">
                    <?php if ($this->session->flashdata("error")): ?>
        <div class="alert alert-danger alert-dismissable text-justify" align="center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" align="center">&times;</a>
        <?php echo $this->session->flashdata("error"); ?>
      </div>
      <?php endif;?>
</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Ayuda en linea CCR
						</span>
					</div>

					

				

				
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url(); ?>assets/loginestilo/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/loginestilo/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/loginestilo/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/loginestilo/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/loginestilo/js/main.js"></script>

</body>
</html>
