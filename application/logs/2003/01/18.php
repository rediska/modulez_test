<?php defined('SYSPATH') or die('No direct script access.'); ?>

2003-01-18 16:34:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
2003-01-18 16:34:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 99 ]
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
2003-01-18 16:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 16:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 16:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 16:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:33:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\main.php [ 5 ]
2003-01-18 17:33:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-18 17:34:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\main.php [ 5 ]
2003-01-18 17:34:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-18 17:34:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\main.php [ 5 ]
2003-01-18 17:34:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-18 17:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2003-01-18 17:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 17:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2003-01-18 17:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 17:36:04 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\template.php [ 99 ]
2003-01-18 17:36:04 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\template.php [ 99 ]
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
2003-01-18 17:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb_image3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/faviconnew.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:51:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\template.php [ 116 ]
2003-01-18 17:51:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\template.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\kohana\...', Array)
#1 {main}
2003-01-18 17:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:53:14 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_HTML::image(), called in Z:\home\kohana\www\application\views\template.php on line 115 and defined ~ SYSPATH\classes\kohana\html.php [ 265 ]
2003-01-18 17:53:14 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_HTML::image(), called in Z:\home\kohana\www\application\views\template.php on line 115 and defined ~ SYSPATH\classes\kohana\html.php [ 265 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\html.php(265): Kohana_Core::error_handler()
#1 Z:\home\kohana\www\application\views\template.php(115): Kohana_HTML::image('Z:\home\kohana\...', Array)
#2 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#6 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2003-01-18 17:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 17:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 17:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 18:14:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 18 ]
2003-01-18 18:14:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-18 18:14:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 18:14:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 18:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-18 18:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: get_image.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-18 18:15:06 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2003-01-18 18:15:06 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(18): Kohana_ORM->find()
#1 [internal function]: Controller_Main->action_get_image()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-18 18:15:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:15:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:37:40 --- ERROR: Kohana_Exception [ 0 ]: The as_array property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2003-01-18 18:37:40 --- STRACE: Kohana_Exception [ 0 ]: The as_array property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(16): Kohana_ORM->__get('as_array')
#1 [internal function]: Controller_Main->action_get_image()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-18 18:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 18:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2003-01-18 18:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2003-01-18 21:33:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\template.php [ 19 ]
2003-01-18 21:33:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\template.php [ 19 ]
--
#0 Z:\home\kohana\www\application\views\template.php(19): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-18 21:41:18 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\controller\main.php [ 8 ]
2003-01-18 21:41:18 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\controller\main.php [ 8 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(8): Kohana_Core::error_handler(Object(Database_MySQL_Result), Object(Database_MySQL_Result))
#1 [internal function]: Controller_Main->action_index()
#2 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2003-01-18 21:43:07 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\views\template.php [ 15 ]
2003-01-18 21:43:07 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\views\template.php [ 15 ]
--
#0 Z:\home\kohana\www\application\views\template.php(15): Kohana_Core::error_handler(Object(Database_MySQL_Result), Object(Database_MySQL_Result))
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-18 21:44:14 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\views\template.php [ 21 ]
2003-01-18 21:44:14 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\views\template.php [ 21 ]
--
#0 Z:\home\kohana\www\application\views\template.php(21): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}