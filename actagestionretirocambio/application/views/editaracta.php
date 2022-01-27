
  <!-- End custom js for this page-->
<!DOCTYPE html>
<html lang="en">
 

                

   <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />

             
    

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/estiloboton/estiloradio.css">
    
   
<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Acta gestión retiro y/o cambio</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/vendor.bundle.addons.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    

     
  
    
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
    
    
    <style>  @font-face {
font-family: 'Eco Coding Regular';
src: url('EcoCoding.eot');
src: url('EcoCoding.eot?#iefix') format('embedded-opentype'),
url('EcoCoding.woff') format('woff'),
url('EcoCoding.ttf') format('truetype');
font-weight: normal;
font-style: normal;
}</style> 
 
    
    
  <!-- endinject -->
</head>
    
    
    
    <html>
  <head>
  </head>
  <body>
    <script>
        
            function myFunction() {

        
        const queryString = window.location.search;

console.log(queryString);
      const urlParams = new URLSearchParams(queryString);
      const nrocontacto = urlParams.get('NroContacto');
      document.getElementById("nrocontacto").innerHTML = nrocontacto;
      // 
   
                
            }
      // empty string
    </script>
  </body>
</html>
    
    <style>
    /** BEGIN: Non Openmrs CSS **/
@import url("https://fonts.googleapis.com/css?family=Roboto&display=swap");
* {
}
div.container {
	display: flex;
	align-items: flex-start;
	justify-content: space-around;
	margin-top: 30px;
	border: 1px solid whitesmoke;
	padding: 21px;
	border-radius: 4px;
}
h4.title {
	text-align: center;
	margin-bottom: 45px;
}
:root {
--omrs-color-ink-lowest-contrast: rgba(47, 60, 85, 0.18);
	--omrs-color-ink-low-contrast: rgba(60, 60, 67, 0.3);
	--omrs-color-ink-medium-contrast: rgba(19, 19, 21, 0.6);
	--omrs-color-interaction: #6A148E;
	--omrs-color-danger: #b50706;
	--omrs-color-bg-low-contrast: #eff1f2;
	--omrs-color-ink-high-contrast: #6A148E;
	--omrs-color-bg-high-contrast: #ffffff;
	
}
/** END: Non Openmrs CSS **/
div.omrs-input-group {
  margin-bottom: 1.5rem;
  position: relative;
  width: 20.4375rem;
}

/* Input*/
.omrs-input-underlined > input,
.omrs-input-filled > input {
	border: none;
	border-bottom: 0.125rem solid var(--omrs-color-ink-medium-contrast);
	width: 100%;
	height: 2rem;
	font-size: 1.0625rem;
	padding-left: 0.875rem;
	line-height: 147.6%;
	padding-top: 0.825rem;
	padding-bottom: 0.5rem;
}

.omrs-input-underlined > input:focus,
.omrs-input-filled > input:focus {
	outline: none;
}

.omrs-input-underlined > .omrs-input-label,
.omrs-input-filled > .omrs-input-label {
	position: absolute;
	top: 0.9375rem;
	left: 0.875rem;
	line-height: 147.6%;
	color: var(--omrs-color-ink-medium-contrast);
	transition: top .2s;
}

.omrs-input-underlined > svg,
.omrs-input-filled > svg {
	position: absolute;
	top: 0.9375rem;
	right: 0.875rem;
	fill: var(--omrs-color-ink-medium-contrast);
}

.omrs-input-underlined > .omrs-input-helper,
.omrs-input-filled > .omrs-input-helper {
	font-size: 0.9375rem;
	color: var(--omrs-color-ink-medium-contrast);
	letter-spacing: 0.0275rem;
	margin: 0.125rem 0.875rem;
}

.omrs-input-underlined > input:hover,
.omrs-input-filled > input:hover {
	background: var(--omrs-color-interaction-minus-two);
	border-color: var(--omrs-color-ink-high-contrast);
}

.omrs-input-underlined > input:focus + .omrs-input-label,
.omrs-input-underlined > input:valid + .omrs-input-label,
.omrs-input-filled > input:focus + .omrs-input-label,
.omrs-input-filled > input:valid + .omrs-input-label {
	top: 0;
	font-size: 0.9375rem;
	margin-bottom: 32px;;
}

.omrs-input-underlined:not(.omrs-input-danger) > input:focus + .omrs-input-label,
.omrs-input-filled:not(.omrs-input-danger) > input:focus + .omrs-input-label {
	color: var(--omrs-color-interaction);
}

.omrs-input-underlined:not(.omrs-input-danger) > input:focus,
.omrs-input-filled:not(.omrs-input-danger) > input:focus {
	border-color: var(--omrs-color-interaction);
}

.omrs-input-underlined:not(.omrs-input-danger) > input:focus ~ svg,
.omrs-input-filled:not(.omrs-input-danger) > input:focus ~ svg {
	fill: var(--omrs-color-ink-high-contrast);
}

/** DISABLED **/

.omrs-input-underlined > input:disabled {
	background: var(--omrs-color-bg-low-contrast);
	cursor: not-allowed;
}

.omrs-input-underlined > input:disabled + .omrs-input-label,
.omrs-input-underlined > input:disabled ~ .omrs-input-helper{
	color: var(--omrs-color-ink-low-contrast);
}

.omrs-input-underlined > input:disabled ~ svg {
	fill: var(--omrs-color-ink-low-contrast);
}


/** DANGER **/

.omrs-input-underlined.omrs-input-danger > .omrs-input-label, .omrs-input-underlined.omrs-input-danger > .omrs-input-helper,
.omrs-input-filled.omrs-input-danger > .omrs-input-label, .omrs-input-filled.omrs-input-danger > .omrs-input-helper{
	color: var(--omrs-color-danger);
}

.omrs-input-danger > svg {
	fill: var(--omrs-color-danger);
}

.omrs-input-danger > input {
	border-color: var(--omrs-color-danger);
}

.omrs-input-underlined > input {
	background: var(--omrs-color-bg-high-contrast);
}
.omrs-input-filled > input {
	background: var(--omrs-color-bg-low-contrast);
}
    </style>

    
  <style>
    
    </style>
  
    
                     
                        <style>
                            
                             select2 {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #eeeeee;
  background-image: none;
}
/* Remove IE arrow */
select2::-ms-expand {
  display: none;
}
/* Custom Select */
.select2 {
  position: relative;
  display: flex;
  width: 7em;
  height: 2.6em;
  line-height: 3;
  background: white;
  overflow: hidden;
  border-radius: .25em;
}
select2 {
  flex: 1;
  padding: 0 .5em;
  color: black;
  cursor: pointer;
}
/* Arrow */
.select2::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #6A148E;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select2:hover::after {
  color: #f39c12;
}
                        
                            select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #eeeeee;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: 20em;
  height: 2.6em;
  line-height: 3;
  background: white;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: black;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #6A148E;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

                        </style>
                        
         
          
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/horizontal-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->

<body class="horizontal-menu" onload="myFunction()">

    
    <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
  
    <!-- partial -->
    <div class="container-fluid">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"  onclick="window.print();" 
><i class="fas fa-print" style="font-size: 24px;" ></i> </div>
    
      </div>
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      
      

                      
      <!-- partial -->
      <div class="main-panel">
                  <form id="save" method="post" action="<?= base_url() ?>index.php/creacionacta/update" >

        <div class="content-wrapper">
          <div class="page-header">
              
            <h2 class="page-title" style=color:#6A148E;>
                                      &nbsp;<img src="<?php echo base_url(); ?>assets/images/logoripleyacta.png" alt="logo"/>	

             &nbsp; ACTA PARA GESTIÓN DE RETIRO O CAMBIO
            </h2>

            <nav aria-label="breadcrumb" style=padding-right:150px>
           <h5 class="text" >

                                    
                                
                      <tr>
                        <td>
                                               <h5 style="font-size:20px;">N° TICKET: </h5>    

                        </td> <input type=hidden name="NroContacto" value="<?php echo $acta->NroContacto; ?>" />
                          

                    

                                                  
 <h5 style="font-size:20px;"> <?php echo $acta->NroContacto; ?></h5>
          
                      </tr>
               
               
               
               
            
                    
            </h5>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="border-bottom text-left-h4 pb-4 d-flex">
                          <h4 style=color:#464646;>Tipo Gestión &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                           <div class="select">
                                <select  id="slct" style=width:200px;align:left;border-color:#6A148E;font-size:20px; name="tipoGestion" placeholer="Seleciona una opcion">
<option <?php if($acta->tipoGestion == "Cambio"){ echo 'selected="selected"'; } ?> value="Cambio">Cambio</option>
 <option <?php if($acta->tipoGestion == "Cambio P&P"){ echo 'selected="selected"'; } ?> value="Cambio P&P">Cambio P&P</option>
 <option <?php if($acta->tipoGestion == "Cambio Parcial"){ echo 'selected="selected"'; } ?> value="Cambio Parcial">Cambio Parcial</option>
 <option <?php if($acta->tipoGestion == "Envio P&P"){ echo 'selected="selected"'; } ?> value="Envio P&P">Envio P&P</option>
 <option <?php if($acta->tipoGestion == "Envio SSTT"){ echo 'selected="selected"'; } ?> value="Envio SSTT">Envio SSTT</option>
 <option <?php if($acta->tipoGestion == "Retiro"){ echo 'selected="selected"'; } ?> value="Retiro">Retiro</option>
 <option <?php if($acta->tipoGestion == "Retiro"){ echo 'selected="selected"'; } ?> value="Retiro NDK">Retiro NDK</option>
 <option <?php if($acta->tipoGestion == "Retiro Parcial"){ echo 'selected="selected"'; } ?> value="Retiro Parcial">Retiro Parcial</option>
 <option <?php if($acta->tipoGestion == "Retiro SSTT"){ echo 'selected="selected"'; } ?> value="Retiro SSTT">Retiro SSTT</option>
                    </select>
                          </div>     
                          
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <h4 style=color:#464646;font-size:20px>Fecha Retiro/Cambio Auris: <label2  class="omrs-input-underlined">
				  <input type="date" class="omrs-input-underlined" name="fechaRetiroCambioAuris" value="<?php echo $acta->fechaRetiroCambioAuris; ?>" style="width:200px;margin-right:100px;font-size:20px;" >
				
				</label2>
                      </div>   
                       
                      <div class="border-bottom py-4">
                        <h4 style=color:#464646;font-size:25px;>Motivo reclamo:<span style=font-size:25px;font-weight:normal;> <?php echo $acta->motivoReclamo; ?>
</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha generación:<span style=font-size:20px;font-weight:normal;>                 <?php echo $acta->fechaGeneracion;?>                            </span> </h4>
                          
                      
                                                                                    
                       </div>
                     <div class="border-bottom py-4">
                       <input type=hidden name="NomCliente" value="<?php echo $acta->NomCliente; ?>" /> <h4 style=color:#464646;font-size:25px>Nombre Cliente:  <span style=font-size:22px;font-weight:normal;margin-right:20px;> <?php echo $acta->NomCliente; ?></span>  Fono:  <label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="NumTelefono" style="width:150px;margin-right:20px;font-size:20px;" value="<?php echo $acta->NumTelefono; ?>" >
				
				</label2>  <input type=hidden name="Direcion1" value="<?php echo $acta->Direcion1; ?>" />  Direccion: <span style=font-size:25px;font-weight:normal;> <?php echo $acta->Direcion1; ?></span></h4> <br>
                         
                         <h4 style=color:#464646;font-size:20px>N° Boleta: <label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="NumBoleta" value="<?php echo $acta->NumBoleta; ?>" style="width:200px;margin-right:100px;font-size:20px;" >
				
				</label2>
                             
                             <input type=hidden name="IdCliente"  value="<?php echo $acta->IdCliente; ?>" /> Rut: <span style=font-size:22px;font-weight:normal;margin-right:117px;> <?php echo $acta->IdCliente; ?></span><input type=hidden name="Comuna1" value="<?php echo $acta->Comuna1; ?>" />  Comuna: <span style=font-size:25px;font-weight:normal;> <?php echo $acta->Comuna1; ?> </span></h4>
                                                                                     
                      </div>
 
                        
              <div class="card" style=border-color:#6A148E;>
                <div class="card-body" align="center">
                    <h4 class="card-title" align="center"  style=color:#6A148E;font-size:28px;><b>PRODUCTOS</b></h4>
                 
                  <div class="table-responsive" align="center">
                    <table class="table">
                       <thead style=background-color:#663399;>
                        <tr>
                          <th>                             <h4 style=color:white;>Cantidad</h4>
</th>                             

                          <th><h4 style=color:white;>SKU</h4></th>
                            <th><h4 style=color:white;>Descripción Arículo</h4></th>
                          <th><h4 style=color:white;>CUD</h4></th>
                             <th><h4 style=color:white;>Proveedor</h4></th>
                        </tr>
                      </thead>
                      <tbody style=background-color:#e0e0ef;>
                        <tr>
                          <td>   <div class="select2">
                                <select  id="slct" style=width:200px;align:left;border-color:#6A148E; name="cantidadProducto" placeholer="Seleciona una opcion">
<option <?php if($acta->cantidadProducto == "1"){ echo 'selected="selected"'; } ?> value="1">1</option>
<option <?php if($acta->cantidadProducto == "2"){ echo 'selected="selected"'; } ?> value="2">2</option>
<option <?php if($acta->cantidadProducto == "3"){ echo 'selected="selected"'; } ?> value="3">3</option>
<option <?php if($acta->cantidadProducto == "4"){ echo 'selected="selected"'; } ?> value="4">4</option>
<option <?php if($acta->cantidadProducto == "5"){ echo 'selected="selected"'; } ?> value="5">5</option>
<option <?php if($acta->cantidadProducto == "6"){ echo 'selected="selected"'; } ?> value="6">6</option>
<option <?php if($acta->cantidadProducto == "7"){ echo 'selected="selected"'; } ?> value="7">7</option>
<option <?php if($acta->cantidadProducto == "8"){ echo 'selected="selected"'; } ?> value="8">8</option>
<option <?php if($acta->cantidadProducto == "9"){ echo 'selected="selected"'; } ?> value="9">9</option>
<option <?php if($acta->cantidadProducto == "10"){ echo 'selected="selected"'; } ?> value="10">10</option>
                              </select></div></td>
                         <input type=hidden name="SKU" value="<?php echo $acta->SKU; ?>" />  <td style="font-size:20px;"><?php echo $acta->SKU; ?></td>
                          <td><label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="descripcionProducto" value="<?php echo $acta->descripcionProducto; ?>" style="width:180px;margin-right:-150px;" >
				
				</label2></td>
                         <input type=hidden name="CUD"  value="<?php echo $acta->CUD; ?>" />  <td style="font-size:20px;"><?php echo $acta->CUD; ?></td> 
                          <td><label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="proveedorProducto" value="<?php echo $acta->proveedorProducto; ?>" style="width:150px;" >
				
				</label2></td>

                        </tr>
                   
                    
                    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                        
                        
             
              <div class="card" style=border-color:#6A148E;>
                <div class="card-body">
                    <h4 class="card-title" align="center" style=color:#6A148E;font-size:28px;><b>ESTADO DE PRODUCTOS</b></h4>
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                                              <h4 class="card-title">1. USO</h4>

                            <div class="form-check">
                            <label>
                                
			<input type="radio" name="estadoUsoProducto" value="nuevo" <?php 
    echo set_value('nuevo', $acta->estadoUsoProducto) == "nuevo" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Nuevo</span>
		</label>
                            </div>    
                             <div class="form-check">
                             <label>
			<input type="radio" name="estadoUsoProducto" value="usado" <?php 
    echo set_value('usado', $acta->estadoUsoProducto) == "usado" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Usado</span>
		</label>
                            </div>               
                          
                         
                     
                        
                        </div>
                      </div> 
                      <div class="col-md-3">
                        <div class="form-group">
                                                                          <h4 class="card-title">2. EMBALAJE ORIGINAL</h4>
                            
                              <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Embalaje original completo" <?php 
    echo set_value('Embalaje original completo', $acta->estadoEmbalajeProducto) == "Embalaje original completo" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Embalaje original completo</span>
		</label>
                            </div>   
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Embalaje original no completo" <?php 
    echo set_value('Embalaje original no completo', $acta->estadoEmbalajeProducto) == "Embalaje original no completo" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Embalaje original no completo</span>
		</label>
                            </div> 
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Embalaje original no completo" <?php 
    echo set_value('Embalaje original no completo', $acta->estadoEmbalajeProducto) == "Embalaje original no completo" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Embalaje Alternativo / Roto</span>
		</label>
                            </div>  
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Sin embalaje" <?php 
    echo set_value('Sin embalaje', $acta->estadoEmbalajeProducto) == "Sin embalaje" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Sin embalaje</span>
		</label>
                            </div>   

                       
                       
                    
                        
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                                                                                                      <h4 class="card-title">3. ARMADO (SÓLO MUEBLES)</h4>

                            
                              <div class="form-check">
                             <label>
			<input type="radio" name="estadoArmadoProducto" value="Armado" <?php 
    echo set_value('Armado', $acta->estadoArmadoProducto) == "Armado" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Armado</span>
		</label>
                            </div>   
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoArmadoProducto" value="Desarmado" <?php 
    echo set_value('Desarmado', $acta->estadoArmadoProducto) == "Desarmado" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Desarmado</span>
		</label>
                            </div> 
                     <div class="form-check">
                             <label>
			<input type="radio" name="estadoArmadoProducto" value="No aplica" <?php 
    echo set_value('No aplica', $acta->estadoArmadoProducto) == "No aplica" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">No aplica</span>
		</label>
                            </div>    
                            
                        
                    

                        </div>
                          
                          
                      </div>
                         <div class="col-md-3">
                        <div class="form-group">
                                                                                                      <h4 class="card-title">4. DERECHO A RETRACTO</h4>

                            
                              <div class="form-check">
                             <label>
			<input type="radio" name="DerechoRetracto" value="si" <?php 
    echo set_value('si', $acta->DerechoRetracto) == "si" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">Si</span>
		</label>
                            </div>   
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="DerechoRetracto" value="no" <?php 
    echo set_value('no', $acta->DerechoRetracto) == "no" ? "checked" : ""; 
?> />
			<span style="font-size:18px;">No</span>
		</label>
                            </div> 
                       
                            
                        
                    

                        </div>
                          
                          
                      </div>
                    </div>
                  </form>
                </div>
              
              </div>
                        
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style=color:#6A148E;font-size:28px;><b>4. CONDICIÓN DEL PRODUCTO</b></h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped" >
                      <thead style=background-color:#663399;>
                        <tr>
                          <th>
                            <h4 style=color:white;>Daño</h4>
                          </th>
                          <th>
                            <h4 style=color:white;>Superior</h4>
                          </th>
                          <th>
                            <h4 style=color:white;>Inferior</h4>
                          </th>
                          <th>
                            <h4 style=color:white;>Izquierda</h4>
                          </th>
                          <th>
                           <h4 style=color:white;> Derecha</h4>
                          </th>
                             <th>
                            <h4 style=color:white;>Frontal</h4>
                          </th>
                             <th>
                            <h4 style=color:white;>Trasero</h4>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                                 <h4><b style=color:#464646;font-weight:normal;>Abollado</b></h4>
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoSuperior" value="true" <?php echo ($acta->danoAbolladoSuperior == 'true' ? 'checked' : null); ?>> 
                              
                            </label>
                          </div>
                          </td>
                       <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoInferior" value="true" <?php echo ($acta->danoAbolladoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoIzquierda" value="true" <?php echo ($acta->danoAbolladoIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoDerecha" value="true" <?php echo ($acta->danoAbolladoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoFrontal" value="true" <?php echo ($acta->danoAbolladoFrontal == 'true' ? 'checked' : null); ?>>
                            
                            </label>
                          </div>
                          </td>
                              <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoTrasero" value="true" <?php echo ($acta->danoAbolladoTrasero == 'true' ? 'checked' : null); ?>> 
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                                 <h4><b style=color:#464646;font-weight:normal;>Cuero Roto</b></h4>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoSuperior" value="true" <?php echo ($acta->danoCueroRotoSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                         <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoInferior" value="true" <?php echo ($acta->danoCueroRotoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoIzquierda" value="true" <?php echo ($acta->danoCueroRotoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoDerecha" value="true" <?php echo ($acta->danoCueroRotoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoFrontal" value="true" <?php echo ($acta->danoCueroRotoFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoTrasero" value="true" <?php echo ($acta->danoCueroRotoTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                        <tr>
                            <td>
                                   <h4><b style=color:#464646;font-weight:normal;>Descosido</b></h4>
                         
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoSuperior" value="true" <?php echo ($acta->danoDescosidoSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                     <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoInferior" value="true" <?php echo ($acta->danoDescosidoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoIzquierda" value="true" <?php echo ($acta->danoDescosidoIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoDerecha" value="true" <?php echo ($acta->danoDescosidoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoFrontal" value="true" <?php echo ($acta->danoDescosidoFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoTrasero" value="true" <?php echo ($acta->danoDescosidoTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                        <tr>
                           <td> 
                                  <h4><b style=color:#464646;font-weight:normal;>Despegado</b></h4>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoSuperior" value="true" <?php echo ($acta->danoDespegadoSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                     <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoInferior" value="true" <?php echo ($acta->danoDespegadoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                               <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoIzquierda" value="true" <?php echo ($acta->danoDespegadoIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoDerecha" value="true" <?php echo ($acta->danoDespegadoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoFrontal" value="true" <?php echo ($acta->danoDespegadoFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoTrasero" value="true" <?php echo ($acta->danoDespegadoTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             
                        </tr>
                        <tr>
                          <td>
                                 <h4><b style=color:#464646;font-weight:normal;>Madera Cuarteada</b></h4>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                               <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaSuperior" value="true" <?php echo ($acta->danoMaderaCuarteadaSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                         <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaInferior" value="true" <?php echo ($acta->danoMaderaCuarteadaInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaIzquierda" value="true" <?php echo ($acta->danoMaderaCuarteadaIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaDerecha" value="true" <?php echo ($acta->danoMaderaCuarteadaDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaFrontal" value="true" <?php echo ($acta->danoMaderaCuarteadaFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaTrasero" value="true" <?php echo ($acta->danoMaderaCuarteadaTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                            
                        </tr>
                        <tr>
                           <td>
                               
                                  <h4><b style=color:#464646;font-weight:normal;>Madera Golpeada</b></h4>

                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaSuperior" value="true" <?php echo ($acta->danoMaderaGolpeadaSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        <td>
                               <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaInferior" value="true" <?php echo ($acta->danoMaderaGolpeadaInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaIzquierda" value="true" <?php echo ($acta->danoMaderaGolpeadaIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaDerecha" value="true" <?php echo ($acta->danoMaderaGolpeadaDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaFrontal" value="true" <?php echo ($acta->danoMaderaGolpeadaFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaTrasero" value="true" <?php echo ($acta->danoMaderaGolpeadaTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                        <tr>
                         <td>
                                <h4><b style=color:#464646;font-weight:normal;>Madera Agrietada</b></h4>
                             
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaSuperior" value="true" <?php echo ($acta->danoMaderaAgrietadaSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaInferior" value="true" <?php echo ($acta->danoMaderaAgrietadaInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaIzquierda" value="true" <?php echo ($acta->danoMaderaAgrietadaIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaDerecha" value="true" <?php echo ($acta->danoMaderaAgrietadaDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaFrontal" value="true" <?php echo ($acta->danoMaderaAgrietadaFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaTrasero" value="true" <?php echo ($acta->danoMaderaAgrietadaTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                                    <tr>
                         <td>
                                <h4><b style=color:#464646;font-weight:normal;>Peladura</b></h4>

                             
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraSuperior" value="true" <?php echo ($acta->danoPeladuraSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraInferior" value="true" <?php echo ($acta->danoPeladuraInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraIzquierda" value="true" <?php echo ($acta->danoPeladuraIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraDerecha" value="true" <?php echo ($acta->danoPeladuraDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraFrontal" value="true" <?php echo ($acta->danoPeladuraFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraTrasero" value="true" <?php echo ($acta->danoPeladuraTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                           <tr>
                         <td>
                               <h4><b style=color:#464646;font-weight:normal;>Picado</b></h4>

                             
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoSuperior" value="true" <?php echo ($acta->danoPicadoSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoInferior" value="true" <?php echo ($acta->danoPicadoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoIzquierda" value="true" <?php echo ($acta->danoPicadoIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoDerecha" value="true" <?php echo ($acta->danoPicadoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                          <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoFrontal" value="true" <?php echo ($acta->danoPicadoFrontal == 'true' ? 'checked' : null); ?>> 
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoTrasero" value="true" <?php echo ($acta->danoPicadoTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                                 <tr>
                         <td>
                                <h4><b style=color:#464646;font-weight:normal;>Quebrado</b></h4>

                             
                          </td> 
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoSuperior" value="true" <?php echo ($acta->danoQuebradoSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoInferior" value="true" <?php echo ($acta->danoQuebradoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoIzquierda" value="true" <?php echo ($acta->danoQuebradoIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoDerecha" value="true" <?php echo ($acta->danoQuebradoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoFrontal" value="true" <?php echo ($acta->danoQuebradoFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoTrasero" value="true" <?php echo ($acta->danoQuebradoTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                             <tr>
                         <td>
                               <h4><b style=color:#464646;font-weight:normal;>Roto</b></h4> 

                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoSuperior" value="true" <?php echo ($acta->danoRotoSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoInferior" value="true" <?php echo ($acta->danoRotoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoIzquierda" value="true" <?php echo ($acta->danoRotoIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div id="check" class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoDerecha" value="true" <?php echo ($acta->danoRotoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                             <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoFrontal" value="true" <?php echo ($acta->danoRotoFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoTrasero" value="true" <?php echo ($acta->danoRotoTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                             <tr>
                         <td>
                                <h4><b style=color:#464646;font-weight:normal;>Rayado</b></h4>
     
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoSuperior" value="true" <?php echo ($acta->danoRayadoSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoInferior" value="true" <?php echo ($acta->danoRayadoInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoIzquierda" value="true" <?php echo ($acta->danoRayadoIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoDerecha" value="true" <?php echo ($acta->danoRayadoDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                             <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoFrontal" value="true" <?php echo ($acta->danoRayadoFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoTrasero" value="true" <?php echo ($acta->danoRayadoTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                             <tr>
                         <td>
                                <h4><b style=color:#464646;font-weight:normal;>Sucio</b></h4>

                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioSuperior" value="true" <?php echo ($acta->danoSucioSuperior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioInferior" value="true" <?php echo ($acta->danoSucioInferior == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioIzquierda" value="true" <?php echo ($acta->danoSucioIzquierda == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioDerecha" value="true" <?php echo ($acta->danoSucioDerecha == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioFrontal" value="true" <?php echo ($acta->danoSucioFrontal == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label"> 
                              <input type="checkbox" class="form-check-input" name="danoSucioTrasero" value="true" <?php echo ($acta->danoSucioTrasero == 'true' ? 'checked' : null); ?>>
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                     
        
                          <div class="col-md-12">
                    <div class="card-body">
                    <h4 class="card-title" align="center" style=color:#6A148E;font-size:20px;><b>Observaciones Generales Cliente/CCR

</b></h4>
                      <textarea id="clipboardExample2" class="form-control" rows="6" style=border-color:purple;font-size:20px;font-weight:bold; name="observacionCliente" placeholder="Deja tus comentarios acá"><?php echo $acta->observacionCliente; ?></textarea>
                      <div class="mt-4">
                     <div class="row">
    <div class="col-lg-12">
        
        <input type="submit" name="actualizar" class="btn btn-primary float-right" value="Guardar">
    </div>
</div>

                          

                          
                      </div>
                    </div>
                  </div>
         
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
    
        </footer>
        <!-- partial -->
                                                          </form>

      </div>
      <!-- main-panel ends -->

    </div>
          
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- container-scroller -->

  <!-- plugins:js -->

  <script src="<?php echo base_url(); ?>assets/vendor/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/tree.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

              
       

    
<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
</html>
