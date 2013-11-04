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
							<li><a href="calendar.html">Calendar</a></li>
							<li class="active">Bread Crumb</li>
						</ul>
					</div>
				</div>
	
				<!-- Full Calendar-->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Full Calendar
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<div id='external-events'>
									<h4>Draggable Events,selectable event</h4>
									<ul class="list-inline">
										<li class='external-event'>My Event 1</li>
										<li class='external-event'>My Event 2</li>
										<li class='external-event'>My Event 3</li>
										<li class='external-event'>My Event 4</li>
										<li class='external-event'>My Event 5</li>
									</ul>
									<p>
										<input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
									</p>
								</div>
	
								<div id='calendar'></div>
							</div>
						</div>
					</div>
				</div>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>