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
					Helpers_Session::set(Helpers_Consts::SS_CURRENTUSERID, $log->Id);
					Helpers_Session::set(Helpers_Consts::SS_CURRENTUSERNAME, $log->Name);
					Helpers_Session::set(Helpers_Consts::SS_CURRENTUSERAVATAR, $log->Avatar);
					
					$configs = Helpers_Configs::get();
					Helpers_Session::setConfigs($configs);
					
					Helpers_Audits::addAudit($log->Id, '', Helpers_Consts::OT_LOGIN);
					
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
		Helpers_Session::destroy();
		HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));
	}
}
