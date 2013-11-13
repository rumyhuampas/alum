<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMAlum extends Controller {

	public function action_index()
	{
		$view=View::factory('listalum');
		//$view->_title = Helpers_Const::APPNAME.' - Inicio';
		//$view->_menuid = Helpers_Const::MENUINICIOID;
		//$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$view->_alumnos = Helpers_Students::get();
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
		else{
			if(!Helpers_Students::exists($_POST['name'])){
				$std = ORM::factory('student');
				$std->Name = $_POST['name'];
				$std->Birth = date('Y-m-d', strtotime($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']));
				$std->Father = $_POST['father'];
				$std->Mother = $_POST['mother'];
				$std->Contact = $_POST['contact'];
				$std->Phone1 = $_POST['phone1'];
				$std->Phone2 = $_POST['phone2'];
				$std->Phone3 = $_POST['phone3'];
				$std->Address = $_POST['address'];
				$std->City = $_POST['city'];
				$std->State = $_POST['state'];
				$std->Email = $_POST['email'];
				$std->CreatedAt = DB::expr('Now()');
				$std->ModifiedOn = DB::expr('Now()');
				$std->Active = 'Y';
				$std->create();
				
				Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $std->Id, Helpers_Consts::OT_CREATE);
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmalum', 'action' => 'index',
					'msgtype' => 'alert-success', 'msgtext' => 'Alumno agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmalum', 'action' => 'new',
					'msgtype' => 'alert-danger', 'msgtext' => 'El alumno ya existe.')));
			}
		}
	}

	public function action_show(){
		$alumid = $_POST['alumid'];
		if ($this->request->is_ajax()) {
			$std = Helpers_Students::getByName($_POST['name']);
			if($std->loaded()){
				echo URL::base().Route::get('default')->uri(array('controller' => 'profile', 'action' => 'showstudent',
					'id' => $std->Id));
			}
			else{
				echo 'ERROR';
			}
		}
		else{
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'profile', 'action' => 'showstudent',
				'id' => $alumid)));
		}	
	}

	public function action_edit()
	{
		if(!isset($_POST['name'])){
			$alum = Helpers_Students::get($_POST['alumid']);
			$view=View::factory('editalum');
			$view->_alum = $alum;
			$this->response->body($view->render());
		}
		else{
			$std = Helpers_Students::get($_POST['alumid']);
			$std->Name = $_POST['name'];
			$std->Birth = date('Y-m-d', strtotime($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']));
			$std->Father = $_POST['father'];
			$std->Mother = $_POST['mother'];
			$std->Contact = $_POST['contact'];
			$std->Phone1 = $_POST['phone1'];
			$std->Phone2 = $_POST['phone2'];
			$std->Phone3 = $_POST['phone3'];
			$std->Address = $_POST['address'];
			$std->City = $_POST['city'];
			$std->State = $_POST['state'];
			$std->Email = $_POST['email'];
			$std->ModifiedOn = DB::expr('Now()');
			$std->update();
			
			Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $std->Id, Helpers_Consts::OT_MODIF);
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmalum', 'action' => 'index',
				'msgtype' => 'alert-success', 'msgtext' => 'Alumno modificado con exito.')));
		}
	}

	public function action_delete()
	{
		$std = Helpers_Students::get($_POST['alumid']);
		$std->Active = 'N';
		$std->ModifiedOn = DB::expr('Now()');
		$std->update();
		
		Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $std->Id, Helpers_Consts::OT_DELETE);
		
		HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmalum', 'action' => 'index',
			'msgtype' => 'alert-success', 'msgtext' => 'Alumno eliminado con exito.')));
	}
	
	public function action_reactivate()
	{
		$std = Helpers_Students::get($_POST['alumid']);
		$std->Active = 'Y';
		$std->ModifiedOn = DB::expr('Now()');
		$std->update();
		
		Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $std->Id, Helpers_Consts::OT_REACT);
		
		HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmalum', 'action' => 'index',
			'msgtype' => 'alert-success', 'msgtext' => 'Alumno reactivado con exito.')));
	}

} // End Welcome
