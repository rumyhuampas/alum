<?php include Kohana::find_file('views', '_header'); ?>

	<div class="box-holder row">
		<!-- Title -->
		<h1>Alumnitos</h1><hr>
		<!-- Login Form -->
		
		<?php include Kohana::find_file('views', '_msgrow'); ?>
		
		<?php
		echo Form::open('login/login', array('method' => 'POST', 'class' => 'form-horizontal', 'id' => 'login', 'role' => 'form'));
			echo '<div class="form-group">';
				echo Form::label('username', 'Nombre', array('class' => 'col-lg-4 control-label'));
				echo '<div class="col-lg-8">';
					echo '<div class="input-group">';
						echo '<span class="input-group-addon"><i class="icon-user"></i></span>';
						echo Form::input('username', '', array('type' => 'text', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Nombre'));
					echo '</div>';
				echo '</div>';
			echo '</div>';
			echo '<div class="form-group">';
				echo Form::label('password', 'Password', array('class' => 'col-lg-4 control-label'));
				echo '<div class="col-lg-8">';
					echo '<div class="input-group">';
						echo '<span class="input-group-addon"><i class="icon-lock"></i></span>';
						echo Form::input('password', '', array('type' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password'));
					echo '</div>';
				echo '</div>';
			echo '</div>';
			echo '<div class="form-group">';
				echo '<div class="col-lg-offset-2 col-lg-10">';
					echo Form::button('btnlogin', 'Ingresar', array('class' => 'btn btn-default', 'id' => 'btnlogin'));
				echo '</div>';
			echo '</div>';
		echo Form::close();
		?>
	</div>

<?php include Kohana::find_file('views', '_footer'); ?>