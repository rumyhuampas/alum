<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMAlum extends Controller {

	public function action_index()
	{
		$view=View::factory('listalum');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$this->response->body($view->render());
	}
	
	public function action_new()
	{
		if(!isset($_POST['name'])){
			$view=View::factory('newalum');
			//$view->_title = Helpers_Const::APPNAME.' - Inicio';
			//$view->_menuid = Helpers_Const::MENUINICIOID;
			//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
			$this->response->body($view->render());
		}
	}

} // End Welcome
