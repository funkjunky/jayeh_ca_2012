<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-04 00:04:42 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-4' for key 'PRIMARY' [ INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES ('1', '4') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-04 00:04:42 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-4' for key 'PRIMARY' [ INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES ('1', '4') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(87): Kohana_ORM->add('tags', Object(Model_Tag))
#3 [internal function]: Controller_Blog->action_post()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 00:06:59 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-4' for key 'PRIMARY' [ INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES ('1', '4') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-04 00:06:59 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-4' for key 'PRIMARY' [ INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES ('1', '4') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(87): Kohana_ORM->add('tags', Object(Model_Tag))
#3 [internal function]: Controller_Blog->action_post()
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-04 00:15:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH/classes/controller/blog.php [ 12 ]
2012-09-04 00:15:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH/classes/controller/blog.php [ 12 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 12, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-04 00:26:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/blog/view.php [ 5 ]
2012-09-04 00:26:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/blog/view.php [ 5 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Funk/Dev...', 5, Array)
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
2012-09-04 00:26:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'MONTH(dateadded)' in 'where clause' [ SELECT `article`.* FROM `articles` AS `article` WHERE `MONTH(dateadded)` = '7' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-04 00:26:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'MONTH(dateadded)' in 'where clause' [ SELECT `article`.* FROM `articles` AS `article` WHERE `MONTH(dateadded)` = '7' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `article...', 'Model_Article', Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(39): Kohana_ORM->find_all()
#4 [internal function]: Controller_Blog->action_month()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-04 00:36:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/blog/view.php [ 5 ]
2012-09-04 00:36:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/blog/view.php [ 5 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/blog/view.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Funk/Dev...', 5, Array)
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
2012-09-04 01:42:33 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH/classes/controller/blog.php [ 66 ]
2012-09-04 01:42:33 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH/classes/controller/blog.php [ 66 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Users/Funk/Dev...', 66, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/blog.php(66): implode(':', 'title:first')
#2 [internal function]: Controller_Blog->action_search()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-04 01:53:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/blog.php [ 76 ]
2012-09-04 01:53:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/blog.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}