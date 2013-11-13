$(document).ready(function() {
	var $validator = $("#newalum").validate({
		rules: {
			name: {
		    	required: true,
		      	minlength: 3
		    },
		    email: {
		      	email: true
		    }
		},
		messages: {
			name: {
				required: "Debe ingresar el nombre",
				minlength: "Debe ingresar al menos 3 caracteres"
			},
			email: {
				email: "Debe ingresar una direccion de email valida"
			}
		},
		errorClass: "text-danger",
	});
	
	$('.form-control').change(function(){
		nameval = $('#name').val();
		birthval = $('#day').val() + '/' + $('#month').val() + '/' + $('#year').val();;
		tel1val = $('#tel1').val();
		tel2val = $('#tel2').val();
		tel3val = $('#tel3').val();
		$('#finishname').text(nameval);
		$('#finishbirth').text(birthval);
		$('#finishtel1').text(tel1val);
		$('#finishtel2').text(tel2val);
		$('#finishtel3').text(tel3val);
	});
 
  	$('#rootwizard').bootstrapWizard({
  		'tabClass': 'nav nav-pills',
  		'onNext': function(tab, navigation, index) {
  			var $valid = $("#newalum").valid();
  			if(!$valid) {
  				$validator.focusInvalid();
  				return false;
  			}
  		},
  		'onTabChange': function(tab, navigation, index) {
  			nameval = $('#name').valid();
			if(nameval == true){ 
				//&& ageval == true){
				$('#btnsave').removeClass('hidden');
			}
			else{
				$('#btnsave').addClass('hidden');
			}
  		}
  	});
});