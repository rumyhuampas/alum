<?php
$_category = Request::current()->param('category');
$_title = Request::current()->param('title');
?>
<div class="row">
	<div class="col-mod-12">
		<ul class="breadcrumb">
			<li class="active"><?php echo $_category?></li>
			<li class="active"><?php echo $_title?></li>
		</ul>
	</div>
</div>