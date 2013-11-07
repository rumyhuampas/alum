<?php include Kohana::find_file('views', '_header'); ?>

	<div class="frame">
		
		<?php include Kohana::find_file('views', '_menubar'); ?>
	
		<!-- Main Content starts here -->
		<div class="content">
			<?php include Kohana::find_file('views', '_headerbar'); ?>
	
			<div id="main-content">
				<?php include Kohana::find_file('views', '_navrow'); ?>

				<?php include Kohana::find_file('views', '_msgrow'); ?>
				
				<!-- Form Horizontal -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">
									Editar alumno
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<?php echo Form::open('abmalum/edit', array('method' => 'POST', 'id' => 'editalum', 'class' => 'form-vertical'));?>
								<!--<form class="form-vertical" role="form">-->
									<?php echo Form::hidden('alumid', $_alum->Id) ?>
									<div class="form-group">
										<?php echo Form::label('name', 'Nombre', array('class' => 'control-label')); ?>
										<?php echo Form::input('name', $_alum->Name, array('type' => 'text', 'id' => 'name', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('birth', 'Fecha de nacimiento', array('class' => 'control-label')); ?>
										<div class="col-lg-12">
											<div class="col-lg-2">
											<?php echo Form::select('day', Helpers_Combos::getBirthDays(), date("d", strtotime($_alum->Birth)), array('id' => 'day', 'class' => 'form-control')); ?>
											</div>
											<div class="col-lg-2">
											<?php echo Form::select('month', Helpers_Combos::getBirthMonths(), date("m", strtotime($_alum->Birth)), array('id' => 'month', 'class' => 'form-control')); ?>
											</div>
											<div class="col-lg-2">
											<?php echo Form::select('year', Helpers_Combos::getBirthYears(), date("Y", strtotime($_alum->Birth)), array('id' => 'year', 'class' => 'form-control')); ?>
											</div>
										</div>
									</div>
									<br />
									<div class="form-group">
										<?php echo Form::label('obs', 'Observaciones', array('class' => 'control-label')); ?>
										<textarea name="obs" id="obs" class="form-control" rows="5" cols="80"><?php echo $_alum->Obs ?></textarea>
									</div>
									<div class="form-group">
										<?php echo Form::label('father', 'Nombre del padre', array('class' => 'control-label')); ?>
										<?php echo Form::input('father', $_alum->Father, array('type' => 'text', 'id' => 'father', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('mother', 'Nombre de la madre', array('class' => 'control-label')); ?>
										<?php echo Form::input('mother', $_alum->Mother, array('type' => 'text', 'id' => 'mother', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('contact', 'Persona de contacto', array('class' => 'control-label')); ?>
										<?php echo Form::input('contacto', $_alum->Contact, array('type' => 'text', 'id' => 'contact', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('tel1', 'Telefono 1', array('class' => 'control-label')); ?>
										<?php echo Form::input('tel', $_alum->Phone1, array('type' => 'text', 'id' => 'tel1', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('tel2', 'Telefono 2', array('class' => 'control-label')); ?>
										<?php echo Form::input('cel', $_alum->Phone2, array('type' => 'text', 'id' => 'tel2', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('tel3', 'Telefono 3', array('class' => 'control-label')); ?>
										<?php echo Form::input('tel3', $_alum->Phone3, array('type' => 'text', 'id' => 'tel3', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('address', 'Direccion', array('class' => 'control-label')); ?>
										<?php echo Form::input('address', $_alum->Address, array('type' => 'text', 'id' => 'address', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('city', 'Ciudad', array('class' => 'control-label')); ?>
										<?php echo Form::input('city', $_alum->City, array('type' => 'text', 'id' => 'city', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('prov', 'Provincia', array('class' => 'control-label')); ?>
										<?php echo Form::input('prov', $_alum->State, array('type' => 'text', 'id' => 'prov', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('email', 'Email', array('class' => 'control-label')); ?>
										<?php echo Form::input('email', $_alum->Email, array('type' => 'email', 'id' => 'email', 'class' => 'form-control')); ?>
									</div>
									<button class="btn btn-primary" type="submit">Guardar cambios</button>
									<a class="btn btn-default" href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmalum', 'action' => 'index')); ?>>Cancelar</A>
								
								<?php echo Form::close(); ?>
								<!--</form>-->

							</div>
						</div>
					</div>
				</div>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>