<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-02 00:44:11 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `selfimprovements` (`subject`) VALUES ('Crunchies') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-02 00:44:11 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `selfimprovements` (`subject`) VALUES ('Crunchies') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(138): Kohana_ORM->save()
#4 [internal function]: Controller_About->action_postimprovement()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-02 00:44:29 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `selfimprovements` (`subject`) VALUES ('Crunchies') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-02 00:44:29 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `selfimprovements` (`subject`) VALUES ('Crunchies') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(138): Kohana_ORM->save()
#4 [internal function]: Controller_About->action_postimprovement()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-02 00:47:03 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `aboutdatas` (`subject`, `description`) VALUES ('Favorite Movie', 'Matrix: Reloaded') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-02 00:47:03 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `aboutdatas` (`subject`, `description`) VALUES ('Favorite Movie', 'Matrix: Reloaded') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ab...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(44): Kohana_ORM->save()
#4 [internal function]: Controller_About->action_postdata()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-02 00:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 00:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 00:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 00:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 00:49:34 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `aboutdatas` (`subject`, `description`) VALUES ('Favorite Movie', 'Matrix: Reloaded') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-02 00:49:34 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `aboutdatas` (`subject`, `description`) VALUES ('Favorite Movie', 'Matrix: Reloaded') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ab...', false, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Funk/Development/Projects/jayeh.ca/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about.php(44): Kohana_ORM->save()
#4 [internal function]: Controller_About->action_postdata()
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About))
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-02 01:00:15 --- ERROR: Kohana_Exception [ 0 ]: The dateadded property does not exist in the Model_Selfimprovementstat class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-02 01:00:15 --- STRACE: Kohana_Exception [ 0 ]: The dateadded property does not exist in the Model_Selfimprovementstat class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/newimprovementstat.php(27): Kohana_ORM->__get('dateadded')
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
2012-09-02 02:00:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Aboutdata as array ~ APPPATH/views/about/index.php [ 8 ]
2012-09-02 02:00:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Aboutdata as array ~ APPPATH/views/about/index.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-02 02:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 02:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 02:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 02:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 02:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 02:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 02:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/internaldata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 02:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/internaldata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 02:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 02:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 02:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 02:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 04:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 04:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 04:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about_view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 04:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about_view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 04:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL About_View was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 04:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL About_View was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 04:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL About/View was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 04:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL About/View was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 04:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 04:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 21:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement/stat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 21:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/improvement was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 21:55:42 --- ERROR: View_Exception [ 0 ]: The requested view about/improvement/edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-02 21:55:42 --- STRACE: View_Exception [ 0 ]: The requested view about/improvement/edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(137): Kohana_View->set_filename('about/improveme...')
#1 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about/improvement.php(11): Kohana_View->__construct('about/improveme...')
#2 [internal function]: Controller_About_Improvement->action_new()
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About_Improvement))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 22:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/stat/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 22:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/stat/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 22:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/postimprovementstat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 22:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/postimprovementstat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 22:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/postimprovementstat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 22:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/postimprovementstat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 22:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/newdata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 22:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/newdata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 22:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-02 22:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-02 22:49:58 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in /Users/Funk/Development/Projects/jayeh.ca/application/views/about/stat/new.php on line 29 and defined ~ SYSPATH/classes/kohana/form.php [ 35 ]
2012-09-02 22:49:58 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in /Users/Funk/Development/Projects/jayeh.ca/application/views/about/stat/new.php on line 29 and defined ~ SYSPATH/classes/kohana/form.php [ 35 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/form.php(35): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Funk/Dev...', 35, Array)
#1 /Users/Funk/Development/Projects/jayeh.ca/application/views/about/stat/new.php(29): Kohana_Form::open('deletefrm', 'about/stat/dele...')
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/Funk/Development/Projects/jayeh.ca/application/views/topleveltemplate.php(7): Kohana_View->__toString()
#6 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#7 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#8 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/response.php(160): Kohana_View->__toString()
#10 /Users/Funk/Development/Projects/jayeh.ca/modules/useradmin/classes/useradmin/controller/app.php(164): Kohana_Response->body(Object(View))
#11 /Users/Funk/Development/Projects/jayeh.ca/modules/subtemplate/classes/controller/subtemplate.php(16): Useradmin_Controller_App->after()
#12 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/jayeh.php(11): Controller_Subtemplate->after()
#13 [internal function]: Controller_Jayeh->after()
#14 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About_Stat))
#15 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#18 {main}
2012-09-02 22:50:21 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete selfimprovementstat model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-02 22:50:21 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete selfimprovementstat model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/application/classes/controller/about/stat.php(37): Kohana_ORM->delete()
#1 [internal function]: Controller_About_Stat->action_delete()
#2 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_About_Stat))
#3 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-02 22:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL changelog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-02 22:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL changelog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Funk/Development/Projects/jayeh.ca/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Funk/Development/Projects/jayeh.ca/index.php(109): Kohana_Request->execute()
#3 {main}