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
																	echo "<td>".$alumno->Avatar."</td>";
																	echo "<td>".$alumno->Name."</td>";
																	echo "<td>".$alumno->Birth."</td>";
																	echo "<td>".$alumno->Phone1." / ".$alumno->Phone1." / ".$alumno->Phone3."</td>";
																	echo "<td>".$alumno->Address."</td>";
																	echo '<td>';
																		echo Form::open('abmalum/edit', array('method' => 'POST'));
									                            		echo Form::hidden('alumid', $alumno->Id);
																		echo "<button class='btn btn-info' type='button' name='editalum'><i class='icon-edit'></i></button>";
																		echo Form::close();	
																	echo '</td>';
																echo "</tr>";
									                    	}
									                    }
									                    ?>
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
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>