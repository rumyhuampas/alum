$(document).ready(function() {
	$('.radiosubject').change(function(){
		radioid = $(this).attr("radioid");
		input = $(this).find("[radioid="+ radioid + "]");
		form = input.closest('form');
        hid = form.find('[selectid=' + radioid + ']');
		if($(this).hasClass("checked")){
	        hid.removeAttr("disabled");
		}
		else{
			hid.attr("disabled", "");
		}  
	});
	
	$('[name=deletepayment]').click(function(){
		var thisform = jQuery(this).closest('form');
		
		$('#dlgtitle').text('Eliminar plan de pago');
		$('#dlgtext').text('¿Esta seguro?');
		$('#dlgyesno').modal('show');
		
		$('#dlgbtnyes').click(function(){
			thisform.submit();
		});
	});
});