<?php include Kohana::find_file('views', '_header'); ?>

	<div class="frame">
		
		<?php include Kohana::find_file('views', '_menubar'); ?>
	
		<!-- Main Content starts here -->
		<div class="content">
			<?php include Kohana::find_file('views', '_headerbar'); ?>
	
			<div id="main-content">
				<?php include Kohana::find_file('views', '_navrow'); ?>

				<?php include Kohana::find_file('views', '_msgrow'); ?>

				<div class="row">
					<div class="col-mod-12">
						<ul class="breadcrumb">
							<li><a href="index-2.html">Dashboard</a></li>
							<li><a href="form-wizard.html">Form Wizard</a></li>
							<li class="active">Bread Crumb</li>
						</ul>
					</div>
				</div>
				
				<!-- Form Wizard -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-wizard">
							<div class="panel-body">
								<form id="commentForm" method="get"  class="form-horizontal">
									<div id="rootwizard" class="wizard">
										<ul>
											<li><a href="#tab1" data-toggle="tab"><span class="badge">1</span> Details</a></li>
											<li><a href="#tab2" data-toggle="tab"><span class="badge">2</span> Personal</a></li>
											<li><a href="#tab3" data-toggle="tab"><span class="badge">3</span> Terms</a></li>
											<li><a href="#tab4" data-toggle="tab"><span class="badge">4</span> Finish</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane" id="tab1">
												<div class="form-group">
													<label for="email" class="col-lg-1 control-label">Email</label>
													<div class="col-lg-11">
														<input type="email" class="form-control" name="email" id="email" placeholder="Type something here">
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label">Disabled</label>
													<div class="col-lg-11">
														<input type="email" class="form-control" id="inputEmail1" placeholder="You cannot type here" disabled>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label"> Username</label>
													<div class="col-lg-11">
														<input type="text" class="form-control" name="username" id="username"  placeholder="Username">
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label"> Append</label>
													<div class="col-lg-11">
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label">Icon group</label>
													<div class="col-lg-11">
														<div class="input-group">
															<span class="input-group-addon">$</span>
															<input type="text" class="form-control">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label"> URL </label>
													<div class="col-lg-11">
														<input type="text" class="form-control" name="urlfield" id="usurlfieldername"  placeholder="URL">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label">Checkboxes</label>
													<div class="col-lg-11">
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">
																Option One
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">
																Option Two
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">
																Option Three
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label">Inline Checkboxes</label>
													<div class="col-lg-11">
														<label class="checkbox-inline">
															<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
														</label>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label">Radio</label>
													<div class="col-lg-11">
														<div class="radio">
															<label>
																<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
																Option One
															</label>
														</div>
														<div class="radio">
															<label>
																<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																Option Two 
															</label>
														</div>
														<div class="radio">
															<label>
																<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
																Option Three 
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail1" class="col-lg-1 control-label">Selects</label>
													<div class="col-lg-11">
														<select class="form-control">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
														</select>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<table class="table table-striped">
													<tr>
														<td>First Name</td>
														<td>Vijay Kumar</td>
													</tr>
													<tr>
														<td> Last Name</td>
														<td> Tupakula</td>
													</tr>
													<tr>
														<td> Email</td>
														<td> Support@bootstrapguru.com</td>
													</tr>
													<tr>
														<td> City</td>
														<td> Rajahmundry</td>
													</tr>
													<tr>
														<td> Phone</td>
														<td> 90000000000</td>
													</tr>
													<tr>
														<td> Place</td>
														<td> Earth</td>
													</table>			
													<label>
														<input type="checkbox" value="">
														 Agree to the terms & Conditions:
													</label>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
												</div>
												<div class="tab-pane" id="tab4">
													<dl class="dl-horizontal">
														<dt>First Name</dt>
														<dd>Vijay Kumar</dd>
														<dt> Last Name</dt>
														<dd> Tupakula</dd>
														<dt> Email</dt>
														<dd> Support@bootstrapguru.com</dd>
														<dt> City</dt>
														<dd> Rajahmundry</dd>
														<dt> Phone</dt>
														<dd> 90000000000</dd>
														<dt> Place</dt>
														<dd> Earth</dd>
													</dl>															
												</div>
												<ul class="pager wizard">
													<li class="previous first hidden"><a href="#">First</a></li>
													<li class="previous"><a href="#">Previous</a></li>
													<li class="next last hidden" ><a href="#">Last</a></li>
													<li class="next"><a href="#">Next</a></li>
												</ul>
											</div>	
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>



					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h5 class="modal-title">Panel Settings</h5>
									<span class="small">Some sort of settings with a form</span>
								</div>
								<div class="modal-body">
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label for="inputEmail1" class="col-lg-2 control-label">Label</label>
											<div class="col-lg-10">
												<input type="email" class="form-control" id="inputEmail12" placeholder="Label">
											</div>
										</div>
										<div class="form-group">
											<label for="inputPassword1" class="col-lg-2 control-label">Second Label</label>
											<div class="col-lg-10">
												<input type="text" class="form-control" id="inputPassword1" placeholder="Label two">
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>