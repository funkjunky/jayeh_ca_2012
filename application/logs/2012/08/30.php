<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-30 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 13:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 13:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 13:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 13:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 13:58:51 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Twoteirtemplate' not found ~ APPPATH/classes/controller/article.php [ 3 ]
2012-08-30 13:58:51 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Twoteirtemplate' not found ~ APPPATH/classes/controller/article.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 13:59:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/controller/twoteirtemplate.php [ 5 ]
2012-08-30 13:59:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/controller/twoteirtemplate.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:14:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/twoteirtemplate.php [ 14 ]
2012-08-30 14:14:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/twoteirtemplate.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:15:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::get() ~ APPPATH/classes/controller/twoteirtemplate.php [ 12 ]
2012-08-30 14:15:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::get() ~ APPPATH/classes/controller/twoteirtemplate.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:15:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 2 ]
2012-08-30 14:15:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 2 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 2, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template/default.php(37): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/twoteirtemplate.php(16): Useradmin_Controller_App->after()
#11 [internal function]: Controller_Twoteirtemplate->after()
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-30 14:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:16:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 2 ]
2012-08-30 14:16:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 2 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 2, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template/default.php(37): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/twoteirtemplate.php(16): Useradmin_Controller_App->after()
#11 [internal function]: Controller_Twoteirtemplate->after()
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-30 14:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:16:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 2 ]
2012-08-30 14:16:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 2 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 2, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template/default.php(37): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/twoteirtemplate.php(16): Useradmin_Controller_App->after()
#11 [internal function]: Controller_Twoteirtemplate->after()
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-30 14:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:28:08 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 339 ]
2012-08-30 14:28:08 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 339 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template/default.php(37): Kohana_View->__toString()
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/twoteirtemplate.php(16): Useradmin_Controller_App->after()
#8 [internal function]: Controller_Twoteirtemplate->after()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-30 14:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:48:38 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:48:38 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:54:45 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:54:45 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:01 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:55:01 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:03 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:55:03 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:03 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:55:03 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:04 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:55:04 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:04 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:55:04 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:04 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:55:04 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:04 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-30 14:55:04 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:55:19 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-08-30 14:55:19 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:56:05 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-08-30 14:56:05 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:56:06 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-08-30 14:56:06 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:56:06 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-08-30 14:56:06 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:56:07 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-08-30 14:56:07 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:56:07 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-08-30 14:56:07 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:56:07 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-08-30 14:56:07 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Subtemplate' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 14:57:27 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-08-30 14:57:27 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(84): Kohana_Session::instance()
#3 [internal function]: Useradmin_Controller_App->before()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-30 14:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 14:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 14:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:34:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '(' ~ APPPATH/classes/controller/changelog.php [ 38 ]
2012-08-30 23:34:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '(' ~ APPPATH/classes/controller/changelog.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 23:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:34:39 --- ERROR: ErrorException [ 2 ]: define() expects at least 2 parameters, 1 given ~ APPPATH/views/changelog/edit.php [ 1 ]
2012-08-30 23:34:39 --- STRACE: ErrorException [ 2 ]: define() expects at least 2 parameters, 1 given ~ APPPATH/views/changelog/edit.php [ 1 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'define() expect...', '/Users/Funk/Dev...', 1, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/views/changelog/edit.php(1): define('SYSPATH')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/Funk/Development/Projects/jayeh.ca/application/views/changelog/template.php(4): Kohana_View->__toString()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/Funk/Development/Projects/jayeh.ca/application/views/template/default.php(18): Kohana_View->__toString()
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#15 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#16 [internal function]: Controller_Subtemplate->after()
#17 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Changelog))
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#21 {main}
2012-08-30 23:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-30 23:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-30 23:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}