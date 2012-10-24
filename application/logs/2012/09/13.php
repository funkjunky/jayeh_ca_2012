<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-13 02:20:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/model/update.php [ 16 ]
2012-09-13 02:20:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/model/update.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:20:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/model/update.php [ 26 ]
2012-09-13 02:20:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/model/update.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:23:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH/classes/controller/admin/blog.php [ 118 ]
2012-09-13 02:23:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH/classes/controller/admin/blog.php [ 118 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/admin/blog.php(118): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 118, Array)
#1 [internal function]: Controller_Admin_Blog->action_postcomment()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 02:28:20 --- ERROR: View_Exception [ 0 ]: The requested view updates/viewall could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-13 02:28:20 --- STRACE: View_Exception [ 0 ]: The requested view updates/viewall could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('updates/viewall')
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/updates.php(10): Kohana_View->__construct('updates/viewall')
#2 [internal function]: Controller_Updates->action_index()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Updates))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-13 02:28:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:28:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:30:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:30:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:30:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: updates ~ APPPATH/classes/controller/updates.php [ 11 ]
2012-09-13 02:30:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: updates ~ APPPATH/classes/controller/updates.php [ 11 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/updates.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 11, Array)
#1 [internal function]: Controller_Updates->action_index()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Updates))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-13 02:31:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:31:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:33:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:33:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:33:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:33:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:35:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:35:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:36:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:36:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:39:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:39:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:41:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PRINT ~ APPPATH/views/updates/multiple.php [ 9 ]
2012-09-13 02:41:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PRINT ~ APPPATH/views/updates/multiple.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:41:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:41:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:42:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:42:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:42:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:42:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:43:03 --- ERROR: View_Exception [ 0 ]: The requested view single could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-13 02:43:03 --- STRACE: View_Exception [ 0 ]: The requested view single could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('single')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(30): Kohana_View->__construct('single', NULL)
#2 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/multiple.php(7): Kohana_View::factory('single')
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#11 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#12 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(23): Useradmin_Controller_App->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#14 [internal function]: Controller_Jayeh->after()
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Updates))
#16 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#19 {main}
2012-09-13 02:43:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:43:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:45:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:45:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:50:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:50:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:50:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:50:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:52:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:52:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 02:57:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 02:57:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:00:19 --- ERROR: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH/views/updates/single.php [ 2 ]
2012-09-13 03:00:19 --- STRACE: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH/views/updates/single.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:00:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::get_foreign_title() ~ APPPATH/views/updates/single.php [ 3 ]
2012-09-13 03:00:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::get_foreign_title() ~ APPPATH/views/updates/single.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:02:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 03:02:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:04:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 03:04:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:04:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Updatezz' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 03:04:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Updatezz' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:04:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 03:04:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:04:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Updatez' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 03:04:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Updatez' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:08:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_Updat' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 03:08:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_Updat' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:08:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-13 03:08:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:14:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:14:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:29:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:29:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:32:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:32:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:41:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:41:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:43:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:43:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:44:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: foreign_object ~ APPPATH/classes/model/update.php [ 26 ]
2012-09-13 03:44:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: foreign_object ~ APPPATH/classes/model/update.php [ 26 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/model/update.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 26, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/model/update.php(31): Model_Update->get_foreign_object(Object(Model_Update))
#2 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/single.php(3): Model_Update->get_foreign_title(Object(Model_Update))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/multiple.php(5): Kohana_View->__toString()
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#10 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#15 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#16 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(23): Useradmin_Controller_App->after()
#17 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#18 [internal function]: Controller_Jayeh->after()
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Updates))
#20 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#21 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#22 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#23 {main}
2012-09-13 03:44:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/update.php [ 33 ]
2012-09-13 03:44:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/update.php [ 33 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/model/update.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Funk/Dev...', 33, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/single.php(3): Model_Update->get_foreign_title(Object(Model_Update))
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/multiple.php(5): Kohana_View->__toString()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#15 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(23): Useradmin_Controller_App->after()
#16 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#17 [internal function]: Controller_Jayeh->after()
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Updates))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#22 {main}
2012-09-13 03:47:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:47:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:47:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:47:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:48:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: prop ~ APPPATH/classes/model/update.php [ 28 ]
2012-09-13 03:48:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: prop ~ APPPATH/classes/model/update.php [ 28 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/model/update.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 28, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/single.php(3): Model_Update->get_foreign_title(Object(Model_Update))
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/multiple.php(5): Kohana_View->__toString()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#15 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(23): Useradmin_Controller_App->after()
#16 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#17 [internal function]: Controller_Jayeh->after()
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Updates))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#22 {main}
2012-09-13 03:48:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:48:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:48:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:48:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-13 03:51:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: obj ~ APPPATH/classes/model/update.php [ 34 ]
2012-09-13 03:51:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: obj ~ APPPATH/classes/model/update.php [ 34 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/model/update.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 34, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/single.php(3): Model_Update->get_foreign_title(Object(Model_Update))
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/Funk/Development/Projects/jayeh.ca/application/views/updates/multiple.php(5): Kohana_View->__toString()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(27): Kohana_View->__toString()
#10 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#11 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#12 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#14 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#15 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(23): Useradmin_Controller_App->after()
#16 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(15): Controller_Subtemplate->after()
#17 [internal function]: Controller_Jayeh->after()
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Updates))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#22 {main}
2012-09-13 03:51:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2012-09-13 03:51:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}