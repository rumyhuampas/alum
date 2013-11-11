$(document).ready(function() {
	var $validator = $("#login").validate({
		rules: {
			username: {
		    	required: true,
		      	minlength: 3
		   	},
		   	password: {
		    	required: true,
		      	minlength: 3
		   	}
		},
		messages: {
			username: {
				required: "Campo requerido",
				minlength: "Debe ingresar al menos 3 caracteres"
			},
			password: {
				required: "Campo requerido",
				minlength: "Debe ingresar al menos 3 caracteres"
			}
		},
		errorClass: "text-danger",
	});
});