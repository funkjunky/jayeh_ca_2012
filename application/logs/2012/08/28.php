<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-28 03:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 03:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 03:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 03:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 03:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 03:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 03:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 03:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 03:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 03:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 03:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 03:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 13:33:06 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-08-28 13:33:06 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', '6ba141c6bebf4f3...')
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', '6ba141c6bebf4f3...', 1209600)
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/auth/orm.php(33): Kohana_Auth_ORM->_login(Object(Model_User), 'root', true)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/auth/classes/kohana/auth.php(90): Useradmin_Auth_ORM->_login('root', 'root', true)
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/controller/user.php(335): Kohana_Auth->login('root', 'root', true)
#5 [internal function]: Useradmin_Controller_User->action_login()
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-28 13:36:41 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana_blog.user_identities' doesn't exist [ SHOW FULL COLUMNS FROM `user_identities` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-28 13:36:41 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana_blog.user_identities' doesn't exist [ SHOW FULL COLUMNS FROM `user_identities` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('user_identities')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('user_identity')
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/views/user/profile.php(22): Kohana_ORM->__get('user_identity')
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/views/template/useradmin.php(39): Kohana_View->__toString()
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#17 [internal function]: Useradmin_Controller_App->after()
#18 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#19 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#22 {main}
2012-08-28 13:47:02 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana_blog.user_identities' doesn't exist [ SHOW FULL COLUMNS FROM `user_identities` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-28 13:47:02 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana_blog.user_identities' doesn't exist [ SHOW FULL COLUMNS FROM `user_identities` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('user_identities')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('user_identity')
#7 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/views/user/profile.php(22): Kohana_ORM->__get('user_identity')
#8 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#9 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#10 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/views/template/useradmin.php(39): Kohana_View->__toString()
#12 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#13 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#14 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#15 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#16 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#17 [internal function]: Useradmin_Controller_App->after()
#18 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#19 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#22 {main}
2012-08-28 13:54:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/pagination/classes/kohana/pagination.php [ 92 ]
2012-08-28 13:54:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/pagination/classes/kohana/pagination.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-28 14:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 14:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 14:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:10:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:10:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/create was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-28 17:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/create was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-28 17:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery-1.6.4.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-28 17:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-28 17:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/template.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/index.php(109): Kohana_Request->execute()
#1 {main}