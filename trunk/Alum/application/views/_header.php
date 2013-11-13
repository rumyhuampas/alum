<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<?php
		$title = Helpers_Session::get(Helpers_Consts::CONFIG_APPTITLE);
		if($title == ''){
			$title = Helpers_Configs::get(Helpers_Consts::CONFIG_APPTITLE)->Value;
		}
		echo "<title>".$title."</title>";		
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<!-- Loading Bootstrap -->
		<link href=<?php echo URL::base()."/assets/bootstrap/css/bootstrap.css" ?> rel="stylesheet" type="text/css" />
	
		<!-- Loading Stylesheets -->    
		<link href=<?php echo URL::base()."/assets/css/archon.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/responsive.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/timeline.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/prettify.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/fullcalendar.css" ?> rel="stylesheet" type="text/css" />
		<?php
		if(Request::current()->controller() == 'Login'){
		?>
			<link href=<?php echo URL::base()."/assets/css/login.css" ?> rel="stylesheet" type="text/css" />
		<?php
		}
		?>
	
		<!-- Loading Custom Stylesheets -->
		<link href=<?php echo URL::base()."/assets/css/custom.css" ?> rel="stylesheet" type="text/css" />    
	
		<!-- Loading Custom Stylesheets     
		<link href="css/custom.css" rel="stylesheet">-->
	
		<link rel="shortcut icon" href=<?php echo URL::base()."/assets/images/favicon.ico" ?> >
	
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>