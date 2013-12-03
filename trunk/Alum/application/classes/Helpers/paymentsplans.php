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
			->where('StudentId', '=', $alumId)
			->order_by('Month', 'DESC')
			->limit(18)
			->find_all();
	}
	
	public static function exists($alumid, $month){
		return ORM::factory('paymentsplan')
			->where('StudentId', '=', $alumid)
			->and_where('Month', '=', $month)->count_all() > 0;
	}
}