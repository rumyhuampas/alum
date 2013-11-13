<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function action_index()
	{
		if(Helpers_Users::IsAnyUser()){
			$view = View::factory('login');
		}
		else{
			$view = View::factory('users');
		}
		$this->response->body($view->render());
	}
	
	public function action_login(){
		if(isset($_POST['username'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			
			if($user != '' && $pass != ''){
				$log = Helpers_Users::getByCredentials($user, $pass);
				if($log->loaded()){
					$session = Session::instance();
					$session->set(Helpers_Consts::SS_CURRENTUSERID, $log->Id);
					$session->set(Helpers_Consts::SS_CURRENTUSERNAME, $log->Name);
					$session->set(Helpers_Consts::SS_CURRENTUSERAVATAR, $log->Avatar);
					
					Helpers_Audits::addAudit($log->Id, '', Helpers_Consts::OT_LOGIN);
					
					//$configobj = Kohana::$config->load(Helpers_Consts::APPCONFIGGROUP);
					$configs = Helpers_Configs::get();
					foreach($configs as $config){
						Kohana::$config->load(Helpers_Consts::APPCONFIGGROUP)->set($config->Key, $config->Value);
					}
					
					HTTP::redirect(Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')));
				}
				else{
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
						'msgtype' => 'alert-danger', 'msgtext' => 'Usuario o contrasena incorrectos.')));
				}
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
					'msgtype' => 'alert-danger', 'msgtext' => 'Debe ingresar usuario y contrasena.')));
			}
		}
	}
	
	public function action_exit(){
		$session = Session::instance();
		$session->delete(Helpers_Consts::SS_CURRENTUSERID);
		$session->delete(Helpers_Consts::SS_CURRENTUSERNAME);
		$session->delete(Helpers_Consts::SS_CURRENTUSERAVATAR);
		HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));
	}
}
