$(document).ready(function() {
	var $validator = $("#addconfig").validate({
		rules: {
			key: {
		    	required: true,
		      	minlength: 3
		    }
		},
		messages: {
			key: {
				required: "Debe ingresar la clave de la configuracion",
				minlength: "Debe ingresar al menos 3 caracteres"
			}
		},
		errorClass: "text-danger",
	});
	
	$('[name=deleteconfig]').click(function(){
		var key = $(this).siblings('input[name=configkey]').val();
		
		$('#dlgtitle').text('Eliminar configuracion');
		$('#dlgtext').text('¿Esta seguro?');
		$('#dlgyesno').modal('show');
		
		$('#dlgbtnyes').click(function(){
			jQuery.post( 
				'/alum/config/delete/',
			    {configkey: key},
			    function( data ){
			    	if(data != ''){
			     		window.location.href = data;
			     	}
		    	}
		    );
		});
	});
});