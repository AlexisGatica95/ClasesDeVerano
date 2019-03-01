$(document).ready(function(){
	var valor = "";
	$("#busqueda").keyup(function(){
		var valor = $(this).val();
		console.log("entro");
		console.log(valor);
		$.ajax({
			async:true,
			type:'post',
			url : 'buscar.php',
			data: {nombre:valor},
			beforeSend : function(){
				$("#resultados").html("cargando...");
			},
			success : function(data){
				$("#resultados").html(data);
			},
			timeout: 4000,
			error: function(){
				$("#resultados").html("Error interno");
			}
		})
		return false;
	})

});