<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Session {
	public static function set($key, $value){
		$session = Session::instance();
		$session->set($key, $value);
	}
	
	public static function setConfigs($configs){
		$session = Session::instance();
		foreach($configs as $config){
			$session->set($config->Key, $config->Value);
		}
	}
	
	public static function get($key){
		$session = Session::instance();
		return $session->get($key);
	}
	
	public static function destroy($keys = NULL){
		$session = Session::instance();		
		if(isset($keys)){
			foreach($keys as $key){
				$session->delete($key);
			}
		}
		else{
			$session->destroy();
		}
	}
}