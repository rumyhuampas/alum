<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Configs {
	
	public static function get($key = NULL){
		if(isset($key)){
			return ORM::factory('config')
				->where('Key', '=', $key)
				->find();
		}
		else{
			return ORM::factory('config')
				->order_by('Key')
				->find_all();
		}
	}
}