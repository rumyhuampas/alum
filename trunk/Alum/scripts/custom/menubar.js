$(document).ready(function() {
	$.ajax({
        type: "POST",
        url: "/alum/menubar/getStudents/",
        dataType: "json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var datafromServer = data;
            $("#studentsearch").autocomplete({
                source: datafromServer
            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           alert(textStatus);
        }
    });
    
    $("#studentsearch").keypress(function(event) {
	    if (event.which == 13) {
	        event.preventDefault();
	        jQuery.post( 
				'/alum/abmalum/show/',
			    {name: $(this).val()},
			    function( data ){
			    	if(data != 'ERROR'){
			     		window.location.href = data;
			     	}
			     	else{
			     		$('#studentsearchmsg').append(
			     			"<div class='alert-dashboard fade in'>Alumno no encontrado</div></div>"
			     		);
			     		setTimeout(function() { $(".alert-dashboard").alert('close')  }, 10000);
			     		$("#studentsearch").autocomplete('close');
			     	}
		    	}
		    );
	    }
	});
});  