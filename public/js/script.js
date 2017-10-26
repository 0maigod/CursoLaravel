
$("#registro").click(function(){
	var dato = $("#genre").val();
	var route = "http://127.0.0.1:8000/genero";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{genre: dato},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			console.log(msj.statusText);
			// $("#msj").html(msj.responseJSON.genre);
			// $("#msj-error").fadeIn();
		}
	});
})