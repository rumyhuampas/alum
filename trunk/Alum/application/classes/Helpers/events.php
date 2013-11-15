<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Events {
	
	public static function get($id = NULL){
		if(isset($id)){			
			return ORM::factory('event', $id);
		}
		else{
			return ORM::factory('event')->find_all();
		}
	}
	
	public static function getasarray($id = NULL){
		if(isset($id)){			
			return DB::select(array('e.Id', 'id'), array('e.Start', 'start'), array('e.End', 'end'), array('s.Name', 'title'))
				->from(array('events', 'e'))
				->join(array('students', 's'))->on('e.StudentId', '=', 's.Id')
				->and_where('e.Id', '=', $id)->execute()->as_array();
		}
		else{
			return DB::select(array('e.Id', 'id'), array('e.Start', 'start'), array('e.End', 'end'), array('s.Name', 'title'))
				->from(array('events', 'e'))
				->join(array('students', 's'))->on('e.StudentId', '=', 's.Id')
				->execute()->as_array();
		}
	}
}