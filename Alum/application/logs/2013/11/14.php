<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-14 20:26:25 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`End, students`.`Name` FROM `events` JOIN `students` ON (`events`.`IdStudent` =' at line 1 [ SELECT `events`.`Id, events`.`Start, events`.`End, students`.`Name` FROM `events` JOIN `students` ON (`events`.`IdStudent` = `students`.`Id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 20:26:25 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `events`...', false, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\events.php(14): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\Alum\application\classes\Controller\calendar.php(17): Helpers_Events::get()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Calendar->action_getevents()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 20:27:47 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`End, students`.`Name` FROM `events` JOIN `students` ON (`events`.`IdStudent` =' at line 1 [ SELECT `events`.`Id, events`.`Start, events`.`End, students`.`Name` FROM `events` JOIN `students` ON (`events`.`IdStudent` = `students`.`Id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 20:27:47 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `events`...', false, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\events.php(14): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\Alum\application\classes\Controller\calendar.php(17): Helpers_Events::get()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Calendar->action_getevents()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 20:28:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'events.IdStudent' in 'on clause' [ SELECT * FROM `events` JOIN `students` ON (`events`.`IdStudent` = `students`.`Id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 20:28:02 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\events.php(14): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\Alum\application\classes\Controller\calendar.php(17): Helpers_Events::get()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Calendar->action_getevents()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 20:46:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'students.Name' in 'field list' [ SELECT `events`.`Id` AS `id`, `events`.`Start` AS `start`, `events`.`End` AS `end`, `students`.`Name` AS `title` FROM `events` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 20:46:43 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `events`...', false, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\events.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\Alum\application\classes\Controller\calendar.php(17): Helpers_Events::get()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Calendar->action_getevents()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 21:53:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'e.Star' in 'field list' [ SELECT `e`.`Id` AS `id`, `e`.`Star` AS `start`, `e`.`End` AS `end`, `s`.`Name` AS `title` FROM `events` AS `e`, `students` AS `s` WHERE `e`.`StudentId` = 's.Id' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 21:53:46 --- DEBUG: #0 C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `e`.`Id`...', false, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\events.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\Alum\application\classes\Controller\calendar.php(17): Helpers_Events::get()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Calendar->action_getevents()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Alum\modules\database\classes\Kohana\Database\Query.php:251