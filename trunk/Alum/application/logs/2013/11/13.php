<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-13 18:42:46 --- CRITICAL: Database_Exception [ 1146 ]: Table 'alum.student' doesn't exist [ SELECT `name` FROM `student` WHERE `Active` = 'Y' ORDER BY `Name` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 18:42:46 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `name` F...', false, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\students.php(37): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\Alum\application\classes\Controller\menubar.php(6): Helpers_Students::getForAutoComplete()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Menubar->action_getStudents()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menubar))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 18:53:31 --- CRITICAL: Kohana_Exception [ 0 ]: The Obs property does not exist in the Model_Student class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:600
2013-11-13 18:53:31 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Obs')
#1 C:\xampp\htdocs\Alum\application\views\editalum.php(55): Kohana_ORM->__get('Obs')
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\Alum\application\classes\Controller\abmalum.php(72): Kohana_View->render()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_ABMAlum->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMAlum))
#8 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\Alum\modules\orm\classes\Kohana\ORM.php:600