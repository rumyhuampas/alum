<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Combos {
	
	public static function getBirthDays(){
		$days = array();
		for($i=1;$i<=31;$i++){
			array_push($days, $i);	
		}
		return $days;
	}
	
	public static function getBirthMonths(){
		$months = array();
		for($i=1;$i<=12;$i++){
			array_push($months, $i);	
		}
		return $months;
	}
	
	public static function getBirthYears(){
		$years = array();
		for($i=1980;$i<=2050;$i++){
			array_push($years, $i);	
		}
		return $years;
	}
}