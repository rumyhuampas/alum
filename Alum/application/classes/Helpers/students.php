<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Students {
	
	public static function get($id = NULL){
		if(isset($id)){
			return ORM::factory('student', $id);
		}
		else{
			return ORM::factory('student')->order_by('name')->find_all();
		}
	}
}