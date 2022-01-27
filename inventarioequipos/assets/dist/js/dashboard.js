$(function () {
		$(".info-libro").hide();
		$("#example1").DataTable({
			"language": {
							"lengthMenu": "Mostrar _MENU_ registros por pagina",
							"zeroRecords": "No se encontraron resultados en su busqueda",
							"searchPlaceholder": "Buscar registros",
							"info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
							"infoEmpty": "No existen registros",
							"infoFiltered": "(filtrado de un total de _MAX_ registros)",
							"search": "Buscar:",
							"paginate": {
									"first":    "Primero",
									"last":    "Último",
									"next":    "Siguiente",
									"previous": "Anterior"
							},
						}
		});
		$("#example2").DataTable({
			"language": {
							"lengthMenu": "Mostrar _MENU_ registros por pagina",
							"zeroRecords": "No se encontraron resultados en su busqueda",
							"searchPlaceholder": "Buscar registros",
							"info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
							"infoEmpty": "No existen registros",
							"infoFiltered": "(filtrado de un total de _MAX_ registros)",
							"search": "Buscar:",
							"paginate": {
									"first":    "Primero",
									"last":    "Último",
									"next":    "Siguiente",
									"previous": "Anterior"
							},
						}
		});
		$("#btn-comprobardni").on("click", function(){
			dni = $("#dni").val();
			if(dni==""){
				alertify.error("El campo RUT esta vacio");
			}
			else if(dni.requerided != null){
				alertify.error("El campo RUT tener 8 digitos");
			}
			else{

				$.ajax({
				  	type: "POST",
				  	url: "http://10.5.60.241/inventarioequipos/backend/ejecutivos/comprobardni",
				  	data: { dni: dni }
				}).done(function(msg) {
				    if (msg === "nf") {
				    	$("#nombres").val("");
				    	alertify.error("El ejecutivo no se encuentra registrado en la dotación, favor verifique nuevamente o contacte con área de RRHH.");
				    }
				    else if (msg === "na") {
				    	$("#nombres").val("");
				    	alertify.error("El ejecutivo esta registrado...pero ya tiene asignado un equipo, si desea registrar otro equipo primero elimine la asignación actual");
				    }
				    else{
				    	var result = JSON.parse(msg);
				    	$("input[name=idLector]").val(result.id_lector);
				    	$("#nombres").val(result.nombres);
                        $("#nombre_cargo").val(result.nombre_cargo);
                          $("#nombreSuper").val(result.nombreSuper);
                          $("#region").val(result.region);
                        $("#rut_completo").val(result.rut_completo);
				    }
				});
			}

		});
		/*
		$("#btn-comprobarlibro").on("click", function(){
			codigo = $("#codigo").val();
			$.ajax({
			  	method: "POST",
			  	url: "http://10.5.60.140/sistemabiblioteca/backend/libros/disponibilidad",
			  	data: { codigo: codigo }
			}).done(function(msg) {
			    if (!msg) {
			    	$(".info-libro").hide();
			    	alertify.error("El Libro No esta Disponible");
			    	 //alertify.notify('sample', 'success', 5, function(){  console.log('dismissed'); });
			    }
			    else{
			    	var result = JSON.parse(msg);
			    	$("#idLibro").val(result.id_libro);
			    	$("#prestados").val(result.prestados_libro);
			    	$(".titulo").text(result.titulo_libro);
			    	$(".facultad").text(result.facultad);
			    	$(".info-libro").show();
			    }
			});
		});*/
		$("a.btn-remove").on("click", function(e){
			e.preventDefault();
			url = $(this).attr("href");
			alertify.confirm("Deseas Eliminar este registro?", function(e){

				if(e){
					$.ajax({
					  	method: "POST",
					  	url: url,
					}).done(function(resp) {
					   window.location.href= "http://10.5.60.241/inventarioequipos/backend/"+resp;
					});
				}
			});

		});
		$(".btn-image").on("click", function(){
			idLibro = $(this).val();
			imagen = $(this).parent().parent().find("td:eq(6)").children("img").attr("src");
			$(".image-actual").attr("src",imagen);
			$("input[name=idLibro]").val(idLibro);
		});
		$("a#logout").on("click", function(e){
			e.preventDefault();
			url = $(this).attr("href");
			alertify.confirm("¿Estas seguro de salir del Sistema?", function(e){

				if(e){
					$.ajax({
					  	method: "POST",
					  	url: url,
					}).done(function(resp) {
					   window.location.href= "http://10.5.60.241/inventarioequipos/cpanel";
					});
				}
			});

		});
		$("#datepicker").datepicker( {
		    format: " yyyy",
		    viewMode: "years",
		    minViewMode: "years",
		    autoclose: true
	    });

	    $('#fecha').datepicker({
	    	format: 'dd/mm/yyyy',
	    	language: "es",
	    	todayBtn: true,
	      	autoclose: true,
	      	todayBtn: 'linked'
	    });

	    $("#form-prestamo").submit(function(e){
	    	e.preventDefault();
	    	if($("#nombres").val()=="")
	    	{
	    		alertify.alert("El campo Ejecutivo esta vacio...Si ingreso un RUT haga clic en el boton Comprobar");
	    	}
	    	else{
	    		$.ajax({
	    			url : $(this).attr("action"),
	    			type : $(this).attr("method"),
	    			data: $(this).serialize()
	    		})
	    		.done(function(resp) {

					window.location.href= "http://10.5.60.241/inventarioequipos/backend/prestamos/"+resp;
				});
	    	}

	    });
    
    $(document).on("click", ".btn-select", function(){
 codigo = $(this).parent().parent().find("td:eq(1)").text();
         titulo_libro = $(this).parent().parent().find("td:eq(3)").text();
         autor_libro = $(this).parent().parent().find("td:eq(4)").text();
        isbn_libro = $(this).parent().parent().find("td:eq(2)").text();
        subtitulo_libro = $(this).parent().parent().find("td:eq(5)").text();
        editorial_libro = $(this).parent().parent().find("td:eq(6)").text();

 idLibro = $(this).val();

 $("input[name=idLibro]").val(idLibro);
 $("#codigo").val(codigo);
         $("#titulo_libro").val(titulo_libro);
   $("#autor_libro").val(autor_libro);
        $("#isbn_libro").val(isbn_libro);
        $("#subtitulo_libro").val(subtitulo_libro);
        $("#editorial_libro").val(editorial_libro);
});
    
	
	});