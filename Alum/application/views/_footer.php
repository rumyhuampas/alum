		<!-- Load JS here for greater good =============================-->
		<script src=<?php echo URL::base()."/scripts/jquery-1.8.3.min.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/jquery-ui-1.10.3.custom.min.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.touch-punch.min.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/bootstrap.min.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/bootstrap-select.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/bootstrap-switch.js" ?>></script>
		<!-- Added for calendar page -->
		<script src=<?php echo URL::base()."/scripts/flatui-checkbox.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/flatui-radio.js" ?>></script>
		
		<script src=<?php echo URL::base()."/scripts/jquery.tagsinput.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/jquery.placeholder.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/bootstrap-typeahead.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/application.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/moment.min.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/jquery.dataTables.min.js" ?>></script>
		<script src=<?php echo URL::base()."/scripts/jquery.sortable.js" ?>></script>
		<script type="text/javascript" src=<?php echo URL::base()."/scripts/jquery.gritter.js" ?>></script>
		
		<?php
		if(Request::current()->controller() == 'Calendar'){
		?>
			<!-- Calendar Scripts  =============================-->
			<script src=<?php echo URL::base()."/scripts/fullcalendar.min.js" ?>></script>
			<!--<script src=<?php echo URL::base()."/scripts/fullcalendar-custom.js" ?>></script>-->
			<script src=<?php echo URL::base()."/scripts/custom/calendar.js" ?>></script>
		<?php
		}
		?>
		
		<?php
		if(Request::current()->controller() == 'Abmalum'){
		?>
			<!-- New Alum Scripts-->
			<script src=<?php echo URL::base()."/scripts/jquery.bootstrap.wizard.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/prettify.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/jquery.validate.min.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/custom/newalum.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/custom/listalum.js" ?>></script>
		<?php
		}
		?>
		
		<?php
		if(Request::current()->controller() == 'Profile'){
		?>
			<!-- Profile Scripts-->
			<script src=<?php echo URL::base()."/scripts/jquery.validate.min.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/custom/profile.js" ?>></script>
		<?php
		}
		?>
		
		<?php
		if(Request::current()->controller() == 'Config'){
		?>
			<!-- Profile Scripts-->
			<script src=<?php echo URL::base()."/scripts/jquery.validate.min.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/custom/config.js" ?>></script>
		<?php
		}
		?>
		
		<?php
		if(Request::current()->controller() == 'Login'){
		?>
			<!-- Profile Scripts-->
			<script src=<?php echo URL::base()."/scripts/jquery.validate.min.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/custom/login.js" ?>></script>
		<?php
		}
		?>
	
		<?php
		if(Request::current()->controller() == 'Home'){
		?>
			<!-- Charts  =============================-->
			<script src=<?php echo URL::base()."/scripts/charts/jquery.flot.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/charts/jquery.flot.resize.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/charts/jquery.flot.stack.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/charts/jquery.flot.pie.min.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/charts/jquery.sparkline.min.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/jquery.knob.js" ?>></script>		
		
		
			<!-- NVD3 graphs  =============================-->
			<script src=<?php echo URL::base()."/scripts/nvd3/lib/d3.v3.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/nvd3/nv.d3.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/nvd3/src/models/legend.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/nvd3/src/models/pie.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/nvd3/src/models/pieChart.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/nvd3/src/utils.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/nvd3/sample.nvd3.js" ?>></script>
		
			<!-- Map and icons on map-->
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
			<script src=<?php echo URL::base()."/scripts/map-icons.js" ?>></script>
		<?php
		}
		?>
		<!-- Archon JS =============================-->
		<script src=<?php echo URL::base()."/scripts/archon.js" ?>></script>
		
		<script src=<?php echo URL::base()."/scripts/custom/menubar.js" ?>></script>
		
		<?php
		if(Request::current()->controller() == 'Home'){
		?>	
			<script src=<?php echo URL::base()."/scripts/knobs-custom.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/sparkline-custom.js" ?>></script>
			<script src=<?php echo URL::base()."/scripts/dashboard-custom.js" ?>></script>
		<?php
		}
		?>
		
	</body>

</html>