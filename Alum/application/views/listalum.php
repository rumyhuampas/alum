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
								
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-users">
											<div class="panel-heading">
												<h3 class="panel-title">Alumnos
													<span class="pull-right">
														<a class="panel-minimize" href="#"><i class="icon-chevron-up"></i></a>
														<a class="panel-settings" href="#"><i class="icon-cog"></i></a>
														<a class="panel-close" href="#"><i class="icon-remove"></i></a>
													</span>
												</h3>
											</div>
											<div class="panel-body">
												<table class="table users-table table-condensed table-hover ">
													<thead>
														<tr>
															<th class="visible-lg">#</th>
															<th>Avatar</th>
															<th>Nombre</th>
															<th class="visible-lg">Edad</th>
															<th class="visible-lg">Telefono</th>
															<th class="visible-lg">Direccion</th>
															<th>&nbsp;</th>
														</tr>
													</thead>
													<tbody>
														<?php
									                    if(isset($_alumnos)){
									                    	foreach($_alumnos as $alumno){
									                    		echo "<tr>";
									                    			echo "<td>".$alumno->Id."</td>";
																	echo "<td>".$alumno->Name."</td>";
																	echo "<td>".$alumno->Age."</td>";
																	echo "<td>".$alumno->Phone1." / ".$alumno->Phone1." / ".$alumno->Phone3."</td>";
																	echo "<td>".$alumno->Address."</td>";
																	echo "<td>";
																		echo "<button class='btn btn-info' type='button'><i class='icon-edit'></i></button>";
																	echo "</td>";
																echo "</tr>";
									                    	}
									                    }
									                    ?>
														<tr>
															<td class="visible-lg">1</td>
															<td><img class="avatar" alt="" src="images/theme/avatarOne.png"></td>
															<td class="visible-lg">John </td>
															<td class="visible-lg">Deo</td>
															<td class="visible-lg">johndeo@example.com</td>
															<td>@johndeo</td>
															<td>
																<button class="btn btn-info" type="button"><i class="icon-envelope"></i></button>
																<button class="btn btn-info" type="button"><i class="icon-eye-open"></i></button>
																<button class="btn btn-info" type="button"><i class="icon-edit"></i></button>
															</td>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<!-- Modal --
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
						</div><!-- /.modal-content --
					</div><!-- /.modal-dialog --
				</div><!-- /.modal -->
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>