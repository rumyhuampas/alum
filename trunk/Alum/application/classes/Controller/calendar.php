<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Calendar extends Controller {

	public function action_index()
	{
		$view=View::factory('calendar');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$view->_alumnos = Helpers_Students::get();
		$this->response->body($view->render());
	}

} // End Welcome
