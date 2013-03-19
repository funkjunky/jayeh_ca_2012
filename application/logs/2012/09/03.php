<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-03 00:04:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/blog.php [ 5 ]
2012-09-03 00:04:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/blog.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 00:04:56 --- ERROR: Database_Exception [ 1146 ]: Table 'jayeh.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 00:04:56 --- STRACE: Database_Exception [ 1146 ]: Table 'jayeh.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('blogs')
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(19): Kohana_ORM->__construct()
#6 [internal function]: Controller_Blog->action_new()
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-03 00:12:06 --- ERROR: Kohana_Exception [ 0 ]: The label property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-03 00:12:06 --- STRACE: Kohana_Exception [ 0 ]: The label property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/edit.php(6): Kohana_ORM->__get('label')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(4): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#13 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#15 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#16 [internal function]: Controller_Jayeh->after()
#17 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#21 {main}
2012-09-03 02:23:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
2012-09-03 02:23:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 02:23:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
2012-09-03 02:23:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 02:24:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
2012-09-03 02:24:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 02:24:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
2012-09-03 02:24:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 02:24:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
2012-09-03 02:24:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 02:24:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
2012-09-03 02:24:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 02:24:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
2012-09-03 02:24:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/topleveltemplate.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 02:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.tagsinput.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.tagsinput.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputmodifier.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputmodifier.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:46:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/blog.php [ 28 ]
2012-09-03 02:46:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/blog.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 02:47:09 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/controller/jayeh.php [ 25 ]
2012-09-03 02:47:09 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/controller/jayeh.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 02:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.tagsinput.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.tagsinput.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.tagsinput.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.tagsinput.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputmodifier.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputmodifier.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.tagsinput.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.tagsinput.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputmodifier.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputmodifier.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.tagsinput.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.tagsinput.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 02:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 02:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 03:14:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: js ~ APPPATH/views/topleveltemplate.php [ 12 ]
2012-09-03 03:14:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: js ~ APPPATH/views/topleveltemplate.php [ 12 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 12, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 03:14:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: js ~ APPPATH/views/topleveltemplate.php [ 12 ]
2012-09-03 03:14:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: js ~ APPPATH/views/topleveltemplate.php [ 12 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 12, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#6 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#8 [internal function]: Controller_Jayeh->after()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-03 03:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fdsfds.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 03:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fdsfds.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 03:37:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `tag`.* FROM `tags` AS `tag` WHERE 0 = 'name' AND `1` = ',' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 03:37:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `tag`.* FROM `tags` AS `tag` WHERE 0 = 'name' AND `1` = ',' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `tag`.* ...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(57): Kohana_ORM->__construct(Array)
#5 [internal function]: Controller_Blog->action_post()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-03 03:39:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `tag`.* FROM `tags` AS `tag` WHERE 0 = 'name' AND `1` = 'tag1' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 03:39:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `tag`.* FROM `tags` AS `tag` WHERE 0 = 'name' AND `1` = 'tag1' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `tag`.* ...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(57): Kohana_ORM->__construct(Array)
#5 [internal function]: Controller_Blog->action_post()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-03 03:39:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Article::add_tag() ~ APPPATH/classes/controller/blog.php [ 58 ]
2012-09-03 03:39:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Article::add_tag() ~ APPPATH/classes/controller/blog.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 03:42:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Article::add_tag() ~ APPPATH/classes/controller/blog.php [ 58 ]
2012-09-03 03:42:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Article::add_tag() ~ APPPATH/classes/controller/blog.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 03:44:17 --- ERROR: ErrorException [ 8 ]: Undefined index: tags ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
2012-09-03 03:44:17 --- STRACE: ErrorException [ 8 ]: Undefined index: tags ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1403): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Funk/Dev...', 1403, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(58): Kohana_ORM->add('tags', Object(Model_Tag))
#2 [internal function]: Controller_Blog->action_post()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-03 03:47:21 --- ERROR: ErrorException [ 8 ]: Undefined index: tags ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
2012-09-03 03:47:21 --- STRACE: ErrorException [ 8 ]: Undefined index: tags ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1403): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Funk/Dev...', 1403, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(58): Kohana_ORM->add('tags', Object(Model_Tag))
#2 [internal function]: Controller_Blog->action_post()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-03 03:59:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/model/article.php [ 9 ]
2012-09-03 03:59:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/model/article.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 03:59:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `tag_article` (`article_id`, `tag_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 03:59:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `tag_article` (`article_id`, `tag_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(58): Kohana_ORM->add('tags', Object(Model_Tag))
#3 [internal function]: Controller_Blog->action_post()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-03 04:01:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ')' ~ APPPATH/classes/controller/blog.php [ 58 ]
2012-09-03 04:01:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ')' ~ APPPATH/classes/controller/blog.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 04:02:08 --- ERROR: Database_Exception [ 1146 ]: Table 'jayeh.tag_article' doesn't exist [ INSERT INTO `tag_article` (`article_id`, `tag_id`) VALUES (NULL, 1) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 04:02:08 --- STRACE: Database_Exception [ 1146 ]: Table 'jayeh.tag_article' doesn't exist [ INSERT INTO `tag_article` (`article_id`, `tag_id`) VALUES (NULL, 1) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(61): Kohana_ORM->add('tags', Object(Model_Tag))
#3 [internal function]: Controller_Blog->action_post()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-03 04:02:55 --- ERROR: Database_Exception [ 1146 ]: Table 'jayeh.tag_article' doesn't exist [ INSERT INTO `tag_article` (`article_id`, `tag_id`) VALUES (5, '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 04:02:55 --- STRACE: Database_Exception [ 1146 ]: Table 'jayeh.tag_article' doesn't exist [ INSERT INTO `tag_article` (`article_id`, `tag_id`) VALUES (5, '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(62): Kohana_ORM->add('tags', Object(Model_Tag))
#3 [internal function]: Controller_Blog->action_post()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-03 04:04:20 --- ERROR: Database_Exception [ 1146 ]: Table 'jayeh.article_tag' doesn't exist [ INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES (6, '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 04:04:20 --- STRACE: Database_Exception [ 1146 ]: Table 'jayeh.article_tag' doesn't exist [ INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES (6, '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(62): Kohana_ORM->add('tags', Object(Model_Tag))
#3 [internal function]: Controller_Blog->action_post()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-03 04:11:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: strtag ~ APPPATH/classes/controller/blog.php [ 47 ]
2012-09-03 04:11:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: strtag ~ APPPATH/classes/controller/blog.php [ 47 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 47, Array)
#1 [internal function]: Controller_Blog->action_edit()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 04:11:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: strtag ~ APPPATH/classes/controller/blog.php [ 47 ]
2012-09-03 04:11:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: strtag ~ APPPATH/classes/controller/blog.php [ 47 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 47, Array)
#1 [internal function]: Controller_Blog->action_edit()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 04:11:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH/views/blog/edit.php [ 11 ]
2012-09-03 04:11:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH/views/blog/edit.php [ 11 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 11, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(4): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#13 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#15 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#16 [internal function]: Controller_Jayeh->after()
#17 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#21 {main}
2012-09-03 04:12:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH/views/blog/edit.php [ 11 ]
2012-09-03 04:12:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH/views/blog/edit.php [ 11 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 11, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(4): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#13 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#15 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#16 [internal function]: Controller_Jayeh->after()
#17 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#21 {main}
2012-09-03 14:43:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/views/blog/edit.php [ 26 ]
2012-09-03 14:43:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/views/blog/edit.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 15:43:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/blog.php [ 21 ]
2012-09-03 15:43:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/blog.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 15:43:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/blog.php [ 21 ]
2012-09-03 15:43:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/blog.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 15:44:12 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH/classes/kohana/html.php [ 66 ]
2012-09-03 15:44:12 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH/classes/kohana/html.php [ 66 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/html.php(66): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Funk/Dev...', 66, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/html.php(322): Kohana_HTML::chars(Object(Database_MySQL_Result))
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/edit.php(11): Kohana_Form::input('tags', Object(Database_MySQL_Result), Array)
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(4): Kohana_View->__toString()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#16 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#17 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#18 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#19 [internal function]: Controller_Jayeh->after()
#20 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#21 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#22 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#23 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#24 {main}