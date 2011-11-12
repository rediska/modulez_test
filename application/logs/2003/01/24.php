<?php defined('SYSPATH') or die('No direct script access.'); ?>

2003-01-24 11:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:43:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Image::store() ~ APPPATH\classes\controller\main.php [ 50 ]
2003-01-24 11:43:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Image::store() ~ APPPATH\classes\controller\main.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2003-01-24 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/41/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/41/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/41/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/41/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/42/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/42/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:48:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\main.php [ 53 ]
2003-01-24 11:48:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\main.php [ 53 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(53): Kohana_Core::error_handler()
#1 Z:\home\kohana\www\application\classes\controller\main.php(66): Controller_Main->upload_image()
#2 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2003-01-24 11:49:03 --- ERROR: Kohana_Exception [ 0 ]: Directory ./images/44/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2003-01-24 11:49:03 --- STRACE: Kohana_Exception [ 0 ]: Directory ./images/44/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(53): Kohana_Upload::save(Array, 'original.png', './images/44/')
#1 Z:\home\kohana\www\application\classes\controller\main.php(66): Controller_Main->upload_image()
#2 [internal function]: Controller_Main->action_index()
#3 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2003-01-24 11:59:17 --- ERROR: ErrorException [ 1 ]: Call to undefined function  mk_dir() ~ APPPATH\classes\controller\main.php [ 52 ]
2003-01-24 11:59:17 --- STRACE: ErrorException [ 1 ]: Call to undefined function  mk_dir() ~ APPPATH\classes\controller\main.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2003-01-24 11:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/44/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/44/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/40/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/42/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/42/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/41/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/41/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/43/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/43/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/45/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/45/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 11:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/46/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 11:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/46/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 12:03:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\views\template.php [ 48 ]
2003-01-24 12:03:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\views\template.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\kohana\...', Array)
#1 {main}
2003-01-24 12:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/47/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-24 12:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/47/thumb.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-24 12:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/upload_image was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2003-01-24 12:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/upload_image was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-24 12:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/upload_imagedfdsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2003-01-24 12:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/upload_imagedfdsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}