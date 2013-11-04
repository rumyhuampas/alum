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
						<div class="panel panel-archon">
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
								<form class="form-vertical" role="form">
									<div class="form-group">
										<?php echo Form::label('name', 'Nombre', array('class' => 'control-label')); ?>
										<?php echo Form::input('name', $_alum->Name, array('type' => 'text', 'id' => 'name', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('birth', 'Fecha de nacimiento', array('class' => 'control-label')); ?>
										<div class="col-lg-12">
											<div class="col-lg-2">
											<?php echo Form::select('day', Helpers_Combos::getBirthDays(),'', array('id' => 'day', 'class' => 'form-control')); ?>
											</div>
											<div class="col-lg-2">
											<?php echo Form::select('month', Helpers_Combos::getBirthMonths(), '', array('id' => 'month', 'class' => 'form-control')); ?>
											</div>
											<div class="col-lg-2">
											<?php echo Form::select('year', Helpers_Combos::getBirthYears(), '', array('id' => 'year', 'class' => 'form-control')); ?>
											</div>
										</div>
									</div>
									<br />
									<div class="form-group">
										<?php echo Form::label('obs', 'Observaciones', array('class' => 'control-label')); ?>
										<textarea name="obs" id="obs" class="form-control" rows="5" cols="80"></textarea>
									</div>
									<div class="form-group">
										<?php echo Form::label('father', 'Nombre del padre', array('class' => 'control-label')); ?>
										<?php echo Form::input('father', '', array('type' => 'text', 'id' => 'father', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('mother', 'Nombre de la madre', array('class' => 'control-label')); ?>
										<?php echo Form::input('mother', '', array('type' => 'text', 'id' => 'mother', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('contact', 'Persona de contacto', array('class' => 'control-label')); ?>
										<?php echo Form::input('contacto', '', array('type' => 'text', 'id' => 'contact', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('tel1', 'Telefono 1', array('class' => 'control-label')); ?>
										<?php echo Form::input('tel', '', array('type' => 'text', 'id' => 'tel1', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('tel2', 'Telefono 2', array('class' => 'control-label')); ?>
										<?php echo Form::input('cel', '', array('type' => 'text', 'id' => 'tel2', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('tel3', 'Telefono 3', array('class' => 'control-label')); ?>
										<?php echo Form::input('tel3', '', array('type' => 'text', 'id' => 'tel3', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('address', 'Direccion', array('class' => 'control-label')); ?>
										<?php echo Form::input('address', '', array('type' => 'text', 'id' => 'address', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('city', 'Ciudad', array('class' => 'control-label')); ?>
										<?php echo Form::input('city', '', array('type' => 'text', 'id' => 'city', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('prov', 'Provincia', array('class' => 'control-label')); ?>
										<?php echo Form::input('prov', '', array('type' => 'text', 'id' => 'prov', 'class' => 'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('email', 'Email', array('class' => 'control-label')); ?>
										<?php echo Form::input('email', '', array('type' => 'email', 'id' => 'email', 'class' => 'form-control')); ?>
									</div>
									<button class="btn btn-primary" type="submit">Guardar cambios</button>
									<button class="btn btn-default" type="submit">Cancelar</button>
								</form>

							</div>
						</div>
					</div>
				</div>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>