$(document).ready(function () {
	$("#perfiles>button").click(function(){
		var bitacora = $(this).val();
		var text = $(this).text();
		console.log(text);

		if (/button/.test($("#guardar").attr("type"))){
			$("#editar").attr("disabled",false);
			$("#guardar").removeAttr("type");
			$("#guardar").attr("type","hidden");
		}

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
			console.log(data);
			console.log(data)
				$.each(data, function (i, val){
					$("#mediciones").append('<tr>"><td class="editText">'+val.MED_ESTACION_MEDICION+'</td><td class="editText">'+val.MED_ESTACION+'</td><td class="editText">'+val.MED_DISTANCIA_HORIZONTAL+'</td><td class="editText">'+val.MED_DISTANCIA_VERTICAL+'</td><td class="editText">'+val.MED_COMENTARIO+'</td><input type="hidden" value="'+val.MED_ID+'"></tr>');
				});
				$("#Nperfil").html("Medidas "+text);	
		});
		
	});


	$("#yes").click(function(){
		var bitacora = $(".seleccionado").val();
		$.post("finalizar/updateestado",{idbit:bitacora},function(data){
		$("#confirmar").attr("disabled", true);
		$(".seleccionado").removeClass("btn-primary");
		$(".seleccionado").addClass("btn-success");
		});
	});

	$("#editar").click(function(){
		$("#mediciones>tr").each(function(i){
			$(this).children("td").each(function(j){
				var campo=$(this).text();
				$(this).html('<input type="text" value="'+campo+'">');
			});
		})
		$("#guardar").removeAttr("type");
		$("#guardar").attr("type","button");
		$(this).attr("disabled","true");
	});


	$("#guardar").click(function(){
		$("#mediciones>tr").each(function(i){

			var idmed=$(this).children('input').val();
			var campo1,campo2,campo3,campo4,campo5;
			$(this).children("td").each(function(j){
				switch(j){
					case 0: 
						campo1=$(this).children("input").val(); 
						break;
					case 1:	
						campo2=$(this).children("input").val(); 
						break;
					case 2:	
						campo3=$(this).children("input").val(); 
						break;
					case 3:	
						campo4=$(this).children("input").val(); 
						break;
					case 4:	
						campo5=$(this).children("input").val(); 
						break;
				}
			});

			var td = $(this);
			$.post("finalizar/edmed",{id:idmed,em:campo1,e:campo2,dh:campo3,dv:campo4,observacion:campo5},function(data){
						td.children("td").each(function(p){
							switch(p){
								case 0: $(this).html(campo1);
										break;
								case 1: $(this).html(campo2);		
										break;
								case 2: $(this).html(campo3);
										break;
								case 3: $(this).html(campo4);
										break;
								case 4: $(this).html(campo5);						
							}
						});

						$("#editar").attr("disabled",false);
						$("#guardar").removeAttr("type");
						$("#guardar").attr("type","hidden");


		});

	});
});


	$("#finalizar").click(function(){
		$("#perfiles").children("button").each(function(){
			if($(this).attr("class").indexOf("btn-success")==-1){
				alert("No se puede finalizar");
				return false;
			}
			else
			{
			var id=$("#idcamp").val();

				$.post("finalizar/fincamp",{idcamp:id},function(data){
					console.log("finalizar campaña exitoso")
					//document.location="controlador de piña";
				});
				return false;

			}



		});
	})






});	





