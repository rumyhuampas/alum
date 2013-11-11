<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Consts {
	/******** APLICACION *********/
	const APPNAME = 'Alumnitos';
	
	/******** SESSION *********/
	const SS_CURRENTUSERID = 'currentuserid';
	const SS_CURRENTUSERNAME = 'currentusername';
	const SS_CURRENTUSERAVATAR = 'currentuseravatar';
	
	/******** AUDIT *********/
	const OT_LOGIN = 'LOGIN';
	const OT_POST = 'POST';
	const OT_POSTDELETE = 'POST DELETE';
	const OT_CREATE = 'CREACION';
	const OT_MODIF = 'MODIFICACION';
	const OT_DELETE = 'ELIMINACION';
	const OT_REACT = 'REACTIVACION';
	
	const OTIMG_LOGIN = '/assets/images/Key.png';
	const OTIMG_POST = '/assets/images/Pencil.png';
	const OTIMG_POSTDELETE = '/assets/images/Bin.png';
	const OTIMG_CREATE = '/assets/images/Add.png';
	const OTIMG_MODIF = '/assets/images/Edit.png';
	const OTIMG_DELETE = '/assets/images/Bin.png';
	const OTIMG_REACT = '/assets/images/Undo.png';
	
	public static function getAuditIcon($type){
		switch($type){
			case self::OT_LOGIN: return self::OTIMG_LOGIN;
				break;
			case self::OT_POST: return self::OTIMG_POST;
				break;
			case self::OT_POSTDELETE: return self::OTIMG_POSTDELETE;
				break;
			case self::OT_CREATE: return self::OTIMG_CREATE;
				break;
			case self::OT_MODIF: return self::OTIMG_MODIF;
				break;
			case self::OT_DELETE: return self::OTIMG_DELETE;
				break;
			case self::OT_REACT: return self::OTIMG_REACT;
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
			case self::OT_CREATE: return 'Alumno creado';
				break;
			case self::OT_MODIF: return 'Alumno modificado';
				break;
			case self::OT_DELETE: return 'Alumno eliminado';
				break;
			case self::OT_REACT: return 'Alumno reactivado';
				break;
		}
	}
}