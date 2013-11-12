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
									Configuracion
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							
							<div class="panel-body">
								<?php 
								echo Form::open('config/add', array('method' => 'POST', 'id' => 'addconfig', 'class' => 'form-vertical'));
									echo "<div class='form-group col-lg-5'>";
										echo Form::label('key', 'Clave', array('class' => 'sr-only'));
										echo Form::input('key', '', array('type' => 'text', 'id' => 'key', 'class' => 'form-control', 'placeholder' => 'Ingrese la clave'));
									echo "</div>";
									echo "<div class='form-group col-lg-5'>";
										echo Form::label('value', 'Valor', array('class' => 'sr-only'));
										echo Form::input('value', '', array('type' => 'text', 'id' => 'value', 'class' => 'form-control', 'placeholder' => 'Ingrese el valor'));
									echo "</div>";
									echo Form::button('saveconfig', 'Agregar', array('class' => 'col-lg-2 btn btn-default'));
								echo Form::close();
								?>

								<?php echo Form::open('config/edit', array('method' => 'POST', 'id' => 'editconfig', 'class' => 'form-vertical'));
									if(isset($_configs)){
										foreach($_configs as $config){
											echo "<div class='form-group'>";
												echo Form::label($config->Key, $config->Key, array('class' => 'control-label'));
												echo Form::input($config->Key, $config->Value, array('type' => 'text', 'id' => $config->Key, 'class' => 'form-control'));
											echo "</div>";		
										}
									}
								?>
								<button class="btn btn-primary" type="submit">Guardar cambios</button>								
								<?php echo Form::close(); ?>
							</div>
						</div>
					</div>
				</div>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>