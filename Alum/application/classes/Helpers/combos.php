<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Combos {
	
	public static function getBirthDays(){
		$days = array(1=>1);
		for($i=2;$i<=31;$i++){
			array_push($days, $i);	
		}	
		return $days;
	}
	
	public static function getBirthMonths(){
		$months = array(1=>1);
		for($i=2;$i<=12;$i++){
			array_push($months, $i);	
		}
		return $months;
	}
	
	public static function getBirthYears(){
		$years = array(1980=>1980);
		for($i=1981;$i<=2050;$i++){
			array_push($years, $i);	
		}
		return $years;
	}
	
	public static function getRange($min, $max){
		$range = array(1=>$min);
		for($i=$min;$i<=$max;$i++){
			array_push($range, $i);	
		}
		return $range;
	}
	
	public static function getPaymentsMonth($amount){
		$now = new DateTime();
		$months = array($now->format('m-Y'));
		for($i=0;$i<=$amount;$i++){
			$now->modify('+1 month');
			array_push($months, $now->format('m-Y'));	
		}
		return $months;
	}
	
	public static function getPayments(){
		return array(Helpers_Consts::PAY_MONTH => Helpers_Consts::PAY_MONTH, 
			Helpers_Consts::PAY_CLASS => Helpers_Consts::PAY_CLASS, 
			Helpers_Consts::PAY_SUBJECT => Helpers_Consts::PAY_SUBJECT);
	}
}