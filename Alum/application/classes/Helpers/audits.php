<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Audits {
	
	public static function get($userId, $userIsStudent){
		if($userIsStudent == 'N'){
			return ORM::factory('audit')
				->where('UserId', '=', $userId)
				->order_by('CreatedAt', 'DESC')
				->find_all();
		}
		else{
			return ORM::factory('audit')
				->where('StudentId', '=', $userId)
				->order_by('CreatedAt', 'DESC')
				->find_all();
		}
	}
	
	public static function addAudit($userId, $studentId, $type, $info = NULL){
		$audit = ORM::factory('audit');
		$audit->UserId = $userId;
		if($studentId != ''){
			$audit->StudentId = $studentId;
		}
		$audit->Type = $type;
		if($info != NULL){
			$audit->Info = $info;
		}
		$audit->CreatedAt = DB::expr('Now()');
		$audit->create();
	}
}