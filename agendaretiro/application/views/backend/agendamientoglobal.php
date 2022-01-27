



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

   



    



  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css'>



<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>


<script type="text/javascript">
    


  $(document).ready(function() {
    $('#data-table').DataTable(
        {

      dom: 'Bfrtip',
        buttons: [
            ,
            
            {
                extend: 'excel',
                title: 'Agenta retiro',
                
            },
            
         {
                extend: 'copy',
                text: 'Copiar columnas',
                 title: 'Agenda Retiro'
            }
           
        ],
        
        "columnDefs": [
           
            
            
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
      .columns(4)
      .search(this.value)
      .draw();
          
      
          
          
  });
    
    $("#buscarticket").on("keyup", function() {
    table
         
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
                                      &nbsp;	

             &nbsp; RESUMEN AGENDA RETIRO
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
               
                
  <div class="card-body" align="center">
                 
                  <div class="form-inline" align="center">
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
                      <thead style=background-color:#70578b;>
                        <tr>
                            <th style=color:white;>Fecha creación agenda</th>
                            <th style=color:white;>Nombre</th>
                            <th style=color:white;>Fecha Agenda programada</th>
                            <th style=color:white;>Sucursal stock</th>
                            <th style=color:white;>Comuna/Región</th>
                            <th style=color:white;>Direccion</th>
                             <th style=color:white;>Ticket Auris</th>
                            <th style=color:white;>OC</th>
                             <th style=color:white;>CUD</th>
                            <th style=color:white;>rut</th>
                             <th style=color:white;>Motivo2</th>
                            <th style=color:white;>Telefono</th>
                            <th style=color:white;>Correo </th>
                             <th style=color:white;>Comentarios</th>
                             
                    

                         
                            
                           


                        </tr>
                      </thead>
                     <tbody id="myTable">
                       <?php foreach ($actascreadas as $act): ?>  

                        <tr>  
                            <td> <?php echo $act->book_datetime; ?> </td>
                            <td><?php echo $act->nombre; ?></td>
                            <td><?php echo date ("d/m/Y",strtotime($act->start_datetime)); ?></td>  
                            <td><?php echo $act->sucursal; ?> </td>

                            <td><?php echo $act->comuna; ?></td>
                            <td><?php echo $act->direccion; ?></td>
                             <td><?php echo $act->ticketauris; ?> </td>
                             <td><?php echo $act->oc; ?> </td>
                             <td><?php echo $act->CUD; ?> </td>
                            <td><?php echo $act->rut; ?> </td>
                            <td><?php echo $act->motivo2; ?> </td>
                            <td><?php echo $act->telefono; ?>   </td>
                            <td><?php echo $act->correo; ?>   </td>
                             <td><?php echo $act->notes; ?>   </td>
                    
                  

                           
                             
                            
                        
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
    var val = $(tr).find("td:nth-child(3)").text();
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
                        url:'<?=base_url()?>index.php/Backend/getCityDepartment',
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
              
                
            });
        </script>
    
<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/sidebar-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
</html>
