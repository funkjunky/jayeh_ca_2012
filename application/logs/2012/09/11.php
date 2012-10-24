<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-11 01:52:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: comments ~ APPPATH/views/blog/view.php [ 16 ]
2012-09-11 01:52:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: comments ~ APPPATH/views/blog/view.php [ 16 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 16, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#13 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(23): Useradmin_Controller_App->after()
#15 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#16 [internal function]: Controller_Jayeh->after()
#17 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#21 {main}
2012-09-11 02:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-11 02:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-11 02:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-11 02:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-11 02:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/postcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-11 02:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/postcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-11 02:21:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/blog/view.php [ 21 ]
2012-09-11 02:21:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/blog/view.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}