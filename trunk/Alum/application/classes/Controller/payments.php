<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Payments extends Controller {

	public function action_index()
	{
		$view=View::factory('payments');
		$alumid = $this->request->param('id');
		$view->_alum = Helpers_Students::get($alumid);
		//$view->_paymentsplans = Helpers_PaymentsPlans::getbyStudent($alumid);
		$this->response->body($view->render());
	}
	
	/*public function action_add()
	{
		if(!isset($_POST['month'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'paymentsplan', 'action' => 'index',
				'id' => $_POST['alumid'])));
		}
		else{
			if(!Helpers_PaymentsPlans::exists($_POST['alumid'], $_POST['month'])){
				$pp = ORM::factory('paymentsplan');
				$pp->StudentId = $_POST['alumid'];
				$pp->Month = $_POST['month'];
				$pp->PaymentType = $_POST['payment'];
				if($_POST['payment'] == Helpers_Consts::PAY_SUBJECT){
					$pp->Amount = $_POST['amount'];
				}
				$pp->create();
				
				Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $pp->StudentId, Helpers_Consts::OT_PPCREATE, $pp->Id);
				
				HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'paymentsplan', 'action' => 'index', 'id' => $_POST['alumid'],
					'msgtype' => 'alert-success', 'msgtext' => 'Plan de pagos agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'paymentsplan', 'action' => 'index', 'id' => $_POST['alumid'],
					'msgtype' => 'alert-danger', 'msgtext' => 'Ya existe un plan de pagos para ese mes.')));
			}
		}
	}

	public function action_delete()
	{
		$pp = Helpers_PaymentsPlans::get($_POST['paymentid']);
		$alumid = $pp->StudentId;
		$pp->delete();
		
		Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), '', Helpers_Consts::OT_PPDELETE, $_POST['paymentid']);
		
		HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'paymentsplan', 'action' => 'index', 'id' => $alumid,
			'msgtype' => 'alert-success', 'msgtext' => 'Plan de pago eliminado con exito.')));
	}*/
}