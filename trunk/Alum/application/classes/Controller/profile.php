<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller {

	public function action_index()
	{
		$view=View::factory('profile');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$this->response->body($view->render());
	}

} // End Welcome
