<div class="sidebar">
	<div class="wrapper">

		<!-- Replace the src of the image with your logo -->
		<a href="index-2.html" class="logo"><img src=<?php echo URL::base()."/assets/images/logo2.png" ?> alt="Archon Admin" /></a>
		<ul class="nav  nav-list">

			<!-- sidebar input search box -->
			<li class="nav-search">
				<div class="form-group">
					<input type="text" class="form-control nav-search" placeholder="Search through site" />
					<span class="input-icon fui-search"></span>
				</div>
			</li>

			<!-- Sidebar header @add class nav-header for sidebar header -->
			<li class="nav-header">Overview</li>
			<li class="active"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
				<i class="icon-dashboard"></i>Dashboard </a></li>
			<li>
				<a class="dropdown" href="#"><i class="icon-tint"></i> UI Features <span class="label">2</span></a>
				<ul>
					<li><a href="buttons.html"><i class="icon-bullhorn"></i> Buttons &amp; Notifications</a></li>
					<li><a href="slidersnprogress.html"><i class="icon-minus"></i>Sliders &amp; Progress </a></li>
				</ul>	
			</li>
			<li><a href="widgets.html"><i class="icon-group"></i>Widgets</a></li>

			<!-- Sidebar header @add class nav-header for sidebar header -->
			<li class="nav-header">Alumnos</li>
			<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'calendar', 'action' => 'index')); ?>>
				<i class="icon-calendar"></i>Calendario</a></li>
			<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmalum', 'action' => 'index')); ?>>
				<i class="icon-picture"></i>Nuevo alumno</a></li>
			<li><a href="login-2.html"><i class="icon-signin"></i>Login</a></li>
			<li> <!-- Example for second level menu -->
				<a class="dropdown" href="#"><i class="icon-user"></i> Profile <span class="label">2</span></a>
				<ul>
					<li><a href="profile.html"><i class="icon-usre"></i> Model One</a></li>
					<li><a href="profileTwo.html"><i class="icon-usre"></i> Model Two</a></li>
				</ul>	
			</li>
			<li> <!-- Example for second level menu -->
				<a class="dropdown" href="#"><i class="icon-folder-close-alt"></i> Dropdown menu <span class="label">3</span></a>
				<ul>
					<li><a href="#"><i class="icon-hdd"></i> Submenu item</a></li>
					<li><a href="#"><i class="icon-coffee"></i>Submenu item</a></li>
					<li><a href="#"><i class="icon-crop"></i> Submenu item</a></li>
				</ul>	
			</li>

			<!-- Sidebar header @add class nav-header for sidebar header -->
			<li class="nav-header">Components</li>
			<li><a href="tables.html"><i class="icon-table"></i>Tables</a></li>
			<li> <!-- Example for second level menu -->
				<a class="dropdown" href="#"><i class="icon-folder-close-alt"></i> Charts <span class="label">3</span></a>
				<ul>
					<li><a href="nvd.html"><i class="icon-hdd"></i> NVD</a></li>
					<li><a href="flot.html"><i class="icon-coffee"></i>Flot</a></li>
					<li><a href="knobs.html"><i class="icon-coffee"></i>Knobs</a></li>
				</ul>	
			</li>
			<li><a href="typography.html"><i class="icon-text-width"></i>Typography</a></li>
			<li>
				<a class="dropdown" href="forms.html"><i class="icon-list-alt"></i>Forms  <span class="label">4</span></a>
				<ul>
					<li><a href="form-elements.html"><i class="icon-indent-right"></i> Form Elements</a></li>
					<li><a href="forms.html"><i class="icon-indent-left"></i>Forms</a></li>
					<li><a href="form-wizard.html"><i class="icon-coffee"></i>Form wizard</a></li>
					<li><a href="file-uploads.html"><i class="icon-indent-right"></i> File Upload</a></li>
				</ul>	
			</li>
			<li><a href="icons.html"><i class="icon-truck"></i>Icons</a></li>
		</ul>

	</div><!-- /Wrapper -->
</div><!-- /Sidebar -->