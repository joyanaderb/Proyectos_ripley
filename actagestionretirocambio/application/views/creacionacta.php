
  <!-- End custom js for this page-->
<!DOCTYPE html>
<html lang="en">
 

                
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/estiloboton/estiloradio.css">
 
             
    


    
   
<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/vendor.bundle.addons.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
 
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" media="print"> 
      
    
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
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />
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
                  <form id="save" method="post" action="<?= base_url() ?>index.php/creacionacta/savedata" >

        <div class="content-wrapper">
          <div class="page-header">
              
            <h2 class="page-title" style=color:#6A148E;>
                                      &nbsp;<img src="<?php echo base_url(); ?>assets/images/logoripleyacta.png" alt="logo"/>	

             &nbsp; ACTA PARA GESTIÓN DE RETIRO O CAMBIO
            </h2>

            <nav aria-label="breadcrumb" style=padding-right:150px>
           <h class="text" >

                                    
                                
                      <tr>
                        <td>
                                             <h5 style="font-size:20px;">N° TICKET: </h5>  

                        </td> <input type=hidden name="NroContacto" value="<?php echo $NroContacto; ?>" />
                          

                    

                                                  
  <h5 style="font-size:20px;"><?php echo $NroContacto; ?></h5>
          
                      </tr>
               
                     
            
                    
            </h>
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
                                <select  id="slct" style=width:200px;align:left;border-color:#6A148E; name="tipoGestion" placeholer="Seleciona una opcion">
                      <option>Cambio</option>
                      <option>Cambio P&P</option>
                      <option>Cambio Parcial</option>
                      <option>Envio P&P</option>
                     <option>Envio SSTT</option>
                      <option>Retiro</option>
                        <option>Retiro NDK</option>
                        <option>Retiro Parcial</option>
                    <option>Retiro SSTT</option>
                    </select>
                      </div>  
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type=hidden name="fechaRetiroCambioAuris" value="<?php
$FechaRetiroCambio =$FechaRetiroCambio;
  echo date('d/m/Y', strtotime($FechaRetiroCambio));
?>" /> <h4 style=color:#464646;font-size:20px>Fecha Cambio/Retiro Auris:  <span style=font-size:20px;font-weight:normal;margin-right:20px;> <?php
$FechaRetiroCambio =$FechaRetiroCambio;
  echo date('d-m-Y', strtotime($FechaRetiroCambio));
?></span> 
                          </h4>
                        </div>
                            
                         
                    
                         
                        
                        <?php if ($motivoReclamo): ?>
                            <?php $i = 1;?>
                            <?php foreach ($motivoReclamo as $st): ?> 
                     
                       
                      <div class="border-bottom py-4">
                       <input type=hidden name="motivoReclamo" value="<?php  echo $st->motivo; ?>" />   <h4 style=color:#464646;font-size:25px;>Motivo reclamo:<span style=font-size:25px;font-weight:normal;>    <?php  echo $st->motivo; ?>     <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?>
</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha generación:<span style=font-size:25px;font-weight:normal;>  <?php echo date('d-m-Y G:i:s');?>                                          </span> </h4>  <input type=hidden name="fechaGeneracion" value="<?php echo date('d-m-Y G:i:s');?>" />
                          
                      
                                                                                    
                      </div>
                     <div class="border-bottom py-4">
                       <input type=hidden name="NomCliente" value="<?php echo $NomCliente; ?>" /> <h4 style=color:#464646;font-size:25px>Nombre Cliente:  <span style=font-size:22px;font-weight:normal;margin-right:20px;> <?php echo $NomCliente; ?></span>  Fono:  <label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="NumTelefono" style="width:150px;margin-right:20px;font-size:20px;"  value="<?php echo $TelComercial1; ?>">
				
				</label2>  <input type=hidden name="Direcion1" value="<?php echo $Direcion1; ?>" />  Direccion: <span style=font-size:25px;font-weight:normal;> <?php echo $Direcion1; ?></span></h4> <br>
                         
                         <h4 style=color:#464646;font-size:20px>N° Boleta: <label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="NumBoleta" style="width:200px;margin-right:100px;font-size:20px;" >
				
				</label2>
                             
                             <input type=hidden name="IdCliente"  value="<?php echo $IdCliente; ?>" /> Rut: <span style=font-size:22px;font-weight:normal;margin-right:117px;> <?php echo $IdCliente; ?></span><input type=hidden name="Comuna1" value="<?php echo $Comuna1; ?>" />  Comuna: <span style=font-size:25px;font-weight:normal;> <?php echo $Comuna1; ?> </span></h4>
                                                                                     
                      </div>
                        
                        
              <div class="card" style=border-color:#6A148E;>
                <div class="card-body" align="center">
                    <h4 class="card-title" align="center" style=color:#6A148E;font-size:28px;><b> 2. PRODUCTOS</b></h4>
                 
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
                    
                              
                            
                          <td> <div class="select2">
                                <select  id="slct" style=width:200px;align:left;border-color:#6A148E; name="cantidadProducto" placeholer="Seleciona una opcion">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                     <option>5</option>
                      <option>6</option>
                        <option>7</option>
                    <option>8</option>
                     <option>9</option>
                       <option>10</option>              
                    </select>
                      </div>   </td>
                         <input type=hidden name="SKU" value="<?php echo $SKU; ?>" />  <td style="font-size:20px;"><?php echo $SKU; ?></td>
                          <td><label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="descripcionProducto" style="width:180px;margin-right:-150px;" >
				
				</label2></td>
                         <input type=hidden name="CUD" value="<?php echo $CUD; ?>" />  <td style="font-size:20px;"><?php echo $CUD; ?></td>
                          <td><label2  class="omrs-input-underlined">
				  <input type="text" class="omrs-input-underlined" name="proveedorProducto" style="width:150px;" >
				
				</label2></td>

                        </tr>
                   
                    
                    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                        
             
              <div class="card" style=border-color:#6A148E;>
                <div class="card-body">
                    <h4 class="card-title" align="center" style=color:#6A148E;font-size:28px;><b> 3. ESTADO DE PRODUCTOS</b></h4>
                  <form>
                    <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                                              <h1 class="card-title" style=font-size:25px;>1. USO</h1>

                        <div class="form-check">
                            <label>
                                
			<input type="radio" name="estadoUsoProducto" value="nuevo" checked />
			<span style="font-size:18px;">Nuevo</span>
		</label>
                            </div>    
                             <div class="form-check">
                             <label>
			<input type="radio" name="estadoUsoProducto" value="usado"  />
			<span style="font-size:18px;">Usado</span>
		</label>
                            </div>   
                     
                        
                        </div>
                      </div> 
                      <div class="col-md-3">
                        <div class="form-group">
                                                                          <h4 class="card-title" style=font-size:25px;>2. EMBALAJE ORIGINAL</h4>

                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Embalaje original completo" checked  />
			<span style="font-size:18px;">Embalaje original completo</span>
		</label>
                            </div>   
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Embalaje original no completo"  />
			<span style="font-size:18px;">Embalaje original no completo</span>
		</label>
                            </div>  
                             <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Embalaje original no completo"  />
			<span style="font-size:18px;">Embalaje Alternativo / Roto</span>
		</label>
                            </div> 
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoEmbalajeProducto" value="Sin embalaje"  />
			<span style="font-size:18px;">Sin embalaje</span>
		</label>
                            </div>   
                        
                        </div>
                      </div>
                             <div class="col-md-3">
                        <div class="form-group">
                                                                                                      <h4 class="card-title" style=font-size:25px;>3. ARMADO (SÓLO MUEBLES)</h4>

                           <div class="form-check">
                             <label>
			<input type="radio" name="estadoArmadoProducto" value="Armado" checked />
			<span style="font-size:18px;">Armado</span>
		</label>
                            </div>   
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="estadoArmadoProducto" value="Desarmado"  />
			<span style="font-size:18px;">Desarmado</span>
		</label>
                            </div> 
                     <div class="form-check">
                             <label>
			<input type="radio" name="estadoArmadoProducto" value="No aplica"  />
			<span style="font-size:18px;">No aplica</span>
		</label>
                            </div> 
                      
                        </div>
                      </div>
                         <div class="col-md-3">
                        <div class="form-group">
                                                                                                      <h4 class="card-title" style=font-size:25px;>4. DERECHO A RETRACTO</h4>

                           <div class="form-check">
                             <label>
			<input type="radio" name="DerechoRetracto" value="si" checked />
			<span style="font-size:18px;">Si</span>
		</label>
                            </div>   
                            
                            <div class="form-check">
                             <label>
			<input type="radio" name="DerechoRetracto" value="no"  />
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
                    <h3 class="card-title"  style=color:#6A148E;font-size:28px;> <b>4. CONDICIÓN DEL PRODUCTO</b></h3>
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
                              <input type="checkbox" class="form-check-input" name="danoAbolladoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                       <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoFrontal" value="true">
                            
                            </label>
                          </div>
                          </td>
                              <td>
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoAbolladoTrasero" value="true"> 
                              
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
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                         <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                             <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoCueroRotoTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoDescosidoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                     <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDescosidoTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoDespegadoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                     <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                               <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoDespegadoTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                         <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaCuarteadaTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                        <td>
                               <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                             <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                             <td>
                               <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaGolpeadaTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoMaderaAgrietadaTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoPeladuraSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                               <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                               <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPeladuraTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoPicadoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                          <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoPicadoTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoQuebradoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoQuebradoTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoRotoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div id="check" class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                             <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRotoTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoRayadoSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                             <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoRayadoTrasero" value="true">
                              
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
                              <input type="checkbox" class="form-check-input" name="danoSucioSuperior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioInferior" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioIzquierda" value="true">
                              
                            </label>
                          </div>
                          </td>
                          <td>
                             <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioDerecha" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="danoSucioFrontal" value="true">
                              
                            </label>
                          </div>
                          </td>
                              <td>
                              <div class="form-check form-check-primary">
                             <label class="form-check-label"> 
                              <input type="checkbox" class="form-check-input" name="danoSucioTrasero" value="true">
                              
                            </label>
                          </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                   

                        
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
                        
         
                        
           
        
                          <div class="col-md-12">
                    <div class="card-body">
                    <h4 class="card-title" align="center" style=color:#6A148E;font-size:20px;><b>Observaciones Generales Cliente/CCR

</b></h4>
                    
                        
                        <b> <textarea class="form-control" rows="3" name="observacionCliente" style=border-color:purple;font-size:20px;font-weight:bold; placeholder="Deja tus comentarios acá"></textarea> </b>
                      <div class="mt-3">
                     <div class="row">
    <div class="col-lg-12">
                                 <input type=hidden name="estadoActa" value="No Tomado" />
        <input type=hidden name="fechaRealCumplimiento" value="Sin fecha Registrada" />

        <b><input type="submit" name="save" class="btn btn-primary float-right" value="Guardar"></b>
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
