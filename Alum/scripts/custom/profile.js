$(document).ready(function() {
	var $validator = $("#newpost").validate({
		rules: {
			post: {
		    	required: true,
		      	minlength: 3
		    }
		},
		messages: {
			post: {
				required: "Debe escribir algo",
				minlength: "Debe ingresar al menos 3 caracteres"
			}
		},
		errorClass: "text-danger",
	});
	
	$('[name=edituser]').click(function(){
		$(this).closest("form").submit();
	});
	
	$('[name=deletepost]').click(function(){
		var thisform = jQuery(this).closest('form');
		
		$('#dlgtitle').text('Eliminar post');
		$('#dlgtext').text('¿Esta seguro?');
		$('#dlgyesno').modal('show');
		
		$('#dlgbtnyes').click(function(){
			thisform.submit();
		});
	});
});