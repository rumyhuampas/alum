<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Users {
	
	public static function get($id = NULL){
		if(isset($id)){
			return ORM::factory('user', $id);
		}
		else{
			return ORM::factory('user')->order_by('name')->find_all();
		}
	}
	
	public static function getByCredentials($user, $pass){
		return ORM::factory('user')
			->where('Username', '=', $user)
			->and_where('Password', '=', $pass)
			->find();
	}
	
	public static function isAnyUser(){
		return ORM::factory('user')->count_all();
	}
}