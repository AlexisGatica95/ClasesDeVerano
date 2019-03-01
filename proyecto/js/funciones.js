// dentro de la carpeta js creo el archivo funciones.js
// var x = $(document);
// x.ready(events);

// function(events){

// }
$(document).ready(function(){

	// keyup -> EVENTO QUE SE DISPARA SIEMPRE QUE SUELTO UNA TECLA 
	//keydown -> evento que se dispara siempre que apreto una tecla
	// cada vez que interactuo con el teclado dentro del input 
		// almaceno en una variable lo escrito por el usuario
		// lo mando al archivo PHP para realizar la busqueda
	$("#usuario").focus();
	$("#usuario").blur(function(){
		var usuario = $(this).val();
		$.ajax({
			async:true,
			type:'post',
			url:'validarusuario.php',
			data : {validar: usuario},
			beforeSend : function(){
				//ruedita cargando
				// $("#resultado").html('<img src="ruedita.gif">');
			},
			success : function(loquesea){
				if(loquesea == "NO") {
					Swal.fire({
					  type: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					  
					})
					$("#usuario").val("");
				} else {

				}
			},
			timeout : 4000,
			error: function(){

			}


		})
	});
	$("#buscar").keyup(function(){
		// document.getElementById('buscar');
		var valor = $(this).val();
		// .ajax -> objeto de JQuery intercambiar informacion con el servidor de manera asincronica (sin neceisdad de cargar la pagina en .php)
		// mejora los tiempos de carga ya que no carga una pagina nueva 
		$.ajax({
			async : true,
			type : 'post',
			url : 'buscador.php',
			data : {libro : valor},
			success : function(informacion){
				$("#resultado").html(informacion);
			},
			timeout: 4000,
			error: function(){
				$("#resultado").html("Error interno");
			}

		})
	});


});

