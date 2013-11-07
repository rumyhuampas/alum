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
										<div class="panel panel-primary">
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
												<div class="controls">
													<div class="col-lg-9">
														<label class="checkbox-inline">
															<input type="checkbox" value="showall" id="chbshowall"> Mostrar eliminados
														</label>
													</div>
												</div>
												<table id="studenttable" class="table users-table table-condensed table-hover ">
													<thead>
														<tr>
															<th class="visible-lg">#</th>
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
									                    		echo "<tr active='".$alumno->Active."'>";
									                    			echo "<td>".$alumno->Id."</td>";
																	echo "<td>".$alumno->Name."</td>";
																	echo "<td>".date("d-m-Y", strtotime($alumno->Birth))."</td>";
																	echo "<td>".$alumno->Phone1." / ".$alumno->Phone1." / ".$alumno->Phone3."</td>";
																	echo "<td>".$alumno->Address."</td>";
																	echo '<td>';
																		if($alumno->Active == 'Y'){
																			echo Form::open('abmalum/edit', array('method' => 'POST', 'class' => 'col-lg-2'));
										                            		echo Form::hidden('alumid', $alumno->Id);
																			echo "<button class='btn btn-info' type='button' name='editalum'><i class='icon-edit'></i></button>";
																			echo Form::close();
																			echo Form::open('abmalum/delete', array('method' => 'POST', 'class' => 'col-lg-2'));
										                            		echo Form::hidden('alumid', $alumno->Id);
																			echo "<button class='btn btn-info' type='button' name='deletealum'><i class='icon-remove'></i></button>";
																			echo Form::close();	
																		}
																		else{
																			echo Form::open('abmalum/reactivate', array('method' => 'POST', 'class' => 'col-lg-2'));
										                            		echo Form::hidden('alumid', $alumno->Id);
																			echo "<button class='btn btn-info' type='button' name='reactivatealum'><i class='icon-ok'></i></button>";
																			echo Form::close();
																		}	
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
				 
				<?php include Kohana::find_file('views', '_dlgyesno'); ?>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>