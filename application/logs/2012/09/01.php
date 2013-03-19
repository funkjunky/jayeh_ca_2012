<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-01 16:29:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_Aboutdata' not found ~ APPPATH/classes/controller/about.php [ 16 ]
2012-09-01 16:29:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_Aboutdata' not found ~ APPPATH/classes/controller/about.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 16:30:26 --- ERROR: View_Exception [ 0 ]: The requested view about/editdata could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-01 16:30:26 --- STRACE: View_Exception [ 0 ]: The requested view about/editdata could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('about/editdata')
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(19): Kohana_View->__construct('about/editdata')
#2 [internal function]: Controller_About->action_newdata()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-01 16:30:56 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'close' ~ APPPATH/views/about/editdata.php [ 12 ]
2012-09-01 16:30:56 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'close' ~ APPPATH/views/about/editdata.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 16:46:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 63 ]
2012-09-01 16:46:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 16:46:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 63 ]
2012-09-01 16:46:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 16:47:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 63 ]
2012-09-01 16:47:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 17:21:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: profiles ~ APPPATH/views/about/editexternal.php [ 18 ]
2012-09-01 17:21:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: profiles ~ APPPATH/views/about/editexternal.php [ 18 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/editexternal.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 18, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#12 [internal function]: Controller_Jayeh->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-01 17:22:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: profiles ~ APPPATH/views/about/editexternal.php [ 18 ]
2012-09-01 17:22:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: profiles ~ APPPATH/views/about/editexternal.php [ 18 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/editexternal.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 18, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#12 [internal function]: Controller_Jayeh->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-01 17:28:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovement.php [ 5 ]
2012-09-01 17:28:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovement.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 17:29:19 --- ERROR: View_Exception [ 0 ]: The requested view about/editimprovement could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-01 17:29:19 --- STRACE: View_Exception [ 0 ]: The requested view about/editimprovement could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('about/editimpro...')
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(110): Kohana_View->__construct('about/editimpro...')
#2 [internal function]: Controller_About->action_newimprovement()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-01 17:29:49 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Selfimprovement class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-01 17:29:49 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Selfimprovement class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/editimprovement.php(3): Kohana_ORM->__get('id')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#12 [internal function]: Controller_Jayeh->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-01 17:30:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: aboutimprov ~ APPPATH/views/about/editimprovement.php [ 15 ]
2012-09-01 17:30:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: aboutimprov ~ APPPATH/views/about/editimprovement.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/editimprovement.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#12 [internal function]: Controller_Jayeh->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-01 17:32:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: improvements ~ APPPATH/views/about/editimprovement.php [ 15 ]
2012-09-01 17:32:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: improvements ~ APPPATH/views/about/editimprovement.php [ 15 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/editimprovement.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 15, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#12 [internal function]: Controller_Jayeh->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-01 17:35:05 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-01 17:35:05 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(145): Kohana_ORM->delete()
#1 [internal function]: Controller_About->action_deleteimprovement()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 17:41:05 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-01 17:41:05 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(145): Kohana_ORM->delete()
#1 [internal function]: Controller_About->action_deleteimprovement()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 17:41:10 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-01 17:41:10 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(145): Kohana_ORM->delete()
#1 [internal function]: Controller_About->action_deleteimprovement()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 17:41:27 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-01 17:41:27 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(145): Kohana_ORM->delete()
#1 [internal function]: Controller_About->action_deleteimprovement()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 17:45:43 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-01 17:45:43 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(145): Kohana_ORM->delete()
#1 [internal function]: Controller_About->action_deleteimprovement()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 17:45:59 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-01 17:45:59 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(145): Kohana_ORM->delete()
#1 [internal function]: Controller_About->action_deleteimprovement()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 17:46:44 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-01 17:46:44 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovement model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(145): Kohana_ORM->delete()
#1 [internal function]: Controller_About->action_deleteimprovement()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-01 21:48:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'selfimprovement.id' in 'where clause' [ SELECT `selfimprovement`.* FROM `selfimprovements` AS `selfimprovement` WHERE `selfimprovement`.`id` = '0' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 21:48:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'selfimprovement.id' in 'where clause' [ SELECT `selfimprovement`.* FROM `selfimprovements` AS `selfimprovement` WHERE `selfimprovement`.`id` = '0' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `selfimp...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(263): Kohana_ORM->find()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(121): Kohana_ORM->__construct('0')
#5 [internal function]: Controller_About->action_editimprovement()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-01 21:50:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 122 ]
2012-09-01 21:50:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/controller/about.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 21:50:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'selfimprovement.id' in 'where clause' [ SELECT `selfimprovement`.* FROM `selfimprovements` AS `selfimprovement` WHERE `selfimprovement`.`id` = '0' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 21:50:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'selfimprovement.id' in 'where clause' [ SELECT `selfimprovement`.* FROM `selfimprovements` AS `selfimprovement` WHERE `selfimprovement`.`id` = '0' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `selfimp...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(263): Kohana_ORM->find()
#4 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('0')
#5 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(122): Kohana_ORM::factory('selfimprovement', '0')
#6 [internal function]: Controller_About->action_editimprovement()
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-01 21:57:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovementstat.php [ 5 ]
2012-09-01 21:57:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovementstat.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 21:58:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovementstat.php [ 6 ]
2012-09-01 21:58:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovementstat.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 21:58:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovementstat.php [ 6 ]
2012-09-01 21:58:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/selfimprovementstat.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 21:58:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Selfimprovementstats' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-01 21:58:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Selfimprovementstats' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 22:01:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Selfimprovementstat::findall() ~ APPPATH/classes/controller/about.php [ 157 ]
2012-09-01 22:01:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Selfimprovementstat::findall() ~ APPPATH/classes/controller/about.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-01 22:01:31 --- ERROR: Kohana_Exception [ 0 ]: The improve_id property does not exist in the Model_Selfimprovementstat class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-01 22:01:31 --- STRACE: Kohana_Exception [ 0 ]: The improve_id property does not exist in the Model_Selfimprovementstat class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/newimprovementstat.php(5): Kohana_ORM->__get('improve_id')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#12 [internal function]: Controller_Jayeh->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-01 22:02:30 --- ERROR: Kohana_Exception [ 0 ]: The improv_id property does not exist in the Model_Selfimprovementstat class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-01 22:02:30 --- STRACE: Kohana_Exception [ 0 ]: The improv_id property does not exist in the Model_Selfimprovementstat class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/newimprovementstat.php(5): Kohana_ORM->__get('improv_id')
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#11 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#12 [internal function]: Controller_Jayeh->after()
#13 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#17 {main}
2012-09-01 22:04:22 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'close' ~ APPPATH/views/about/newimprovementstat.php [ 15 ]
2012-09-01 22:04:22 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'close' ~ APPPATH/views/about/newimprovementstat.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}