<?php include Kohana::find_file('views', '_header'); ?>

	<div class="frame">
		
		<?php include Kohana::find_file('views', '_menubar'); ?>
	
		<!-- Main Content starts here -->
		<div class="content">
			<?php include Kohana::find_file('views', '_headerbar'); ?>
	
			<div id="main-content">
				<?php include Kohana::find_file('views', '_navrow'); ?>

				<?php include Kohana::find_file('views', '_msgrow'); ?>
				
				<!-- Form Horizontal -->
				<div class="row">
					<div class="col-md-12">
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">
									Pagos - Alumno: <?php echo $_alum->Name; ?>
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							
							<div class="panel-body">
								<?php 
								echo Form::open('payments/add', array('method' => 'POST', 'id' => 'addpayment', 'class' => 'form-vertical'));
									echo Form::hidden('alumid', $_alum->Id);
									echo "<div class='form-group col-lg-3'>";
										echo Form::label('month', 'Mes', array('class' => 'sr-only'));
										echo Form::select('month', Helpers_Combos::getPaymentsMonth(12), '', array('type' => 'text', 'id' => 'month', 'class' => 'form-control'));
									echo "</div>";
									echo "<div class='form-group col-lg-3'>";
										echo Form::label('payment', 'Tipo de pago', array('class' => 'sr-only'));
										echo Form::select('payment', Helpers_Combos::getPayments(), '', array('type' => 'text', 'id' => 'payment', 'class' => 'form-control'));
									echo "</div>";
									echo "<div class='form-group col-lg-3'>";
										echo Form::label('amount', 'Materias', array('class' => 'sr-only'));
										echo Form::select('amount', Helpers_Combos::getRange(1, 20), '', array('type' => 'text', 'id' => 'amount', 'class' => 'form-control'));
									echo "</div>";
									echo Form::button('savepayment', 'Agregar', array('class' => 'col-lg-2 btn btn-default'));
								echo Form::close();
								?>
								
								<table id="paymenttable" class="table users-table table-condensed table-hover ">
									<thead>
										<tr>
											<th class="visible-lg">#</th>
											<th class="visible-lg">Mes</th>
											<th class="visible-lg">Tipo de pago</th>
											<th class="visible-lg">Materias</th>
											<th>&nbsp;</th>
										</tr>
									</thead>
									<tbody>
										<?php
					                    if(isset($_paymentsplans)){
					                    	foreach($_paymentsplans as $payment){
					                    		echo "<tr>";
					                    			echo "<td>".$payment->Id."</td>";
													echo "<td>".$payment->Month."</td>";
													echo "<td>".$payment->PaymentType."</td>";
													echo "<td>".$payment->Amount."</td>";
													echo '<td>';
														echo Form::open('paymentsplan/delete', array('method' => 'POST', 'class' => 'col-lg-1'));
					                            		echo Form::hidden('paymentid', $payment->Id);
														echo "<button class='btn btn-info' type='button' name='deletepayment' title='Eliminar'><i class='icon-remove'></i></button>";
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
				
				<?php include Kohana::find_file('views', '_dlgyesno'); ?>
	
			</div><!-- /Main Content  @7 -->
	
		</div><!-- / Content @5 -->
	
		<?php include Kohana::find_file('views', '_footerbar'); ?>
		
	</div> <!-- Frame -->
	
<?php include Kohana::find_file('views', '_footer'); ?>