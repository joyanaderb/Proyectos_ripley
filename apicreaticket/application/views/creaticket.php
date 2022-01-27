<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Creación de ticket AURIS</title>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'><link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">

</head>
<body>

<!--  INICIO DE RECORRIDO DE FORMULARIO POST -->
<form method="post" action="<?= base_url() ?>index.php/api/apitest">
  <!--  General -->
  <div class="form-group">
    <h2 class="heading">Creación ticket AURIS</h2>
    <div class="controls">
      <input type="text" id="name" class="floatLabel" name="NomCliente">
      <label for="name">Nombre Cliente</label>
    </div>
    <div class="controls">
      <input type="text" id="email" class="floatLabel" name="CorreoCliente">
      <label for="email">Email</label>
    </div>       
    <div class="controls">
      <input type="tel" id="phone" class="floatLabel" name="TelComercial1">
      <label for="phone">Telefono/Celular</label>
    </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
           <input type="text" id="street" class="floatLabel" name="street">
           <label for="street">Dato4</label>
          </div>          
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="number" id="street-number" class="floatLabel" name="street-number">
            <label for="street-number">dato5</label>
          </div>          
        </div>
      </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="city" class="floatLabel" name="city">
            <label for="city">dato6</label>
          </div>         
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="post-code" class="floatLabel" name="post-code">
            <label for="post-code">dato7</label>
          </div>         
        </div>
      </div>
      <div class="controls">
        <input type="text" id="country" class="floatLabel" name="country">
        <label for="country">dato8</label>
      </div>
  </div>
  <!--  Details -->
  <div class="form-group">
    <h2 class="heading">SECCIÓN 2</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;dato con fecha</label>
      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;dato con fecha2</label>
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
        <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;dato11 con select</label>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel">
        <option value="blank"></option>
        <option value="deluxe" selected>1</option>
        <option value="Zuri-zimmer">2</option>
      </select>
      <label for="fruit">dato12 con select 2</label>
     </div>     
    </div>

    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel">
        <option value="blank"></option>
        <option value="single-bed">1</option>
        <option value="double-bed" selected>2</option>
      </select>
      <label for="fruit">dato 13 con select 2</label>
     </div>     
    </div>
      
     </div>
      <div class="grid">
        <p class="info-text">Describe los comentarios del ticket</p>
        <br>
        <div class="controls">
          <textarea name="comments" class="floatLabel" id="comments"></textarea>
          <label for="comments">Glosa Inicial</label>
          </div>
            <button type="submit" value="Submit" class="col-1-4">Crear Ticket</button>
      </div>  
  </div> 
</form>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
<script src='https://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
<script src='https://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script><script  src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>
