<?php defined('SYSPATH') or die('No direct script access.');

class Controller_PaymentsPlan extends Controller {

	public function action_index()
	{
		$view=View::factory('paymentsplan');
		$view->_alum = Helpers_Students::get($_POST['alumid']);
		$view->_paymentsplans = Helpers_PaymentsPlans::getbyStudent($_POST['alumid']);
		$this->response->body($view->render());
	}
}