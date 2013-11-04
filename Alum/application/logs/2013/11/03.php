<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-03 00:38:30 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\MySQL.php:75
2013-11-03 00:38:30 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('students')
#4 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\Alum\application\classes\Controller\abmalum.php(24): Kohana_ORM::factory('student')
#9 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_ABMAlum->action_new()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMAlum))
#12 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\MySQL.php:75
2013-11-03 00:52:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Students' not found ~ APPPATH\classes\Controller\abmalum.php [ 11 ] in :
2013-11-03 00:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-03 00:52:50 --- CRITICAL: Kohana_Exception [ 0 ]: The Age property does not exist in the Model_Student class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:600
2013-11-03 00:52:50 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Age')
#1 C:\xampp\htdocs\Alum\application\views\listalum.php(54): Kohana_ORM->__get('Age')
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\Alum\application\classes\Controller\abmalum.php(12): Kohana_View->render()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_ABMAlum->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMAlum))
#8 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:600