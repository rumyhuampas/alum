<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Config extends Controller {

	public function action_index()
	{
		$view=View::factory('config');
		$view->_configs = Helpers_Configs::get();
		$this->response->body($view->render());
	}
	
	public function action_add()
	{
		if(!isset($_POST['key'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'config')));
		}
		else{
			if(!Helpers_Configs::exists($_POST['key'])){
				$config = ORM::factory('config');
				$config->Key = $_POST['key'];
				$config->Value = $_POST['value'];
				$config->create();
				
				Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), '', Helpers_Consts::OT_CONFIGCREATE, $_POST['key']);
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'config', 'action' => 'index',
					'msgtype' => 'alert-success', 'msgtext' => 'Configuracion agregada con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'config', 'action' => 'index',
					'msgtype' => 'alert-danger', 'msgtext' => 'La configuracion ya existe.')));
			}
		}
	}
	
	public function action_edit()
	{
		$configs = Helpers_Configs::get();
		foreach($configs as $config){
			if($config->Value != $_POST[$config->Key]){
				$config->Value = $_POST[$config->Key];
				$config->update();
				
				Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), '', Helpers_Consts::OT_CONFIGMODIF, $config->Key);
			}
		}
		
		HTTP::redirect(Route::get('msg')->uri(array('controller' => 'config', 'action' => 'index',
			'msgtype' => 'alert-success', 'msgtext' => 'Configuraciones modificadas con exito.')));
	}
	
	public function action_delete()
	{
		if ($this->request->is_ajax()) {
			$config = Helpers_Configs::get($_POST['configkey']);
			$config->delete();
			
			Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $std->Id, Helpers_Consts::OT_CONFIGDELETE, $_POST['configkey']);
			
			echo URL::base().Route::get('msg')->uri(array('controller' => 'config', 'action' => 'index',
				'msgtype' => 'alert-success', 'msgtext' => 'Configuracion eliminada con exito.'));
		}
	}

} // End Welcome
