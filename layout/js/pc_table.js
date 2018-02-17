$(function() {
	get_data();
	var btn_send;
	var btn_check;
	var txt_ip;
	var txt_name;

	var validate;

	btn_check = $("[name='check_data']")
	btn_send  = $("[name='send_data']")

	txt_ip    = $("[name='txt_ip']")
	txt_name    = $("[name='txt_name']")


	btn_send.attr("disabled");

	//Funciones.
	btn_check.click(function() {
		validate = validate_ip( txt_ip.val() );
		if(validate == true){
			message("¡IP validada!", "success");
			btn_send.removeAttr('disabled');
		}else{
			message("La ip es invalida :(", "error");
		}
	});

	btn_send.click(function() {
		if(txt_ip.val() == ''){
			message("Ingresa una IP antes de continuar", "warning");
		}else if(txt_name.val() == ''){
			message("Ingresa un nombre antes de continuar", "warning");
		}else{
			save_data(txt_ip.val(), txt_name.val());
		}
	});

	//Verificar ip.
	function save_data(name, ip){
		$.ajax({
			url: 'app/pc_ip_controller.php',
			type: 'POST',
			dataType: 'HTML',
			data: {name: name, ip: ip},
			success:function(data){
				if(data == "0"){
					message("Se ha guardado exitosamente.", "success");
					txt_ip.val('');
					txt_name.val('');
					get_data();
				}else{
					message("Error al guardar :(", "error");
				}
			}
		})
		
	}


	function validate_ip(ip){

		var ipformat = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
		if(txt_ip.val().match(ipformat)){
			return true;
		}else{
			return false;
		}

	}

	function message(msg, typ){
		$.notify(msg, {className: typ, showDuration: 1000, position: "right-top"});
	}
	var data, spacer;

	

	function get_data(){
		$(".data-table").html("");
		$.ajax({
	    url: "app/pc_ip_json_controller.php",
	    dataType: "JSON",
	    success:function(raw_data){
	        for(var i=0; i<raw_data.length;i++){

	        	data   = '<div class="data-container">';
	        		//Primero: id
		        	data  += '<div class="col-md-4">';
		        	data  += '<p class="text-center">' + raw_data[i].ip + '</p>';
		        	data  += '</div>';

		        	//Segundo: ip
		        	data  += '<div class="col-md-4">';
		        	data  += '<p class="text-center">' + raw_data[i].pc_name + '</h3>';
		        	data  += '</div>';

		        	//Tercero name
		        	data  += '<div class="col-md-4">';
		        	data  += '<p class="text-center">' + raw_data[i].pc_date + '</p>';
		        	data  += '</div>';

	        	data  += '</div>';

	            $('.data-table').append(data);
	        }
		}
		});

	}
});

