<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Posts {
	
	public static function get($userId, $userIsStudent){
		return ORM::factory('post')
			->where('CreatorId', '=', $userId)
			->and_where('IsStudent', '=', $userIsStudent)
			->order_by('CreatedAt', 'DESC')->find_all();
	}
	
	public static function getById($id){
		return ORM::factory('post', $id);
	}
}