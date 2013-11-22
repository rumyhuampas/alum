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
									Plan de pagos
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<?php
								$now = new DateTime();
								$now->modify('-6 month')->format('m-Y');
								for($i=1;$i<18;$i++){?>
									<div class="col-md-4">
										<div class="panel panel-form">
											<div class="panel-heading">
												<div class="row">
													<h3 class="panel-title">
													<?php
													echo $now->modify('+1 month')->format('m-Y');
													?>
													</h3>
												</div>
											</div>
											<div>
												<form role="form" class="form-horizontal" name="formid"<?php echo $i; ?>>
													<div class="form-group">
														<label class="col-lg-4 control-label">Plan de pago</label>
														<div class="col-lg-8">
															<div class="radio checked">
																<label>
																	<input type="radio" value="month" id="radiomonth" name="optionsRadios">
																	Mensual
																</label>
															</div>
															<div class="radio">
																<label>
																	<input type="radio" value="class" id="radioclass" name="optionsRadios">
																	Por clase
																</label>
															</div>
															<div class="radio radiosubject">
																<label>
																	<?php echo Form::input('optionsRadios', '', array('type' => 'radio', 'value' => 'subject', 'id' => 'radiosubject', 'formid' => $i)); ?>
																	Por materia
																</label>
															</div>
														</div>
														<div class="form-group hidden" name="formid"<?php echo $i; ?>>
															<label class="col-lg-4 control-label">Materias</label>
															<div class="col-lg-5">
																<?php echo Form::select('materias', Helpers_Combos::getRange(1,20),'', array('id' => 'materias', 'class' => 'form-control', 'formid' => $i)); ?>
															</div>
														</div>
													</div>
												</form>
											</div>
											<div class="panel-footer">
												<a class="btn btn-info btn-block" href="#">Guardar</a>
											</div>
										</div>				
									</div>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>