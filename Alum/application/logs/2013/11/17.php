<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-17 21:25:36 --- CRITICAL: ErrorException [ 2 ]: strtotime() expects parameter 1 to be string, object given ~ APPPATH\classes\Controller\paymentsplan.php [ 13 ] in :
2013-11-17 21:25:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Controller\paymentsplan.php(13): strtotime(Object(DateTime))
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_PaymentsPlan->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PaymentsPlan))
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-11-17 21:26:37 --- CRITICAL: ErrorException [ 2 ]: strtotime() expects parameter 2 to be long, object given ~ APPPATH\classes\Controller\paymentsplan.php [ 13 ] in :
2013-11-17 21:26:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Controller\paymentsplan.php(13): strtotime('-1 month', Object(DateTime))
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_PaymentsPlan->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PaymentsPlan))
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-11-17 21:31:57 --- CRITICAL: ErrorException [ 2 ]: strtotime() expects parameter 2 to be long, object given ~ APPPATH\classes\Controller\paymentsplan.php [ 13 ] in :
2013-11-17 21:31:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\Alum\application\classes\Controller\paymentsplan.php(13): strtotime('-1 month', Object(DateTime))
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_PaymentsPlan->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PaymentsPlan))
#5 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-11-17 21:32:14 --- CRITICAL: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ APPPATH\views\paymentsplan.php [ 39 ] in C:\xampp\htdocs\Alum\application\views\paymentsplan.php:39
2013-11-17 21:32:14 --- DEBUG: #0 C:\xampp\htdocs\Alum\application\views\paymentsplan.php(39): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Alum\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\Alum\application\classes\Controller\paymentsplan.php(10): Kohana_View->render()
#4 C:\xampp\htdocs\Alum\system\classes\Kohana\Controller.php(84): Controller_PaymentsPlan->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_PaymentsPlan))
#7 C:\xampp\htdocs\Alum\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Alum\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Alum\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Alum\application\views\paymentsplan.php:39