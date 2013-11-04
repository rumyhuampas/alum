<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-02 23:19:29 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, integer given, called in C:\xampp\htdocs\Alum\application\views\newalum.php on line 44 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in C:\xampp\htdocs\Alum\system\classes\Kohana\Form.php:252
2013-11-02 23:19:29 --- DEBUG: #0 C:\xampp\htdocs\Alum\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 252, Array)
#1 C:\xampp\htdocs\Alum\application\views\newalum.php(44): Kohana_Form::select('days', 1, Array)
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\Alum\application\classes\Controller\abmalum.php(21): Kohana_View->render()
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_ABMAlum->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMAlum))
#8 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\Alum\system\classes\Kohana\Form.php:252
2013-11-02 23:40:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH\views\newalum.php [ 50 ] in :
2013-11-02 23:40:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :