<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-10 10:28:12 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\profile.php [ 60 ] in C:\xampp\htdocs\Alum\application\views\profile.php:60
2013-11-10 10:28:12 --- DEBUG: #0 C:\xampp\htdocs\Alum\application\views\profile.php(60): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 60, Array)
#1 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\Alum\application\classes\Controller\profile.php(11): Kohana_View->render()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Alum\application\views\profile.php:60
2013-11-10 10:45:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_posts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-11-10 10:45:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-10 10:46:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_posts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-11-10 10:46:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-10 10:46:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_posts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-11-10 10:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-10 10:46:56 --- CRITICAL: Kohana_Exception [ 0 ]: The Posts property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:699
2013-11-10 10:46:56 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Posts', Object(Database_MySQL_Result))
#1 C:\xampp\htdocs\Alum\application\classes\Controller\profile.php(13): Kohana_ORM->__set('Posts', Object(Database_MySQL_Result))
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Profile->action_showuser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:699
2013-11-10 11:10:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_posts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-11-10 11:10:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-10 17:31:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Session' not found ~ APPPATH\classes\Controller\login.php [ 44 ] in :
2013-11-10 17:31:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-10 18:02:04 --- CRITICAL: Kohana_Exception [ 0 ]: The Userid property does not exist in the Model_Audit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:699
2013-11-10 18:02:04 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Userid', NULL)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\audits.php(22): Kohana_ORM->__set('Userid', NULL)
#2 C:\xampp\htdocs\Alum\application\classes\Controller\abmalum.php(44): Helpers_Audits::addAudit(NULL, 6, 'CREACION', '', '')
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_ABMAlum->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMAlum))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:699
2013-11-10 18:02:47 --- CRITICAL: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Audit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:699
2013-11-10 18:02:47 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('type', 'CREACION')
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\audits.php(24): Kohana_ORM->__set('type', 'CREACION')
#2 C:\xampp\htdocs\Alum\application\classes\Controller\abmalum.php(44): Helpers_Audits::addAudit(NULL, 7, 'CREACION', '', '')
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_ABMAlum->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMAlum))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:699
2013-11-10 20:41:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Student::count() ~ APPPATH\classes\Helpers\students.php [ 6 ] in :
2013-11-10 20:41:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-10 23:44:04 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Helpers_Posts::get(), called in C:\xampp\htdocs\Alum\application\classes\Controller\profile.php on line 60 and defined ~ APPPATH\classes\Helpers\posts.php [ 5 ] in C:\xampp\htdocs\Alum\application\classes\Helpers\posts.php:5
2013-11-10 23:44:04 --- DEBUG: #0 C:\xampp\htdocs\Alum\application\classes\Helpers\posts.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Controller\profile.php(60): Helpers_Posts::get('5')
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Profile->action_deletepost()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\Alum\application\classes\Helpers\posts.php:5