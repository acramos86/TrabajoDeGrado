
$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'busca.php',
		type: 'POST',
		dataType: 'HTML',
		data: {conslta: 'consulta'}
	})
	.done(function(respuesta){
		$("#datos").html(respuesta)
	})
	.fail(function(){
		console.log("error")
	})
}