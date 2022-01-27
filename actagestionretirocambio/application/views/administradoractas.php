



<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://datatables.net/media/css/site-examples.css">

  <!-- buttons -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/jsfinaldatatable/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

</head>

   


<script type="text/javascript">
    


  $(document).ready(function() {
    $('#data-table').DataTable(
        {

      dom: 'Bfrtip',
        buttons: [
            ,
            
            {
                extend: 'excel',
                title: 'Acta retiro gestión',
                
            },
            
         {
                extend: 'copy',
                text: 'Copiar columnas',
                 title: 'Acta retiro gestión'
            }
           
        ],
        
        "columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 6 ],
                "visible": false,
                "searchable": false
            },
             {
                "targets": [ 8 ],
                "visible": false,
                "searchable": false
            },
             {
                "targets": [ 9 ],
                "visible": false,
                "searchable": false
            },
             {
                "targets": [ 10 ],
                "visible": false,
                "searchable": false
            },
             {
                "targets": [ 11 ],
                "visible": false,
                "searchable": false
            },
             {
                "targets": [ 12 ],
                "visible": false,
                "searchable": false
            },
             {
                "targets": [ 13 ],
                "visible": false,
                "searchable": false
            },
             {
                "targets": [ 14 ],
                "visible": false,
                "searchable": false
            }
            
        ],
        language: {
            buttons: {
                copyTitle: 'Columnas copiadas en el portapapeles',
                copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\u2318</i> + <i>C</i> pour copier les données du tableau à votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',
                copySuccess: {
                    _: '%d registros copiados',
                    1: '1 registro copiado',

                }
            }
        }, 
        
        
        
        
    }
                           
          );
      
      
  });
    
    

</script>
    
    



  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css'>



<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>





<script>
$(document).ready(function() {
  var table = $("#data-table").DataTable();

  $("#dropdown1").on("change", function() {
    table
      .columns(2)
      .search(this.value)
      .draw();
  });
  $("#dropdown2").on("change", function() {
    table
      .columns(7)
      .search(this.value)
      .draw();
  });
    
      $("#sel_depart").on("change", function() {
    table
      .columns(5)
      .search(this.value)
      .draw();
          
      
          
          
  });
    
    $("#buscarticket").on("keyup", function() {
    table
         .columns(0)
        .search(this.value)
        .draw();
          
      
          
          
  });
    
    $('#clear-filter').click(function() {
  var table = $('#data-table').DataTable();
table
 .search( '' )
 .columns().search( '' )
 .draw();
});
    
    
});
    
    
    
</script>

<style>
.dataTables_filter {
display: none;
}
</style>


<script>

(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;
    var _select;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}
    
		function _onSelectEvent(e) {
			_select = e.target;
			var tables = document.getElementsByClassName(_select.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filterSelect);
				});
			});
		}

		function _filter(row) {
      
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';

		}
    
		function _filterSelect(row) {
     
			var text_select = row.textContent.toLowerCase(), val_select = _select.options[_select.selectedIndex].value.toLowerCase();
			row.style.display = text_select.indexOf(val_select) === -1 ? 'none' : 'table-row';

		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				var selects = document.getElementsByClassName('select-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
				Arr.forEach.call(selects, function(select) {
         select.onchange  = _onSelectEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);

</script>






<!DOCTYPE html>
<html lang="en">
 
    
    


 

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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
 
    
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
    
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
    
    
    
    <html>
  <head>
    <title>Title of the Document</title>
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
    
    
    <script>
    
    </script>

      <!-- partial -->
          
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/horizontal-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->

<body class="horizontal-menu" onload="myFunction()">

 <head>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</head>   
    <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
  
    <!-- partial -->
    <div class="container-fluid">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
  
    
      </div>
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      

                      
      <!-- partial -->
      <div class="main-panel">

        <div class="content-wrapper">
          <div class="page-header">
              
            <h2 class="page-title" style=color:#6A148E;>
                                      &nbsp;<img src="<?php echo base_url(); ?>assets/images/logoripleyacta.png" alt="logo"/>	

             &nbsp; ACTA PARA GESTIÓN DE RETIRO O CAMBIO - ADMINISTRADOR@S
            </h2>

            <nav aria-label="breadcrumb" style=padding-right:150px>
           <h5 class="text" >

                                    
                                

               
               
            
                    
            </h5>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
        
                  
                                
               <div class="card">
            <div class="card-body">
              <h4 class="card-title">SECCIÓN FILTROS</h4>
               
                
  <div class="card-body">
                 
                  <div class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Filtro por N°Ticket</label>
                  <input type="text" id="buscarticket" class="form-control mb-2 mr-sm-2 light-table-filter"  placeholder="Buscar por N° Ticket" />

                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Buscar por rango fecha - Desde</div>
                      </div>
    <input type="date" class="form-control" id="datefilterfrom" data-date-split-input="true">
                    </div>
                      <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Hasta</div>
                      </div>
    <input type="date" class="form-control" id="datefilterto" data-date-split-input="true">
                    </div>
                       <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Motivo Reclamo</div>
                      </div>
  <select id="dropdown1"  >
    <option value="">Motivo Reclamo</option>  
    <option value="Cambio">Cambio</option> 
          <option value="Cambio P&P">Cambio P&P</option>   
       <option value="Cambio Parcial">Cambio Parcial</option>
      <option value="Envio P&P">Envio P&P</option>
      <option value="Envio SSTT">Envio SSTT</option>
      <option value="Retiro">Retiro</option>
      <option value="Retiro NDK">Retiro NDK</option>
       <option value="Retiro Parcial">Retiro Parcial</option>
                </select> 
                           
                      </div>
                      
                       <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Filtrado por Estado Acta</div>
                      </div>
  <select  id="dropdown2" >
 <optgroup label="Ingresado"> 
<option value="No Tomado">No Tomado</option>                                        
<option value="Ingresado - Ingresado">Ingresado - Ingresado</option>
                                     <optgroup label="Realizado"> 
<option value="Realizado - Retiro Realizado">Realizado - Retiro Realizado</option>
                                         
<option  value="Realizado - Cambio Realizado">Realizado - Cambio Realizado</option>
                                         <optgroup label="Incompleto">
  <option  value="Incompleto - Capacidad del Camion">Incompleto - Capacidad del Camion</option>     

 <option  value="Incompleto - Retiro Incompleto">Incompleto - Retiro Incompleto</option>  
                                    <optgroup label="Incumplimiento">
 <option  value="Incumplimiento - Sin Moradores">Incumplimiento - Sin Moradores</option>
                                        
<option  value="Incumplimiento - Cliente Desiste">Incumplimiento - Cliente Desiste</option> 
                                        
<option  value="Incumplimiento - Capacidad del Camion">Incumplimiento - Capacidad del Camion</option> 
                </select> 
                           
                           
                           
                  
      
                           
                           
                           
                      </div>
                    
                       <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Filtrado por localidad</div>
                      </div>
  <select id='sel_city'>
                        <option>Seleccione una región</option>
                        <?php
                        foreach($cities as $city){

                            echo "<option value='".$city['id']."'>".$city['cityname']."</option>";
                        }
                        ?>
                    </select>
                            <select id='sel_depart'>
                        <option>Seleccione una ciudad</option>
                    </select>
                           
                      </div>
                      
                 
                <button type="button" id="clear-filter" class="btn btn-primary float-right" value="Guardar">Limpiar Filtros</button>      
                       
                
                 
    </div>
                </div>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped" id="data-table">
                      <thead style=background-color:#663399;>
                        <tr>
                            <th style=color:white;>Número Ticket</th>
                            <th style=color:white;>Fecha Creación Acta</th>
                            <th style=color:white;>Tipo Gestión</th>
                            <th style=color:white;>Motivo Reclamo</th>
                            <th style=color:white;>Comuna</th>
                            <th style=color:white;>Region</th>
                             <th style=color:white;>Dirección Cliente</th>
                            <th style=color:white;>Estado Ticket</th>
                            <th style=color:white;>CUD</th>
                             
                            <th style=color:white;>SKU</th>
                             <th style=color:white;>Cantidad Producto</th>
                               <th style=color:white;>Descripción Producto</th>
                             <th style=color:white;>Número de boleta</th>
                                <th style=color:white;>Rut Cliente</th>
                                                            <th style=color:white;>Telefono Cliente</th>

                            <th style=color:white;>F.Retiro/Cambio AURIS</th>
                            <th style=color:white;>Fecha Real Cumplimiento</th>
                            <th style=color:white;>Historial</th>
                            <th style=color:white;>Editar</th>


                        </tr>
                      </thead>
                     <tbody id="myTable">
                       <?php foreach ($actascreadas as $act): ?>  

                        <tr>  
                            <td> <a href="<?php echo base_url(); ?>index.php/creacionacta/edit/<?php echo $act->NroContacto; ?>" target="_blank"><?php echo $act->NroContacto; ?></a> <input type=hidden name="NroContacto" value="<?php echo $act->NroContacto; ?>" /> </td>
                            <td><?php echo $act->fechaGeneracion; ?> <input type=hidden name="fechaGeneracion" value="<?php echo $act->fechaGeneracion; ?>" /></td>
                            <td><?php echo $act->tipoGestion; ?> <input type=hidden name="tipoGestion" value="<?php echo $act->tipoGestion; ?>" /> </td>
                            <td><?php echo $act->motivoReclamo; ?> <input type=hidden name="tipoGestion" value="<?php echo $act->tipoGestion; ?>" /> </td>

                            <td><?php echo $act->Comuna1; ?> <input type=hidden name="Comuna1" value="<?php echo $act->Comuna1; ?>" /></td>
                            <td><?php echo $act->Comuna1; ?> <input type=hidden name="comuna2" value="<?php echo $act->Comuna1; ?>" /></td>
                             <td> <?php echo $act->Direcion1; ?> </td>
                            <td> <?php echo $act->estadoActa; ?>   </td>
                            <td> <?php echo $act->CUD; ?>   </td>
                                  <td> <?php echo $act->SKU; ?>  </td>
                                                                   <td> <?php echo $act->cantidadProducto; ?>  </td>
                                                                       <td> <?php echo $act->descripcionProducto; ?>  </td>
<td> <?php echo $act->NumBoleta; ?>  </td>
                            <td> <?php echo $act->IdCliente; ?>  </td>
   <td> <?php echo $act->NumTelefono; ?>  </td>
                                
                    
                             <td><?php echo $act->fechaRetiroCambioAuris; ?></td>
                                                         <td><?php echo $act->fechaRealCumplimiento; ?></td>

                           
                              <td>

<a href="<?php echo base_url(); ?>index.php/administradoractas/historialdeticketpornumeroticket/?NroContacto=<?php echo $act->NroContacto; ?>" target="_blank">HISTORIAL CAMBIOS</a>
                            </td>
                             <td>

<a href="<?php echo base_url(); ?>index.php/administradoractas/editAdmin/?NroContacto=<?php echo $act->NroContacto; ?>" target="_blank">IR A EDITAR</a>
                            </td>
                        
                        </tr>
                         
                                   
        
                         <?php endforeach;?>
                      </tbody>
                         
                    </table>

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

      </div>
      <!-- main-panel ends -->

    </div>
          
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- container-scroller -->
    </div>
  <!-- plugins:js -->


  <!-- End custom js for this page-->
</body>

  <script>
function filterRows() {
  var from = $('#datefilterfrom').val();
  var to = $('#datefilterto').val();

  if (!from && !to) { // no value for from and to
    return;
  }

  from = from || '1970-01-01'; // default from to a old date if it is not set
  to = to || '2999-12-31';

  var dateFrom = moment(from);
  var dateTo = moment(to);

  $('#data-table tr').each(function(i, tr) {
    var val = $(tr).find("td:nth-child(2)").text();
    var dateVal = moment(val, "DD/MM/YYYY");
    var visible = (dateVal.isBetween(dateFrom, dateTo, null, [])) ? "" : "none"; // [] for inclusive
    $(tr).css('display', visible);
  });
}

$('#datefilterfrom').on("change", filterRows);
$('#datefilterto').on("change", filterRows);
</script>              
       

        <script type='text/javascript'>
            // baseURL variable
            var baseURL= "<?php echo base_url();?>";
            
            $(document).ready(function(){
                
                // City change
                $('#sel_city').change(function(){
                    var city = $(this).val();

                    // AJAX request
                    $.ajax({
                        url:'<?=base_url()?>index.php/Administradoractas/getCityDepartment',
                        method: 'post',
                        data: {city: city},
                        dataType: 'json',
                        success: function(response){

                            // Remove options
                            $('#sel_user').find('option').not(':first').remove();
                            $('#sel_depart').find('option').not(':first').remove();

                            // Add options
                            $.each(response,function(index,data){
                                $('#sel_depart').append('<option value="'+data['depart_name']+'">'+data['depart_name']+'</option>');
                            });
                        }
                    });
                });
                
                // Department change
                $('#sel_depart').change(function(){
                    var department = $(this).val();

                    // AJAX request
                    $.ajax({
                        url:'<?=base_url()?>index.php/User/getDepartmentUsers',
                        method: 'post',
                        data: {department: department},
                        dataType: 'json',
                        success: function(response){
                            
                            // Remove options
                            $('#sel_user').find('option').not(':first').remove();

                            // Add options
                            $.each(response,function(index,data){
                                $('#sel_user').append('<option value="'+data['id']+'">'+data['name']+'</option>');
                            });
                        }
                    });
                });
                
            });
        </script>
    
<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
</html>
