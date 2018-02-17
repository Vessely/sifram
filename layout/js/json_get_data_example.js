$(function(){
	var data, spacer;
	$.ajax({
	    url: "app/json_controller_example.php",
	    dataType: "JSON",
	    success:function(raw_data){
	        for(var i=0; i<raw_data.length;i++){

	        	data   = "(" + raw_data[i].name + ")" + "  (" + raw_data[i].email + ")" + "  (" + raw_data[i].address + ")";
	        	spacer = "<br>";

	            $('.item').append(data + spacer);
	        }
		}
	});

});