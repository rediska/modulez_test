<?php defined('SYSPATH') or die('No direct script access.'); ?>

2003-01-21 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-21 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-21 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-21 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-21 19:51:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING ~ APPPATH\classes\controller\main.php [ 5 ]
2003-01-21 19:51:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING ~ APPPATH\classes\controller\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-21 20:11:20 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 6 ]
2003-01-21 20:11:20 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2003-01-21 20:13:31 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2003-01-21 20:13:31 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(228): Kohana_Core::error_handler('image', Array)
#1 Z:\home\kohana\www\application\classes\controller\main.php(12): Kohana_Validation->rules(Array)
#2 Z:\home\kohana\www\application\classes\controller\main.php(35): Controller_Main->upload_image()
#3 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2003-01-21 20:20:50 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2003-01-21 20:20:50 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(228): Kohana_Core::error_handler('image', Array)
#1 Z:\home\kohana\www\application\classes\controller\main.php(12): Kohana_Validation->rules(Array)
#2 Z:\home\kohana\www\application\classes\controller\main.php(35): Controller_Main->upload_image()
#3 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2003-01-21 20:21:18 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2003-01-21 20:21:18 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(228): Kohana_Core::error_handler('image', Array)
#1 Z:\home\kohana\www\application\classes\controller\main.php(12): Kohana_Validation->rules(Array)
#2 Z:\home\kohana\www\application\classes\controller\main.php(35): Controller_Main->upload_image()
#3 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2003-01-21 20:21:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 11 ]
2003-01-21 20:21:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}
2003-01-21 20:21:54 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in Z:\home\kohana\www\system\classes\kohana\validation.php on line 228 and defined ~ SYSPATH\classes\kohana\validation.php [ 197 ]
2003-01-21 20:21:54 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in Z:\home\kohana\www\system\classes\kohana\validation.php on line 228 and defined ~ SYSPATH\classes\kohana\validation.php [ 197 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(197): Kohana_Core::error_handler('image', 'U', 'p')
#1 Z:\home\kohana\www\system\classes\kohana\validation.php(228): Kohana_Validation->rule('image', Array)
#2 Z:\home\kohana\www\application\classes\controller\main.php(11): Kohana_Validation->rules(Array)
#3 Z:\home\kohana\www\application\classes\controller\main.php(34): Controller_Main->upload_image()
#4 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-21 20:23:21 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in Z:\home\kohana\www\system\classes\kohana\validation.php on line 228 and defined ~ SYSPATH\classes\kohana\validation.php [ 197 ]
2003-01-21 20:23:21 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in Z:\home\kohana\www\system\classes\kohana\validation.php on line 228 and defined ~ SYSPATH\classes\kohana\validation.php [ 197 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(197): Kohana_Core::error_handler('image', 'U', 'p')
#1 Z:\home\kohana\www\system\classes\kohana\validation.php(228): Kohana_Validation->rule('image', Array)
#2 Z:\home\kohana\www\application\classes\controller\main.php(8): Kohana_Validation->rules(Array)
#3 Z:\home\kohana\www\application\classes\controller\main.php(31): Controller_Main->upload_image()
#4 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-21 20:27:01 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2003-01-21 20:27:01 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(228): Kohana_Core::error_handler('image', Array)
#1 Z:\home\kohana\www\application\classes\controller\main.php(8): Kohana_Validation->rules(Array)
#2 Z:\home\kohana\www\application\classes\controller\main.php(31): Controller_Main->upload_image()
#3 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2003-01-21 20:27:27 --- ERROR: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, '' was given ~ SYSPATH\classes\kohana\validation.php [ 370 ]
2003-01-21 20:27:27 --- STRACE: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, '' was given ~ SYSPATH\classes\kohana\validation.php [ 370 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(370): Kohana_Core::error_handler('', Array)
#1 Z:\home\kohana\www\application\classes\controller\main.php(10): Kohana_Validation->check()
#2 Z:\home\kohana\www\application\classes\controller\main.php(31): Controller_Main->upload_image(Array)
#3 [internal function]: Controller_Main->action_index()
#4 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2003-01-21 20:28:01 --- ERROR: ReflectionException [ 0 ]: Function :not_empty() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2003-01-21 20:28:01 --- STRACE: ReflectionException [ 0 ]: Function :not_empty() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(383): ReflectionFunction->__construct(':not_empty')
#1 Z:\home\kohana\www\application\classes\controller\main.php(10): Kohana_Validation->check()
#2 Z:\home\kohana\www\application\classes\controller\main.php(31): Controller_Main->upload_image(Array)
#3 [internal function]: Controller_Main->action_index()
#4 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2003-01-21 20:34:50 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, string given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2003-01-21 20:34:50 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, string given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\upload.php(146): Kohana_Core::error_handler('jpg', 'png', 'gif')
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\www\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs()
#3 Z:\home\kohana\www\application\classes\controller\main.php(16): Kohana_Validation->check(Array)
#4 Z:\home\kohana\www\application\classes\controller\main.php(37): Controller_Main->upload_image()
#5 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#6 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2003-01-21 20:36:13 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2003-01-21 20:36:13 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\validation.php(228): Kohana_Core::error_handler('image', Array)
#1 Z:\home\kohana\www\application\classes\controller\main.php(14): Kohana_Validation->rules(Array)
#2 Z:\home\kohana\www\application\classes\controller\main.php(37): Controller_Main->upload_image()
#3 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2003-01-21 20:40:53 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, string given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2003-01-21 20:40:53 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, string given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\www\system\classes\kohana\upload.php(146): Kohana_Core::error_handler('jpg', 'png', 'gif')
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\www\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs()
#3 Z:\home\kohana\www\application\classes\controller\main.php(16): Kohana_Validation->check(Array)
#4 Z:\home\kohana\www\application\classes\controller\main.php(37): Controller_Main->upload_image()
#5 [internal function]: Controller_Main->action_index(Object(Controller_Main))
#6 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2003-01-21 21:10:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\messages\upload.php [ 7 ]
2003-01-21 21:10:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\messages\upload.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\kohana\...')
#1 {main}
2003-01-21 21:24:42 --- ERROR: ErrorException [ 1 ]: Call to undefined function  print_t() ~ APPPATH\views\template.php [ 37 ]
2003-01-21 21:24:42 --- STRACE: ErrorException [ 1 ]: Call to undefined function  print_t() ~ APPPATH\views\template.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\kohana\...', Array)
#1 {main}
2003-01-21 21:24:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template.php [ 39 ]
2003-01-21 21:24:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template.php [ 39 ]
--
#0 Z:\home\kohana\www\application\views\template.php(39): Kohana_Core::error_handler('Z:\home\kohana\...', Array)
#1 Z:\home\kohana\www\system\classes\kohana\view.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main))
#5 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2003-01-21 21:30:59 --- ERROR: Kohana_Exception [ 0 ]: Directory ./345345/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2003-01-21 21:30:59 --- STRACE: Kohana_Exception [ 0 ]: Directory ./345345/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(30): Kohana_Upload::save(Array, 'original.jpg', './345345/', 420)
#1 Z:\home\kohana\www\application\classes\controller\main.php(47): Controller_Main->upload_image(Array)
#2 [internal function]: Controller_Main->action_index()
#3 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2003-01-21 21:35:54 --- ERROR: Kohana_Exception [ 0 ]: Directory ./345345/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2003-01-21 21:35:54 --- STRACE: Kohana_Exception [ 0 ]: Directory ./345345/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 Z:\home\kohana\www\application\classes\controller\main.php(30): Kohana_Upload::save(Array, 'original.jpg', './345345/')
#1 Z:\home\kohana\www\application\classes\controller\main.php(47): Controller_Main->upload_image(Array)
#2 [internal function]: Controller_Main->action_index()
#3 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}