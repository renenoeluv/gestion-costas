$(document).ready(function () {
	$("#perfiles>button").click(function(){
		var bitacora = $(this).val();
		var clase=$(this).attr("class");
		if(/btn-success/.test(clase)){
				$("#confirmar").attr("disabled", true);
			}
			else{
				$("#confirmar").attr("disabled", false);
			}
		$(".seleccionado").removeClass('seleccionado');
		$(this).addClass('seleccionado');

		//console.log(bitacora);
		$.post("finalizar/mediciones",{idbit:bitacora},function(data){
			$("#mediciones").html("");
				$.each(data, function(i, val){
					$("#mediciones").append('<tr><td class="editText">'+val.MED_ESTACION_MEDICION+'</td><td class="editText">'+val.MED_ESTACION+'</td><td class="editText">'+val.MED_DISTANCIA_HORIZONTAL+'</td><td class="editText">'+val.MED_DISTANCIA_VERTICAL+'</td><td class="editText">'+val.MED_COMENTARIO+'</td></tr>');
				});	
			//$("#mediciones").html(data);
		});
		//$("#mediciones").html("<tr><td>1</td><td>1</td><td>1</td><td>1</td></tr>");
	});



	$("#rooney").click(function(){
		var bitacora = $(".seleccionado").val();
		console.log(bitacora);
		$.post("finalizar/updateestado",{idbit:bitacora},function(data){
		$("#confirmar").attr("disabled", true);
		$(".seleccionado").removeClass("btn-primary");
		$(".seleccionado").addClass("btn-success");
		});
	});	
	
});