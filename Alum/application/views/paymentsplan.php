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
								for($i=1;$i<7;$i++){?>
									<div class="col-md-4">
										<div class="panel panel-form">
											<div class="panel-heading">
												<div class="row">
													<h3 class="panel-title">
													<?php echo $now->modify('+1 month')->format('m-Y'); ?>
													</h3>
												</div>
											</div>
											<div>
												<form role="form" class="form-horizontal">
													<div class="form-group">
														<label class="col-lg-4 control-label" for="inputEmail1">Plan de pago</label>
														<div class="col-lg-8">
															<div class="radio">
																<label>
																	<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
																	Mensual
																</label>
															</div>
															<div class="radio">
																<label>
																	<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">
																	Por clase
																</label>
															</div>
															<div class="radio">
																<label>
																	<input type="radio" value="option3" id="optionsRadios3" name="optionsRadios">
																	Por materia
																</label>
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