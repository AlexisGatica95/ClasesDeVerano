  //accedo al elemento document con el $ , disparamos una funcion anonima,voy a usar un evento keyup.


 $(document).ready(function)(){
//lo hacemos en ready osea cuando carga la pagina
 	//KEYUP es un evento se dispara cada vez que suelto cualquier tecla
 	//almaceno un avariable lo escrito por usuario
 	//lo mando en el archivo php para realizar la busqueda

 $("#usuario").focus();
 $("#usuario").blur(function(){ //cuando se pierde el foco pasa todo esto desde el blur hasta abajo
 var usuario = $(this).val(); //accede al elemento que perdio el foco y accede al valor 
 $.ajax({ //es propio de JQ 
 	async : true, 
 	type: 'post',//es el method  de envios de datos
 	url: ' validarusuario.php',//destino final de la info
 	data : {validar : usuario}, //es la info que mando al php
 	beforeSend : function(){

 	},

 	success:function(mensaje){ //se ejecuta cuando el usuario le da una respuesta
 		if (mensaje == "NO") {
 			Swal.fire({
 				type: 'error',
 				title: 'Oops...',
 				text: 'Something went worg!'
 			})
 		}
 	}

 })

 });
 $("#buscar").keyup(function(){
 	//this hace referencia al alemento que disorao en keyup

 	var valor= $(this).val();
 	//es un objeto de JQuery intercambia info si necesidad de cargar la pagina en php
 	//no cargo una pagina , solo llamo un objeto con la informacion.
 	//mejora los tiempos de carga
 		
 	$.ajax({
 		async : true,
 		//trabaja en segundo plano 
 		type : 'post',
 		url : 'buscador.php',
 		//donde mandamos nuestros datos
 		data : {libro : valor},
 		//las propiedades van en llaves
 		success : function(informacion){//se guarda en informacion y la metemos en dentro de un div
 		
 			$("resultado").html(informacion);
 		//siempre que espere un resultado debo decirle que mi funcion tiene un parametro
		},
		timeout: 4000,
		error: function(){
			$("#resultado").html("error interno")
		}
 		
	})

});

