$(document).ready(function() {
	$('[name=editalum]').click(function(){
		$(this).closest("form").submit();
	});
	
	$('[name=deletealum]').click(function(){
		var thisform = jQuery(this).closest('form');
		
		$('#dlgtitle').text('Eliminar alumno');
		$('#dlgtext').text('Esta seguro?');
		$('#dlgyesno').modal('show');
		
		$('#dlgbtnyes').click(function(){
			thisform.submit();
		});
	});
});