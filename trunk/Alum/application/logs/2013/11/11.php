<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-11 21:15:08 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\fulltimeline.php [ 81 ] in C:\xampp\htdocs\Alum\application\views\fulltimeline.php:81
2013-11-11 21:15:08 --- DEBUG: #0 C:\xampp\htdocs\Alum\application\views\fulltimeline.php(81): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\Alum\application\classes\Controller\profile.php(85): Kohana_View->render()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_Profile->action_showuserfulltimeline()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Alum\application\views\fulltimeline.php:81