<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-31 00:36:52 --- ERROR: View_Exception [ 0 ]: The requested view topleveltemplate could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-31 00:36:52 --- STRACE: View_Exception [ 0 ]: The requested view topleveltemplate could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('topleveltemplat...')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('topleveltemplat...', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(125): Kohana_View::factory('topleveltemplat...')
#3 [internal function]: Useradmin_Controller_App->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Changelog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-31 00:37:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/topleveltemplate.php [ 3 ]
2012-08-31 00:37:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/topleveltemplate.php [ 3 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 3, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 [internal function]: Controller_Subtemplate->after()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Changelog))
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-31 00:39:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/topleveltemplate.php [ 3 ]
2012-08-31 00:39:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/topleveltemplate.php [ 3 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 3, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 [internal function]: Controller_Subtemplate->after()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Changelog))
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-31 00:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 00:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 00:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 00:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 02:32:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC, expecting ',' or ';' ~ APPPATH/classes/controller/welcome.php [ 6 ]
2012-08-31 02:32:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC, expecting ',' or ';' ~ APPPATH/classes/controller/welcome.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-31 02:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 02:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 02:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 02:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 02:33:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: headertext ~ APPPATH/views/topleveltemplate.php [ 3 ]
2012-08-31 02:33:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: headertext ~ APPPATH/views/topleveltemplate.php [ 3 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 3, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 [internal function]: Controller_Subtemplate->after()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#12 {main}