<?php 
	$_currentuserid = Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID);
	if($_currentuserid == ''){
		HTTP::redirect(URL::base()."../login/");	
	}
	$_currentusername = Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERNAME);
	if($_currentusername == ''){
		$_currentusername = Helpers_Session::get(Helpers_Consts::CONFIG_DEFAULTUSERNAME);
	}
	$_currentuseravatar = Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERAVATAR);
	if($_currentuseravatar == ''){
		$_currentuseravatar = Helpers_Session::get(Helpers_Consts::CONFIG_DEFAULTUSERAVATAR);
	}
?>

<div class="navbar">
	<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar"><i class="icon-list"></i></a>
	<a class="navbar-brand" href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>Alumnitos</a>

	<!-- Top right user menu -->
	<ul class="nav navbar-nav user-menu pull-right">
		<!-- First nav user item --
		<li class="dropdown hidden-xs">
			<a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-alt"></i></a>
			<ul class="dropdown-menu right inbox">
				<li class="dropdown-menu-title">
					INBOX <span>(25)</span>
				</li>
				<li>
					<img src=<?php echo URL::base()."/assets/images/theme/avatarTwo.png" ?> alt="" class="avatar">
					<div class="message">
						<span class="username">Anusha</span> 
						<span class="mini-details">(6) <i class="icon-paper-clip"></i></span>
						<span class="time pull-right"> 06:58 PM</span>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
					</div>
				</li>
				<li>
					<img src=<?php echo URL::base()."/assets/images/theme/avatarFive.png" ?> alt="" class="avatar">
					<div class="message">
						<span class="username">Veeru</span> 
						<span class="mini-details">(2) <i class="icon-paper-clip"></i></span>
						<span class="time pull-right"> 09:58 AM</span>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
					</div>
				</li>
				<li>
					<img src=<?php echo URL::base()."/assets/images/theme/avatarSix.png" ?> alt="" class="avatar">
					<div class="message">
						<span class="username">Nag</span> 
						<span class="mini-details">(6) <i class="icon-paper-clip"></i></span>
						<span class="time pull-right">Yesterday</span>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
					</div>
				</li>
				<li>
					<img src=<?php echo URL::base()."/assets/images/theme/avatarSeven.png" ?> alt="" class="avatar">
					<div class="message">
						<span class="username">Harish</span> 
						<span class="mini-details"> <i class="icon-picture"></i></span>
						<span class="time pull-right">14/12/2013</span>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
					</div>
				</li>
				<li class="dropdown-menu-footer">
					<a href="#">View All Messages</a>
				</li>
			</ul>
		</li><!-- /dropdown -->

		<!-- Second nav user item --
		<li class="dropdown hidden-xs">
			<a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i></a>
			<ul class="dropdown-menu right notifications">
				<li class="dropdown-menu-title">
					Notifications
				</li>
				<li>
					<i class="icon-cog avatar text-success"></i>
					<div class="message">
						<span class="username text-success">New settings activated</span> 
						<span class="time pull-right"> 06:58 PM</span>
					</div>
				</li>
				<li>
					<i class="icon-shopping-cart avatar text-danger"></i>
					<div class="message">
						<span class="username text-danger">You have 2 returns</span> 
						<span class="time pull-right"> 04:29 PM</span>
					</div>
				</li>
				<li>
					<i class="icon-user avatar text-success"></i>
					<div class="message">
						<span class="username text-success">New User registered</span> 
						<span class="time pull-right"> Yesterday</span>
					</div>
				</li>
				<li>
					<i class="icon-comment avatar text-info"></i>
					<div class="message">
						<span class="username text-info">New Comment received</span> 
						<span class="time pull-right"> Yesterday</span>
					</div>
				</li>
				<li>
					<i class="icon-cog avatar text-warning"></i>
					<div class="message">
						<span class="username text-warning">User deleted</span> 
						<span class="time pull-right"> 2 days ago</span>
					</div>
				</li>
				<li>
					<i class="icon-dollar avatar"></i>
					<div class="message">
						<span class="username">Earned 200 points</span> 
						<span class="time pull-right">3 days ago</span>
					</div>
				</li>
				<li>
					<i class="icon-hdd avatar text-danger"></i>
					<div class="message">
						<span class="username text-danger">Memory size exceeded </span> 
						<span class="time pull-right"> 1 week ago</span>
					</div>
				</li>

				<li class="dropdown-menu-footer">
					<a href="#">View All Notifications</a>
				</li>
			</ul>
		</li><!-- / dropdown -->

		<li class="dropdown user-name">
			<a class="dropdown-toggle" data-toggle="dropdown">
				<img src=<?php echo URL::base().$_currentuseravatar ?> class="user-avatar" alt="" /><?php echo $_currentusername ?>
			</a>
			<ul class="dropdown-menu right inbox user">
				<li class="user-avatar">
					<img src=<?php echo URL::base().$_currentuseravatar ?> class="user-avatar" alt="" />
					<?php echo $_currentusername ?>
				</li>
				<li>
					<i class="icon-user avatar"></i>
					<div class="message">
						<span class="username">
							<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'profile', 'action' => 'showuser', 'id' => '1')); ?>>Perfil</a>
						</span> 
					</div>
				</li>
				<li>
					<i class="icon-cogs avatar"></i>
					<div class="message">
						<span class="username">
							<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'config')); ?>>Configuracion</a>
						</span> 
					</div>
				</li>
				<li><a href=<?php echo URL::base()."/login/exit" ?>>Salir</a></li>
			</ul>
		</li><!-- / dropdown -->				
	</ul><!-- / Top right user menu -->

</div><!-- / Navbar-->