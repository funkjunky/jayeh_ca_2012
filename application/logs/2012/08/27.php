<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-27 00:41:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/single.php [ 22 ]
2012-08-27 00:41:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/single.php [ 22 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 22, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/index.php(8): Kohana_View->__toString()
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
2012-08-27 11:04:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/single.php [ 22 ]
2012-08-27 11:04:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/single.php [ 22 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 22, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/index.php(8): Kohana_View->__toString()
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
2012-08-27 11:04:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/single.php [ 22 ]
2012-08-27 11:04:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/single.php [ 22 ]
--
#0 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/single.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Funk/Dev...', 22, Array)
#1 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(61): include('/Users/Funk/Dev...')
#2 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Funk/Dev...', Array)
#3 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Funk/Development/CodePlay/web/kohana_test/kohana-blog/application/views/article/index.php(8): Kohana_View->__toString()
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
2012-08-27 11:47:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/userutility.php [ 9 ]
2012-08-27 11:47:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/userutility.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}