$(document).ready(function() {
	$('[name=editalum]').click(function(){
		$(this).closest("form").submit();
	});
});