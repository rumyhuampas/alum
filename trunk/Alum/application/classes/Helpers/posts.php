<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Posts {
	
	public static function get($userId, $userIsStudent, $limit = NULL){
		$posts = ORM::factory('post')
			->where('CreatorId', '=', $userId)
			->and_where('IsStudent', '=', $userIsStudent)
			->order_by('CreatedAt', 'DESC');
		if(isset($limit)){
			$posts->limit($limit);
		}
		return $posts->find_all();
	}
	
	public static function getById($id){
		return ORM::factory('post', $id);
	}
	
	public static function getTextResume($id){
		$post = ORM::factory('post', $id);
		if(strlen($post->Text) > 20){
			return substr($post->Text, 0, 20).'...';
		}
		else{
			return $post->Text;
		}
	}
}