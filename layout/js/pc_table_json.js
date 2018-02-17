$(function(){
	var data, spacer;
	$.ajax({
	    url: "app/pc_ip_json_controller.php",
	    dataType: "JSON",
	    success:function(raw_data){
	        for(var i=0; i<raw_data.length;i++){

	        	data   = raw_data[i].ip;
	        	spacer = "<br>";

	            $('.data-table').append(data );
	        }
		}
	});

});