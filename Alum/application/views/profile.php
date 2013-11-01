<?php include Kohana::find_file('views', '_header'); ?>

	<div class="frame">
		
		<?php include Kohana::find_file('views', '_menubar'); ?>
	
		<!-- Main Content starts here -->
		<div class="content">
			<?php include Kohana::find_file('views', '_headerbar'); ?>
	
			<div id="main-content" class="white">
				
				<!-- Profile -->
				<div class="row profile-head">
					<img src=<?php echo URL::base()."/assets/images/theme/aguscover.png" ?> width="100%" height="300px" alt="">
				</div>
				
				<div class="row">
				
					<div class="col-md-8 profile-body">
						<div class="profile-info">
							<img src=<?php echo URL::base()."/assets/images/theme/avatarAgus2x.png" ?> class="avatar" alt="" >
							<h2 class="name">Agustina Molina Hernando</h2>
							<a href="#" class="pull-right"><i class="icon-edit"></i> Edit Profile</a>
							<ul class="options list-inline">
								<li><a href="#"><i class="icon-picture"></i> Web Designer</a></li>
								<li><a href="#"><i class="icon-twitter"></i> @tbguru</a></li>
								<li><a href="#"><i class="icon-time"></i> Member Since Aug 2013</a></li>
							</ul>
							<hr>

							<div class="row profile-posts-block">
								<!-- First Column---------------------------->
								<div class="col-md-6">

									<div class="panel write-post">
										<div class="panel-body">
											<form method="post">
												<input type="text" class="form-control text-input" placeholder="Write something">
												<div class="post-type">
													<div class="button-group btn-group-justified">
														<a href="#" class="btn btn-default"><i class="icon-map-marker"></i></a>
														<a href="#" class="btn btn-default"><i class="icon-picture"></i></a>
														<a href="#" class="btn btn-default"><i class="icon-calendar"></i></a>
														<a href="#" class="btn btn-default"><i class="icon-facetime-video"></i></a>
														<a href="#" class="btn btn-success">Send</a>
													</div>
												</div>
											</form>
										</div>
									</div>

									<!-- Wall Post -->
									<div class="panel panel-wall-post">
										<div class="panel-heading">
											<img src="images/theme/avatarTwo.png" alt="" class="avatar">
											<div class="message">
												<span class="username">Budia Gor</span> 
												<span class="location">(India)</span> 
												<div class="btn-group pull-right">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog"></i>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Report Spam</a></li>
														<li><a href="#">Share Post</a></li>
														<li><a href="#">Embed Post</a></li>
														<li class="divider"></li>
														<li><a href="#">Delete Post</a></li>
													</ul>
												</div>
												<div class="time "><i class="icon-time"> </i> 06:58 PM</div>
											</div>
										</div>
										<div class="panel-body">
											<p class="post-message">My new pet, OMG she is soooo adorable. </p>
											<img src="http://placehold.it/350x250&amp;text=Dog" alt="">
										</div>
										<div class="panel-footer">
											<div class="butto-group btn-group-justified">
												<a href="#" class="btn btn-default disabled"><i class="icon-thumbs-up"></i> 20  &nbsp; <i class="icon-comment"></i>100</a>
												<a href="#" class="btn btn-default"> like</a>
												<a href="#" class="btn btn-default"> Comment</a>
											</div>
										</div>
									</div><!-- /Wall Post -->


									<!-- Wall Post -->
									<div class="panel panel-wall-post">
										<div class="panel-heading">
											<img src="images/theme/avatarThree.png" alt="" class="avatar">
											<div class="message">
												<span class="username">Akasa Ram</span> 
												<span class="location">(Australia)</span> 
												<div class="btn-group pull-right">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog"></i>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Report Spam</a></li>
														<li><a href="#">Share Post</a></li>
														<li><a href="#">Embed Post</a></li>
														<li class="divider"></li>
														<li><a href="#">Delete Post</a></li>
													</ul>
												</div>
												<div class="time "><i class="icon-time"> </i> 06:58 PM</div>
											</div>
										</div>
										<div class="panel-body">
											<p class="post-message"> I like to hang out to night. Can I expect any of you. The party is at Kunar, Desil
												<br /> <a href="#" class="post-link" > <i class="icon-map-marker"></i> Download location </a>
											</p>
										</div>
										<div class="panel-footer">
											<div class="butto-group btn-group-justified">
												<a href="#" class="btn btn-default disabled"><i class="icon-thumbs-up"></i> 15  &nbsp; <i class="icon-comment"></i>2</a>
												<a href="#" class="btn btn-default"> like</a>
												<a href="#" class="btn btn-default"> Comment</a>
											</div>
										</div>
									</div><!-- /Wall Post -->


									<!-- Wall Post -->
									<div class="panel panel-wall-post">
										<div class="panel-heading">
											<img src="images/theme/avatarTwo.png" alt="" class="avatar">
											<div class="message">
												<span class="username">Budia Gor</span> 
												<span class="location">(India)</span> 
												<div class="btn-group pull-right">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog"></i>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Report Spam</a></li>
														<li><a href="#">Share Post</a></li>
														<li><a href="#">Embed Post</a></li>
														<li class="divider"></li>
														<li><a href="#">Delete Post</a></li>
													</ul>
												</div>
												<div class="time "><i class="icon-time"> </i> 06:58 PM</div>
											</div>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/350x250&amp;text=stunt+Dog" alt="">
										</div>
										<div class="panel-footer">
											<div class="butto-group btn-group-justified">
												<a href="#" class="btn btn-default disabled"><i class="icon-thumbs-up"></i> 20  &nbsp; <i class="icon-comment"></i>100</a>
												<a href="#" class="btn btn-default"> like</a>
												<a href="#" class="btn btn-default"> Comment</a>
											</div>
										</div>
									</div><!-- /Wall Post -->

								</div><!--First Column-->
								
								<!-- Second Column---------------------------->
								<div class="col-md-6">

									<!-- Wall Post -->
									<div class="panel panel-wall-post">
										<div class="panel-heading">
											<img src="images/theme/avatarTwo.png" alt="" class="avatar">
											<div class="message">
												<span class="username">Budia Gor</span> 
												<span class="location">(India)</span> 
												<div class="btn-group pull-right">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog"></i>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Report Spam</a></li>
														<li><a href="#">Share Post</a></li>
														<li><a href="#">Embed Post</a></li>
														<li class="divider"></li>
														<li><a href="#">Delete Post</a></li>
													</ul>
												</div>
												<div class="time "><i class="icon-time"> </i> 06:58 PM</div>
											</div>
										</div>
										<div class="panel-body">
											<p class="post-message">My recent animation. What do you think guys?</p>
											<iframe src="http://player.vimeo.com/video/50522981" width="100%" height="270" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
										</div>
										<div class="panel-footer">
											<div class="butto-group btn-group-justified">
												<a href="#" class="btn btn-default disabled"><i class="icon-thumbs-up"></i> 2 K  &nbsp; <i class="icon-comment"></i> 2,765</a>
												<a href="#" class="btn btn-default"> like</a>
												<a href="#" class="btn btn-default"> Comment</a>
											</div>
										</div>
									</div><!-- /Wall Post -->

									<!-- Wall Post -->
									<div class="panel panel-wall-post">
										<div class="panel-heading">
											<img src="images/theme/avatarTwo.png" alt="" class="avatar">
											<div class="message">
												<span class="username">Budio Gor</span> 
												<span class="location">(India)</span> 
												<div class="btn-group pull-right">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog"></i>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Report Spam</a></li>
														<li><a href="#">Share Post</a></li>
														<li><a href="#">Embed Post</a></li>
														<li class="divider"></li>
														<li><a href="#">Delete Post</a></li>
													</ul>
												</div>
												<div class="time "><i class="icon-time"> </i> 06:58 PM</div>
											</div>
										</div>
										<div class="panel-body">
											<img src="http://placehold.it/350x250&amp;text=Sneeker" alt="">
										</div>
										<div class="panel-footer">
											<div class="butto-group btn-group-justified">
												<a href="#" class="btn btn-default disabled"><i class="icon-thumbs-up"></i> 20  &nbsp; <i class="icon-comment"></i>100</a>
												<a href="#" class="btn btn-default"> like</a>
												<a href="#" class="btn btn-default"> Comment</a>
											</div>
										</div>
									</div><!-- /Wall Post -->

								</div><!--Second Column-->
							</div><!--row profile-posts-block-->
						</div><!--profile-info-->
					</div><!--col-md-8 profile-body-->
					
					<div class="col-md-4">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Timeline
								</h3>
							</div>
							<div class="panel-body">
								<ul class='timeline'>
									<li class="year">2013</li>
									<li class='event offset-first'>
										Something amazing happened today, but it's a secret
									</li>
									<li class='event'>
										Timeline.css is <b>dynamic</b>, <b>responsive</b> and optimized to <b>demonstrate events</b> in your life in a <b>simple and clear</b> way
									</li>
									<li class="event">
										<a href="#" title="christian fei">
											made with &lt;3 by <img class='no-box centered' src="http://placehold.it/350x250&amp;text=Open+Image" alt="christian fei">
										</a>
									</li>
									<li class="event">
										<a href="#">
											Open source project on codepen.io
											<img class='no-box centered' src="http://placehold.it/350x250&amp;text=Open+Image" alt="">
										</a>
									</li>
									<li class="year">2012</li>
									<li class="event offset-first">
										<p>To infinity  ... </p>
										<img class='centered no-box' src="http://placehold.it/350x250&amp;text=Open+Image" alt="">
										<a href='../../../upload.wikimedia.org/wikipedia/en/7/75/Buzz-lightyear-toy-story-3-wallpaper.jpg'>&copy;</a>
									</li>
									<li class='event'>
										Look, a sleepy kitten: <br/>
										<img class='no-box' src="http://placehold.it/350x250&amp;text=Open+Image" alt=""/>
										<a href='../../../ih2.redbubble.net/image.10311838.0354/flat%2c550x550%2c075%2cf.jpg'>&copy;</a>
									</li>
									<li class="event featured">
										<p>... and beyond! Featured class</p>
										<img class='centered no-box' src="http://placehold.it/350x250&amp;text=Open+Image" alt="">
										<a href='../../../brandstyle.com.br/wp-content/uploads/2012/05/Woody-7.jpg'>&copy;</a>
									</li> 
								</ul>
							</div><!--panel-body-->
						</div><!--panel panel-archon-->
					</div><!--col-md-4-->
					
				</div><!--row-->


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