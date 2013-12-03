<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Consts {
	/******** SESSION *********/
	const SS_CURRENTUSERID = 'CURRENTUSERID';
	const SS_CURRENTUSERNAME = 'CURRENTUSERNAME';
	const SS_CURRENTUSERAVATAR = 'CURRENTUSERAVATAR';
	
	/******** CONFIG *********/
	const CONFIG_APPTITLE = 'APPTITLE';
	const CONFIG_DEFAULTUSERNAME = 'DEFAULTUSERNAME';
	const CONFIG_DEFAULTUSERAVATAR = 'DEFAULTUSERAVATAR';
	
	/******** AUDIT *********/
	const OT_LOGIN = 'LOGIN';
	const OT_POST = 'POST';
	const OT_POSTDELETE = 'POST DELETE';
	const OT_STDCREATE = 'ALUMNO CREACION';
	const OT_STDMODIF = 'ALUMNO MODIFICACION';
	const OT_STDDELETE = 'ALUMNO ELIMINACION';
	const OT_STDREACT = 'ALUMNO REACTIVACION';
	const OT_CONFIGCREATE = 'CONFIG CREACION';
	const OT_CONFIGDELETE = 'CONFIG ELIMINACION';
	const OT_CONFIGMODIF = 'CONFIG MODIFICACION';
	const OT_EVENTCREATE = 'EVENTO CREACION';
	const OT_EVENTDELETE = 'EVENTO ELIMINACION';
	const OT_EVENTMODIF = 'EVENTO MODIFICACION';
	const OT_PPCREATE = 'PLAN PAGO CREACION';
	const OT_PPDELETE = 'PLAN PAGO ELIMINACION';
	
	const OTIMG_LOGIN = '/assets/images/Key.png';
	const OTIMG_POST = '/assets/images/Pencil.png';
	const OTIMG_POSTDELETE = '/assets/images/Bin.png';
	const OTIMG_CREATE = '/assets/images/Add.png';
	const OTIMG_MODIF = '/assets/images/Edit.png';
	const OTIMG_BIN = '/assets/images/Bin.png';
	const OTIMG_DELETE = '/assets/images/Delete.png';
	const OTIMG_REACT = '/assets/images/Undo.png';
	
	/******** PAYMENTS *********/
	const PAY_MONTH = 'MENSUAL';
	const PAY_CLASS = 'POR CLASE';
	const PAY_SUBJECT = 'POR MATERIA';
	
	public static function getAuditIcon($type){
		switch($type){
			case self::OT_LOGIN: return self::OTIMG_LOGIN;
				break;
			case self::OT_POST: return self::OTIMG_POST;
				break;
			case self::OT_POSTDELETE: return self::OTIMG_POSTDELETE;
				break;
			case self::OT_STDCREATE: return self::OTIMG_CREATE;
				break;
			case self::OT_STDMODIF: return self::OTIMG_MODIF;
				break;
			case self::OT_STDDELETE: return self::OTIMG_BIN;
				break;
			case self::OT_STDREACT: return self::OTIMG_REACT;
				break;
			case self::OT_CONFIGCREATE: return self::OTIMG_CREATE;
				break;
			case self::OT_CONFIGDELETE: return self::OTIMG_BIN;
				break;
			case self::OT_CONFIGMODIF: return self::OTIMG_MODIF;
				break;
			case self::OT_EVENTCREATE: return self::OTIMG_CREATE;
				break;
			case self::OT_EVENTDELETE: return self::OTIMG_DELETE;
				break;
			case self::OT_EVENTMODIF: return self::OTIMG_MODIF;
				break;
			case self::OT_PPCREATE: return self::OTIMG_CREATE;
				break;
			case self::OT_PPDELETE: return self::OTIMG_DELETE;
				break;
		}
	}
	
	public static function getAuditText($type){
		switch($type){
			case self::OT_LOGIN: return 'Usuario logueado';
				break;
			case self::OT_POST: return 'Post creado';
				break;
			case self::OT_POSTDELETE: return 'Post eliminado';
				break;
			case self::OT_STDCREATE: return 'Alumno creado';
				break;
			case self::OT_STDMODIF: return 'Alumno modificado';
				break;
			case self::OT_STDDELETE: return 'Alumno eliminado';
				break;
			case self::OT_STDREACT: return 'Alumno reactivado';
				break;
			case self::OT_CONFIGCREATE: return 'Configuracion creada';
				break;
			case self::OT_CONFIGDELETE: return 'Configuracion eliminada';
				break;
			case self::OT_CONFIGMODIF: return 'Configuracion modificada';
				break;
			case self::OT_EVENTCREATE: return 'Evento creado';
				break;
			case self::OT_EVENTDELETE: return 'Evento eliminado';
				break;
			case self::OT_EVENTMODIF: return 'Evento modificado';
				break;
			case self::OT_PPCREATE: return 'Plan de pago creado';
				break;
			case self::OT_PPDELETE: return 'Plan de pago eliminado';
				break;
		}
	}
	
	public static function getAuditInfo($audit){
		switch($audit->Type){
			case self::OT_LOGIN: return Helpers_Users::get($audit->UserId)->Username;
				break;
			case self::OT_POST: return Helpers_Posts::getTextResume($audit->Info);
				break;
			case self::OT_POSTDELETE: return $audit->Info;
				break;
			case self::OT_STDCREATE: return Helpers_Students::getNameResume($audit->StudentId);
				break;
			case self::OT_STDMODIF: return Helpers_Students::getNameResume($audit->StudentId);
				break;
			case self::OT_STDDELETE: return Helpers_Students::getNameResume($audit->StudentId);
				break;
			case self::OT_STDREACT: return Helpers_Students::getNameResume($audit->StudentId);
				break;
			case self::OT_CONFIGCREATE: return Helpers_Configs::get($audit->Info)->Key;
				break;
			case self::OT_CONFIGDELETE: return $audit->Info;
				break;
			case self::OT_CONFIGMODIF: return Helpers_Configs::get($audit->Info)->Key;
				break;
			case self::OT_EVENTCREATE: return Helpers_Students::get(Helpers_Events::get($audit->Info)->StudentId)->Name;
				break;
			case self::OT_EVENTDELETE: return $audit->Info;
				break;
			case self::OT_EVENTMODIF: return Helpers_Students::get(Helpers_Events::get($audit->Info)->StudentId)->Name;
				break;
			case self::OT_PPCREATE:
				$pp = Helpers_PaymentsPlans::get($audit->Info);
				$std = Helpers_Students::get($pp->StudentId);
				return 'Alumno: '.$std->Name.' - Mes: '.$pp->Month;
				break;
			case self::OT_PPDELETE: return $audit->Info;
				break;
		}
	}
}