<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menubar extends Controller {
	
	public function action_getStudents(){
		echo json_encode(Helpers_Students::getForAutoComplete());
	}
}