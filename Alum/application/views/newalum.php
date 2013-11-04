<?php include Kohana::find_file('views', '_header'); ?>

	<div class="frame">
		
		<?php include Kohana::find_file('views', '_menubar'); ?>
	
		<!-- Main Content starts here -->
		<div class="content">
			<?php include Kohana::find_file('views', '_headerbar'); ?>
	
			<div id="main-content">
				<?php include Kohana::find_file('views', '_navrow'); ?>

				<?php include Kohana::find_file('views', '_msgrow'); ?>
				
				<!-- Form Wizard -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-wizard">
							<div class="panel-body">
								
								<?php echo Form::open('abmalum/new', array('method' => 'POST', 'id' => 'newalum', 'class' => 'form-horizontal'));?>
								<!--<form id="commentForm" method="get"  class="form-horizontal">-->
									<div id="rootwizard" class="wizard">
										<ul>
											<li><a href="#tab1" data-toggle="tab"><span class="badge">1</span> Alumno</a></li>
											<li><a href="#tab2" data-toggle="tab"><span class="badge">2</span> Info de contacto</a></li>
											<li><a href="#tab3" data-toggle="tab"><span class="badge">3</span> Info adicional</a></li>
											<li><a href="#tab4" data-toggle="tab"><span class="badge">4</span> Finalizar</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane" id="tab1">
												<div class="form-group">
													<?php echo Form::label('name', 'Nombre', array('class' => 'col-lg-1 control-label')); ?>
													<!--<label for="email" class="col-lg-1 control-label">Email</label>-->
													<div class="col-lg-11">
														<?php echo Form::input('name', '', array('type' => 'text', 'id' => 'name', 'class' => 'form-control')); ?>
														<!--<input type="email" class="form-control" name="email" id="email" placeholder="Type something here">-->
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('birth', 'Fecha de nacimiento', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-1">
														<?php echo Form::select('day', Helpers_Combos::getBirthDays(),'', array('id' => 'day', 'class' => 'form-control')); ?>
													</div>
													<div class="col-lg-1">
														<?php echo Form::select('month', Helpers_Combos::getBirthMonths(), '', array('id' => 'month', 'class' => 'form-control')); ?>
													</div>
													<div class="col-lg-2">
														<?php echo Form::select('year', Helpers_Combos::getBirthYears(), '', array('id' => 'year', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('obs', 'Observaciones', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<textarea name="obs" id="obs" class="form-control" rows="5" cols="80"></textarea>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<div class="form-group">
													<?php echo Form::label('father', 'Nombre del padre', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('father', '', array('type' => 'text', 'id' => 'father', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('mother', 'Nombre de la madre', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('mother', '', array('type' => 'text', 'id' => 'mother', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('contact', 'Persona de contacto', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('contacto', '', array('type' => 'text', 'id' => 'contact', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('tel1', 'Telefono 1', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('tel', '', array('type' => 'text', 'id' => 'tel1', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('tel2', 'Telefono 2', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('cel', '', array('type' => 'text', 'id' => 'tel2', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('tel3', 'Telefono 3', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('tel3', '', array('type' => 'text', 'id' => 'tel3', 'class' => 'form-control')); ?>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<div class="form-group">
													<?php echo Form::label('address', 'Direccion', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('address', '', array('type' => 'text', 'id' => 'address', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('city', 'Ciudad', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('city', '', array('type' => 'text', 'id' => 'city', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('prov', 'Provincia', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('prov', '', array('type' => 'text', 'id' => 'prov', 'class' => 'form-control')); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo Form::label('email', 'Email', array('class' => 'col-lg-1 control-label')); ?>
													<div class="col-lg-11">
														<?php echo Form::input('email', '', array('type' => 'email', 'id' => 'email', 'class' => 'form-control')); ?>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab4">
												<dl class="dl-horizontal">
													<dt>Nombre del alumno</dt>
													<dd id="finishname"></dd>
													<dt>Fecha de nacimiento</dt>
													<dd id="finishbirth"></dd>
													<dt>Observaciones</dt>
													<dd id="finishobs"></dd>
													<dt>Telefono 1</dt>
													<dd id="finishtel1"></dd>
													<dt>Telefono 2</dt>
													<dd id="finishtel2"></dd>
													<dt>Telefono 3</dt>
													<dd id="finishtel3"></dd>
												</dl>
												<div class="pull-right">
													<?php echo Form::button('btnsave', 'Guardar', array('class' => 'btn btn-primary', 'id' => 'btnsave')); ?>
												</div>			
												<br />
												<br />												
											</div>
											<ul class="pager wizard">
												<li class="previous first hidden"><a href="#">First</a></li>
												<li class="previous"><a href="#">Anterior</a></li>
												<li class="next last hidden" ><a href="#">Last</a></li>
												<li class="next"><a href="#">Siguiente</a></li>
											</ul>
										</div>	
									</div>
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