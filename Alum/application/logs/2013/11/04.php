<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-04 19:35:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function format() on a non-object ~ APPPATH\views\editalum.php [ 40 ] in :
2013-11-04 19:35:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-11-04 19:44:38 --- CRITICAL: ErrorException [ 2 ]: array_fill() expects exactly 3 parameters, 2 given ~ APPPATH\classes\Helpers\combos.php [ 11 ] in :
2013-11-04 19:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_fill() ex...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Helpers\combos.php(11): array_fill(Array, 1)
#2 C:\xampp\htdocs\Alum\application\views\editalum.php(40): Helpers_Combos::getBirthDays()
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\Alum\application\classes\Controller\abmalum.php(54): Kohana_View->render()
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_ABMAlum->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMAlum))
#9 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-11-04 20:27:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::update() ~ APPPATH\classes\Controller\abmalum.php [ 72 ] in :
2013-11-04 20:27:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :