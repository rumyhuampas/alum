<div class="sidebar">
	<div class="wrapper">

		<!-- Replace the src of the image with your logo -->
		<a href="index-2.html" class="logo"><img src=<?php echo URL::base()."/assets/images/logo2.png" ?> alt="Archon Admin" /></a>
		<ul class="nav  nav-list">

			<!-- sidebar input search box -->
			<li class="nav-search">
				<div class="form-group">
					<input type="text" class="form-control nav-search" placeholder="Buscar alumno" />
					<span class="input-icon fui-search"></span>
				</div>
			</li>

			<!-- Sidebar header @add class nav-header for sidebar header -->
			<li class="nav-header">General</li>
			<li class="active"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
				<i class="icon-dashboard"></i>Dashboard </a></li>
			<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'calendar', 'action' => 'index')); ?>>
				<i class="icon-calendar"></i>Calendario</a></li>

			<!-- Sidebar header @add class nav-header for sidebar header -->
			<li class="nav-header">Alumnos</li>
			<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmalum', 'action' => 'index')); ?>>
				<i class="icon-group"></i>Lista de alumnos</a></li>
			<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmalum', 'action' => 'new')); ?>>
				<i class="icon-list-alt"></i>Nuevo alumno</a></li>
			
		</ul>

	</div><!-- /Wrapper -->
</div><!-- /Sidebar -->