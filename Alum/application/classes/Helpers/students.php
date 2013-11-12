<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Students {
	
	public static function exists($name){
		return ORM::factory('student')->where('Name', '=', $name)->count_all() > 0;
	}
		
	public static function get($id = NULL){
		if(isset($id)){
			return ORM::factory('student', $id);
		}
		else{
			return ORM::factory('student')->order_by('name')->find_all();
		}
	}
	
	public static function getActives(){
		return ORM::factory('student')->where('Active', '=', 'Y')->order_by('name')->find_all();
	}
	
	public static function getNameResume($id){
		$std = ORM::factory('student', $id);
		if(strlen($std->Name) > 20){
			return substr($std->Name, 0, 20).'...';
		}
		else{
			return $std->Name;
		}
	}
}