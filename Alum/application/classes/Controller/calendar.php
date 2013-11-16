<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Calendar extends Controller {

	public function action_index()
	{
		$view=View::factory('calendar');
		$view->_alumnos = Helpers_Students::getActives();
		$this->response->body($view->render());
	}
	
	public function action_getevents(){
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Events::getasarray();
			echo json_encode($jsonarray);
		}
	}
	
	public function action_saveevent(){
		if ($this->request->is_ajax()) {
			$id = $_POST['eventid'];
			if($id == ''){
				$event = ORM::factory('event');
				$std = Helpers_Students::getByName($_POST['studentname']);
				$event->StudentId = $std->Id;
				$event->Start = date('Y-m-d H:i:s',strtotime($_POST['start']));
				$event->End = date('Y-m-d H:i:s',strtotime($_POST['end']));
				$event->create();
				
				Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $std->Id, Helpers_Consts::OT_EVENTCREATE, $event->Id);
			}
			else{
				$event = Helpers_Events::get($id);
				$event->Start = date('Y-m-d H:i:s',strtotime($_POST['start']));
				$event->End = date('Y-m-d H:i:s',strtotime($_POST['end']));
				$event->update();
				
				Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), $std->Id, Helpers_Consts::OT_EVENTMODIF, $event->Id);
			}
			echo $event->Id;
		}
	}
	
	public function action_deleteevent(){
		if ($this->request->is_ajax()) {
			$id = $_POST['eventid'];
			if($id != ''){
				$event = Helpers_Events::get($id);
				$event->delete();
				
				Helpers_Audits::addAudit(Helpers_Session::get(Helpers_Consts::SS_CURRENTUSERID), '', Helpers_Consts::OT_EVENTDELETE, $id);
			}
			echo 'success';
		}
	}

} // End Welcome
