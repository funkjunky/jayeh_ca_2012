<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-22 17:00:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/article/index.php [ 3 ]
2012-08-22 17:00:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/article/index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 17:20:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 15 ]
2012-08-22 17:20:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 17:21:12 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'kohana_blog' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-08-22 17:21:12 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'kohana_blog' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('kohana_blog')
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/article.php(13): Kohana_ORM->__construct()
#8 [internal function]: Controller_Article->action_new()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-22 21:20:24 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'INDEX_PAGE' ~ APPPATH/classes/controller/article.php [ 41 ]
2012-08-22 21:20:24 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'INDEX_PAGE' ~ APPPATH/classes/controller/article.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 21:39:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 29 ]
2012-08-22 21:39:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 29 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 29, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-22 22:23:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/views/article/single.php [ 13 ]
2012-08-22 22:23:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/views/article/single.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 22:24:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
2012-08-22 22:24:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/single.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 4, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(13): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-22 22:28:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/article/single.php [ 13 ]
2012-08-22 22:28:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/article/single.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 22:29:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
2012-08-22 22:29:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/single.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 4, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(14): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-22 22:29:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
2012-08-22 22:29:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/single.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 4, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(13): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-22 22:35:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
2012-08-22 22:35:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/comment/single.php [ 4 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/single.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 4, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(13): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-22 22:48:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/views/article/index.php [ 8 ]
2012-08-22 22:48:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/views/article/index.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 22:52:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/comment.php [ 31 ]
2012-08-22 22:52:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/comment.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 22:53:13 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-08-22 22:53:13 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/comment.php(9): Kohana_ORM->save()
#3 [internal function]: Controller_Comment->action_post()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment))
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-22 23:01:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/comment.php [ 21 ]
2012-08-22 23:01:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/comment.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-22 23:01:29 --- ERROR: View_Exception [ 0 ]: The requested view article/single/3 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-22 23:01:29 --- STRACE: View_Exception [ 0 ]: The requested view article/single/3 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(137): Kohana_View->set_filename('article/single/...')
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/comment.php(20): Kohana_View->__construct('article/single/...')
#2 [internal function]: Controller_Comment->action_post()
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment))
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-22 23:05:07 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: template ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-08-22 23:05:07 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: template ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/comment.php(24): Kohana_View->__get('template')
#1 [internal function]: Controller_Comment->action_post()
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment))
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-22 23:05:50 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: template ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-08-22 23:05:50 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: template ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/comment.php(25): Kohana_View->__get('template')
#1 [internal function]: Controller_Comment->action_post()
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment))
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-22 23:05:57 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: template ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-08-22 23:05:57 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: template ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/classes/controller/comment.php(25): Kohana_View->__get('template')
#1 [internal function]: Controller_Comment->action_post()
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment))
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-22 23:10:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
2012-08-22 23:10:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/edit.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 9, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(23): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Comment))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-22 23:43:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
2012-08-22 23:43:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/edit.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 9, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(23): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Comment))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-22 23:43:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
2012-08-22 23:43:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/edit.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 9, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(23): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/index.php(8): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#16 [internal function]: Kohana_Controller_Template->after()
#17 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#18 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#21 {main}
2012-08-22 23:43:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
2012-08-22 23:43:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/comment/edit.php [ 9 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/comment/edit.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 9, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(23): Kohana_View->__toString()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/template.php(29): Kohana_View->__toString()
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Comment))
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#17 {main}