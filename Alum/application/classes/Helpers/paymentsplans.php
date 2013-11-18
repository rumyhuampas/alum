<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_PaymentsPlans {
	
	public static function get($id = NULL){
		if(isset($id)){
			return ORM::factory('paymentsplan', $id);
		}
		else{
			return ORM::factory('paymentsplan')->find_all();
		}
	}
	
	public static function getbyStudent($alumId){
		return ORM::factory('paymentsplan')
			->where('StudentId', '=', $alumid)
			->find_all();
	}
}