<?php
$_msgtitle = Request::current()->param('msgtitle');
$_msgtext = Request::current()->param('msgtext');
$_msgtype = Request::current()->param('msgtype');
if(isset($_msgtext)){
?>
	<div class="row">
		<div class="col-mod-12">
			<div class="alert alert-dismissable <?php echo $_msgtype; ?> alert-dashboard fade in">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong><?php echo $_msgtitle; ?></strong> <?php echo $_msgtext; ?>
			</div>
		</div>
	</div>
<?php
}
?>