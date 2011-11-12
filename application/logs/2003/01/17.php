<?php defined('SYSPATH') or die('No direct script access.'); ?>

2003-01-17 13:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/hello was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2003-01-17 13:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/hello was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-17 13:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-17 13:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-17 13:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 13:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 13:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 13:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 16:50:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2003-01-17 16:50:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('image', Array)
#1 {main}
2003-01-17 16:51:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2003-01-17 16:51:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('image', Array)
#1 {main}
2003-01-17 16:51:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2003-01-17 16:51:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('image', Array)
#1 {main}
2003-01-17 16:52:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2003-01-17 16:52:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('image')
#1 {main}
2003-01-17 16:52:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2003-01-17 16:52:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('images')
#1 {main}
2003-01-17 16:59:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2003-01-17 16:59:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('images', Array)
#1 {main}
2003-01-17 16:59:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2003-01-17 16:59:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('image', Array)
#1 {main}
2003-01-17 17:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:04:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Image::next() ~ APPPATH\classes\controller\main.php [ 9 ]
2003-01-17 17:04:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Image::next() ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2003-01-17 17:52:50 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
2003-01-17 17:52:50 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(7): Kohana_ORM->find_all()
#1 [internal function]: Controller_Main->action_index()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 17:53:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 7 ]
2003-01-17 17:53:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-17 17:53:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 9 ]
2003-01-17 17:53:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 17:53:42 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\template.php [ 99 ]
2003-01-17 17:53:42 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 17:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-17 17:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-17 17:55:13 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2003-01-17 17:55:13 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(9): Kohana_ORM->__get('title')
#1 [internal function]: Controller_Main->action_index()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 17:55:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\controller\main.php [ 9 ]
2003-01-17 17:55:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 17:55:43 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\template.php [ 99 ]
2003-01-17 17:55:43 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 17:56:15 --- ERROR: ErrorException [ 1 ]: Call to undefined function  vardump() ~ APPPATH\classes\controller\main.php [ 9 ]
2003-01-17 17:56:15 --- STRACE: ErrorException [ 1 ]: Call to undefined function  vardump() ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2003-01-17 17:56:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 17:56:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 17:57:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 17:57:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 17:58:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 17:58:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-17 17:58:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 17:58:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 17:59:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 17:59:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:00:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:00:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:14:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:14:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:18:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:18:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:19:23 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2003-01-17 18:19:23 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(12): Kohana_ORM->__get('title')
#1 [internal function]: Controller_Main->action_index()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:20:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:20:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:20:43 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 18:20:43 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(10): Kohana_Core::error_handler()
#1 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:21:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:21:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:22:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:22:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:22:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:22:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:22:40 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 18:22:40 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2003-01-17 18:23:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:23:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:23:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 18:23:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(10): Kohana_Core::error_handler()
#1 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:23:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:23:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:25:38 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
2003-01-17 18:25:38 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(7): Kohana_ORM->find_all()
#1 [internal function]: Controller_Main->action_index()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:25:53 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 18:25:53 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2003-01-17 18:26:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:26:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:26:18 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2003-01-17 18:26:18 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(7): Kohana_ORM->find()
#1 [internal function]: Controller_Main->action_index()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:26:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 18:26:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(10): Kohana_Core::error_handler()
#1 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:26:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:26:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:26:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:26:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:27:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 18:27:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(10): Kohana_Core::error_handler()
#1 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:27:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:27:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:27:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:27:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:27:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:27:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:28:24 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in Z:\home\kohana\www\application\classes\controller\main.php on line 7 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2003-01-17 18:28:24 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in Z:\home\kohana\www\application\classes\controller\main.php on line 7 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler(Array)
#1 Z:\home\kohana\www\application\classes\controller\main.php(7): Kohana_ORM->where()
#2 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2003-01-17 18:28:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 7 ]
2003-01-17 18:28:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-17 18:28:51 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in Z:\home\kohana\www\application\classes\controller\main.php on line 7 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2003-01-17 18:28:51 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in Z:\home\kohana\www\application\classes\controller\main.php on line 7 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler('ext', '.jpg')
#1 Z:\home\kohana\www\application\classes\controller\main.php(7): Kohana_ORM->where()
#2 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2003-01-17 18:29:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:29:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:29:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:29:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:30:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:30:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:31:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:31:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:32:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:32:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:33:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:33:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:33:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:33:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:33:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:33:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:34:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$as_array ~ APPPATH\classes\controller\main.php [ 10 ]
2003-01-17 18:34:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$as_array ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(10): Kohana_Core::error_handler()
#1 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-17 18:34:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:34:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:35:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:35:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:35:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:35:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-17 18:35:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-17 18:35:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
--
#0 Z:\home\kohana\www\application\views\template.php(99): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}