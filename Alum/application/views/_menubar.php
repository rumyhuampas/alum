<div class="sidebar">
	<div class="wrapper">

		<!-- Replace the src of the image with your logo -->
		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?> class="logo">
			<img src=<?php echo URL::base()."/assets/images/logo2.png" ?> alt="Archon Admin" />
		</a>
		<ul class="nav  nav-list">

			<!-- sidebar input search box -->
			<li class="nav-search">
				<div class="form-group">
					<input type="text" id="studentsearch" class="form-control nav-search" placeholder="Buscar alumno" />
					<span class="input-icon fui-search"></span>
				</div>
			</li>
			<li class="nav-header" id="studentsearchmsg"></li>

			<li class="nav-header">General</li>
			<?php
			if(Request::current()->controller() == 'Home'){ echo "<li class='active'>";	} else{ echo "<li>"; }
			?>
				<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
					<i class="icon-dashboard"></i>Dashboard </a>
			</li>
			<?php
			if(Request::current()->controller() == 'Calendar'){ echo "<li class='active'>";	} else{ echo "<li>"; }
			?>
				<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'calendar', 'action' => 'index')); ?>>
					<i class="icon-calendar"></i>Calendario</a>
			</li>

			
			<li class="nav-header">Alumnos</li>
			<?php
			if(Request::current()->controller() == 'Abmalum' && Request::current()->action() == 'index'){ echo "<li class='active'>";	} 
			else{ echo "<li>"; }
			?>
				<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmalum', 'action' => 'index')); ?>>
					<i class="icon-group"></i>Lista de alumnos</a>
			</li>
			<?php
			if(Request::current()->controller() == 'Abmalum' && Request::current()->action() == 'new'){ echo "<li class='active'>";	} 
			else{ echo "<li>"; }
			?>
				<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmalum', 'action' => 'new')); ?>>
					<i class="icon-list-alt"></i>Nuevo alumno</a>
			</li>
			
		</ul>

	</div><!-- /Wrapper -->
</div><!-- /Sidebar -->