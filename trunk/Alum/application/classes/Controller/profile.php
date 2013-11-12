<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller {

	public function action_showuser()
	{
		$view=View::factory('profile');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$IdUser = $this->request->param('id');
		$view->_user = Helpers_Users::get($IdUser);
		$view->_userPosts = Helpers_Posts::get($IdUser, 'N', 10);
		$view->_userAudits = Helpers_Audits::get($IdUser, 'N', 20);
		$view->_userIsStudent = 'N';
		$this->response->body($view->render());
	}
	
	public function action_showstudent()
	{
		$view=View::factory('profile');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$IdStudent = $this->request->param('id');
		$view->_user = Helpers_Students::get($IdStudent);
		$view->_userPosts = Helpers_Posts::get($IdStudent, 'Y', 10);
		$view->_userAudits = Helpers_Audits::get($IdStudent, 'Y', 20);
		$view->_userIsStudent = 'Y';
		$this->response->body($view->render());
	}
	
	public function action_newpost(){
		if(!isset($_POST['post'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'abmalum', 'action' => 'index')));
		}
		else{
			$post = ORM::factory('post');
			$post->CreatorId = $_POST['userId'];
			$post->Text = $_POST['post'];
			$post->CreatedAt = DB::expr('Now()');
			$post->IsStudent = $_POST['userIsStudent'];
			$post->create();
			
			if($_POST['userIsStudent'] == 'Y'){
				Helpers_Audits::addAudit(Session::instance()->get(Helpers_Consts::SS_CURRENTUSERID), $_POST['userId'], Helpers_Consts::OT_POST, $post->Id);
				HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'profile', 'action' => 'showstudent', 'id' => $_POST['userId'],
					'msgtype' => 'alert-success', 'msgtext' => 'Post agregado con exito.')));
			}
			else{
				Helpers_Audits::addAudit(Session::instance()->get(Helpers_Consts::SS_CURRENTUSERID), '', Helpers_Consts::OT_POST, $post->Id);
				HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'profile', 'action' => 'showuser', 'id' => $_POST['userId'],
					'msgtype' => 'alert-success', 'msgtext' => 'Post agregado con exito.')));
			}
		}
	}
	
	public function action_deletepost()
	{
		$post = Helpers_Posts::getById($_POST['postId']);
		$post->delete();
		
		if($_POST['userIsStudent'] == 'Y'){
			Helpers_Audits::addAudit(Session::instance()->get(Helpers_Consts::SS_CURRENTUSERID), $_POST['userId'], Helpers_Consts::OT_POSTDELETE, $post->Id);
			HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'profile', 'action' => 'showstudent', 'id' => $_POST['userId'],
				'msgtype' => 'alert-success', 'msgtext' => 'Post eliminado con exito.')));
		}
		else{
			Helpers_Audits::addAudit(Session::instance()->get(Helpers_Consts::SS_CURRENTUSERID), '', Helpers_Consts::OT_POSTDELETE, $post->Id);
			HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'profile', 'action' => 'showuser', 'id' => $_POST['userId'],
				'msgtype' => 'alert-success', 'msgtext' => 'Post eliminado con exito.')));
		}
	}
	
	public function action_showuserfulltimeline()
	{
		$view=View::factory('fulltimeline');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$IdUser = $this->request->param('id');
		$view->_user = Helpers_Users::get($IdUser);
		$view->_userAudits = Helpers_Audits::get($IdUser, 'N');
		$view->_userIsStudent = 'N';
		$this->response->body($view->render());
	}
	
	public function action_showstudentfulltimeline()
	{
		$view=View::factory('fulltimeline');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$IdStudent = $this->request->param('id');
		$view->_user = Helpers_Students::get($IdStudent);
		$view->_userAudits = Helpers_Audits::get($IdStudent, 'Y');
		$view->_userIsStudent = 'Y';
		$this->response->body($view->render());
	}
	
	public function action_showuserfullposts()
	{
		$view=View::factory('fullposts');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$IdUser = $this->request->param('id');
		$view->_user = Helpers_Users::get($IdUser);
		$view->_userPosts = Helpers_Posts::get($IdUser, 'N');
		$view->_userIsStudent = 'N';
		$this->response->body($view->render());
	}
	
	public function action_showstudentfullposts()
	{
		$view=View::factory('fullposts');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$IdStudent = $this->request->param('id');
		$view->_user = Helpers_Students::get($IdStudent);
		$view->_userPosts = Helpers_Posts::get($IdStudent, 'Y');
		$view->_userIsStudent = 'Y';
		$this->response->body($view->render());
	}

} // End Welcome
