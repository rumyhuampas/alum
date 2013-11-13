<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-12 22:03:58 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete config model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\xampp\htdocs\Alum\application\classes\Controller\config.php:43
2013-11-12 22:03:58 --- DEBUG: #0 C:\xampp\htdocs\Alum\application\classes\Controller\config.php(43): Kohana_ORM->delete()
#1 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Config->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\Alum\application\classes\Controller\config.php:43
2013-11-12 23:45:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:45:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:45:24 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:45:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:46:47 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:46:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:46:58 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:47:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:47:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:48:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:48:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:48:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:49:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\_headerbar.php [ 16 ] in :
2013-11-12 23:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:57:52 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\login.php [ 34 ] in :
2013-11-12 23:57:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-12 23:58:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\login.php [ 34 ] in :
2013-11-12 23:58:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :