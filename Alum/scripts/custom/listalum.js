$(document).ready(function() {
	$('[name=showalum]').click(function(){
		$(this).closest("form").submit();
	});
	
	$('[name=editalum]').click(function(){
		$(this).closest("form").submit();
	});
	
	$('[name=paymentalum]').click(function(){
		$(this).closest("form").submit();
	});
	
	$('[name=deletealum]').click(function(){
		var thisform = jQuery(this).closest('form');
		
		$('#dlgtitle').text('Eliminar alumno');
		$('#dlgtext').text('¿Esta seguro?');
		$('#dlgyesno').modal('show');
		
		$('#dlgbtnyes').click(function(){
			thisform.submit();
		});
	});
	
	$('[name=reactivatealum]').click(function(){
		var thisform = jQuery(this).closest('form');
		
		$('#dlgtitle').text('Reactivar alumno');
		$('#dlgtext').text('¿Esta seguro?');
		$('#dlgyesno').modal('show');
		
		$('#dlgbtnyes').click(function(){
			thisform.submit();
		});
	});
	
	$('#chbshowall').click(function(){
		var table = $('#studenttable');										   
		var trs = table.find('tbody tr[active="N"]');										 
		if($(this).is(':checked')) {
			trs.each(function(){ 
				$(this).removeClass('hidden');
			});
		
		} else {
			trs.each(function(){ 
				$(this).addClass('hidden');
			});
		}
	});
	
	var table = $('#studenttable');										   
	var trs = table.find('tbody tr[active="N"]');
	trs.each(function(){ 
		$(this).addClass('hidden');
	});
});