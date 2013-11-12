<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Config extends Controller {

	public function action_index()
	{
		$view=View::factory('config');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$view->_configs = Helpers_Configs::get();
		$this->response->body($view->render());
	}

} // End Welcome
