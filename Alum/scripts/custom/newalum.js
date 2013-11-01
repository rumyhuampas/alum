$(document).ready(function() {
	var $validator = $("#newalum").validate({
		rules: {
			name: {
		    	required: true,
		      	minlength: 3
		    },
		    age: {
		      	required: true,
		      	number: true,
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
			age: {
				required: "Debe ingresar la edad",
				number: "Debe ingresar solo numeros"
			},
			email: {
				email: "Debe ingresar una direccion de email valida"
			}
		},
		errorClass: "text-danger",
	});
	
	$('.form-control').change(function(){
		nameval = $('#name').val();
		ageval = $('#age').val();
		obsval = $('#obs').val();
		tel1val = $('#tel1').val();
		tel2val = $('#tel2').val();
		tel3val = $('#tel3').val();
		$('#finishname').text(nameval);
		$('#finishage').text(ageval);
		$('#finishobs').text(obsval);
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
			ageval = $('#age').valid();
			if(nameval == true && ageval == true){
				$('#btnsave').removeClass('hidden');
			}
			else{
				$('#btnsave').addClass('hidden');
			}
  		}
  	});
});