<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-10 01:28:12 --- ERROR: Kohana_Exception [ 0 ]: The _table_name property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-10 01:28:12 --- STRACE: Kohana_Exception [ 0 ]: The _table_name property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(15): Kohana_ORM->__get('_table_name')
#1 [internal function]: Controller_Blog->action_index()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-10 01:31:20 --- ERROR: Kohana_Exception [ 0 ]: The _table_name property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-10 01:31:20 --- STRACE: Kohana_Exception [ 0 ]: The _table_name property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(15): Kohana_ORM->__get('_table_name')
#1 [internal function]: Controller_Blog->action_index()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-10 01:31:31 --- ERROR: Kohana_Exception [ 0 ]: The _db property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-10 01:31:31 --- STRACE: Kohana_Exception [ 0 ]: The _db property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(16): Kohana_ORM->__get('_db')
#1 [internal function]: Controller_Blog->action_index()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-10 01:34:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Article as array ~ APPPATH/classes/controller/blog.php [ 17 ]
2012-09-10 01:34:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Article as array ~ APPPATH/classes/controller/blog.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-10 01:46:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  jayeh ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2012-09-10 01:46:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  jayeh ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Funk/Dev...', 65, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(214): Kohana_Database::instance('jayeh')
#2 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(16): Kohana_Database_Query->execute('jayeh')
#3 [internal function]: Controller_Blog->action_index()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 01:50:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/classes/controller/blog.php [ 46 ]
2012-09-10 01:50:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/classes/controller/blog.php [ 46 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 46, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-10 01:54:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/blog/monthyeartree.php [ 9 ]
2012-09-10 01:54:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/blog/monthyeartree.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-10 01:55:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
2012-09-10 01:55:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 3, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(5): Kohana_View->__toString()
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
2012-09-10 01:57:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
2012-09-10 01:57:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 3, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(5): Kohana_View->__toString()
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
2012-09-10 02:16:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/article.php [ 43 ]
2012-09-10 02:16:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/article.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-10 02:17:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/article.php [ 43 ]
2012-09-10 02:17:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/article.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-10 02:35:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: taglist ~ APPPATH/views/blog/view.php [ 4 ]
2012-09-10 02:35:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: taglist ~ APPPATH/views/blog/view.php [ 4 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 4, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(5): Kohana_View->__toString()
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
2012-09-10 02:35:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: taglist ~ APPPATH/views/blog/view.php [ 4 ]
2012-09-10 02:35:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: taglist ~ APPPATH/views/blog/view.php [ 4 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 4, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(5): Kohana_View->__toString()
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
2012-09-10 02:35:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
2012-09-10 02:35:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 3, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(5): Kohana_View->__toString()
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
2012-09-10 03:21:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
2012-09-10 03:21:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: monthyeartree ~ APPPATH/views/blog/view.php [ 3 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 3, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/template.php(5): Kohana_View->__toString()
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
2012-09-10 03:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL changelog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 03:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL changelog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 14:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/blog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 14:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/blog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 14:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/blog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 14:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/blog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 14:02:47 --- ERROR: View_Exception [ 0 ]: The requested view admin/blog/edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-10 14:02:47 --- STRACE: View_Exception [ 0 ]: The requested view admin/blog/edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/blog/edit')
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/admin/blog.php(17): Kohana_View->__construct('admin/blog/edit')
#2 [internal function]: Controller_Admin_Blog->action_edit()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Blog))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-10 14:03:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: articletags ~ APPPATH/views/blog/edit.php [ 19 ]
2012-09-10 14:03:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: articletags ~ APPPATH/views/blog/edit.php [ 19 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/edit.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 19, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/Projects/jayeh.ca/application/views/admin/template.php(4): Kohana_View->__toString()
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
#17 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Blog))
#18 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#21 {main}
2012-09-10 14:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/delete/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 14:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/delete/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 14:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 14:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 14:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/changelog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-10 14:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/changelog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}