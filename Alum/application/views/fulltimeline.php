<?php include Kohana::find_file('views', '_header'); ?>

	<div class="frame">
		
		<?php include Kohana::find_file('views', '_menubar'); ?>
	
		<!-- Main Content starts here -->
		<div class="content">
			<?php include Kohana::find_file('views', '_headerbar'); ?>
	
			<div id="main-content" class="white">
				
				<!-- Profile -->
				<div class="row profile-head">
					<?php if($_user->Cover != ''){ ?>
						<img src=<?php echo URL::base().$_user->Cover ?> width="100%" height="300px" alt="">
					<?php
					}else{?>
						<img src=<?php echo URL::base().'/assets/images/theme/cover2.jpg' ?> width="100%" height="300px" alt="">
					<?php 
					}?>
				</div>
				
				<div class="row">
					
					<div class="col-md-12 profile-body">
						<div class="profile-info">
							<?php if($_user->Avatar != ''){ ?>
								<img src=<?php echo URL::base().$_user->Avatar ?> class="avatar" alt="" >
							<?php
							}else{?>
								<img src=<?php echo URL::base().'/assets/images/theme/avatar2x.png' ?> class="avatar" alt="" >
							<?php
							}?>
							<h2 class="name"><?php echo $_user->Name ?></h2>
							<?php
							if($_userIsStudent == 'N'){
								echo Form::open('abmuser/edit', array('method' => 'POST', 'class' => 'pull-right'));
	                    		echo Form::hidden('userid', $_user->Id);
								echo "<button class='btn btn-info' type='button' name='edituser'><i class='icon-edit'></i> Editar perfil</button>";
								echo Form::close();
								?>
								<ul class="options list-inline">
									<li><a href="#"><i class="icon-hand-right"></i> <?php echo $_user->Info ?></a></li>
								</ul>
							<?php
							}else{
								echo Form::open('abmalum/edit', array('method' => 'POST', 'class' => 'pull-right'));
	                    		echo Form::hidden('alumid', $_user->Id);
								echo "<button class='btn btn-info' type='button' name='edituser'><i class='icon-edit'></i> Editar perfil</button>";
								echo Form::close();
								echo '<br />';
							}
							?>
							<hr>
							
							<div class="row profile-posts-block">
								<!-- First Column---------------------------->
								<div class="col-md-12">
									
									<div class="panel panel-archon">
										<div class="panel-heading">
											<h3 class="panel-title">
												Timeline
											</h3>
										</div>
										<div class="panel-body">
											<ul class='timeline'>
												<?php 
												if(isset($_userAudits)){
													$currentyear = '';
													foreach($_userAudits as $audit){
														$audityear = date('Y', strtotime($audit->CreatedAt));
														if($currentyear != $audityear){
															echo "<li class='year'>".$audityear."</li>";
															echo "<li class='event offset-first'>";
																echo "<div class='message'>";
																	echo "<img class='avatar' src=".URL::base().Helpers_Consts::getAuditIcon($audit->Type).">";
																	echo "<div class='time'><i class='icon-time'> </i> ".$audit->CreatedAt."</div>";
																echo "</div>"; 
																echo Helpers_Consts::getAuditText($audit->Type);
																echo "<br />";
																echo "<small>";
																	echo Helpers_Consts::getAuditInfo($audit);
																echo "</small>";	
															echo "</li>";
															$currentyear = $audityear;
														}
														else{
															echo "<li class='event'>";
																echo "<div class='message'>";
																	echo "<img class='avatar' src=".URL::base().Helpers_Consts::getAuditIcon($audit->Type).">";
																	echo "<div class='time'><i class='icon-time'> </i> ".$audit->CreatedAt."</div>";
																echo "</div>"; 
																echo Helpers_Consts::getAuditText($audit->Type);
																echo "<br />";
																echo "<small>";
																	echo Helpers_Consts::getAuditInfo($audit);
																echo "</small>";	
															echo "</li>";
														}
													}
												}
												?>
											</ul>
										</div><!--panel-body-->
									</div><!--panel panel-archon-->

								</div><!--First Column-->
								
							</div><!--row profile-posts-block-->
							
						</div><!--profile-info-->
					</div><!--col-md-8 profile-body-->
					
				</div><!--row-->
				
				<?php include Kohana::find_file('views', '_dlgyesno'); ?>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>