<?php defined('SYSPATH') or die('No direct script access.'); ?>

2003-01-22 07:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-22 07:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-22 07:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2003-01-22 07:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2003-01-22 07:14:34 --- ERROR: ErrorException [ 1 ]: Call to undefined function  create_image_thumb() ~ APPPATH\classes\controller\main.php [ 32 ]
2003-01-22 07:14:34 --- STRACE: ErrorException [ 1 ]: Call to undefined function  create_image_thumb() ~ APPPATH\classes\controller\main.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2003-01-22 20:57:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\controller\main.php [ 45 ]
2003-01-22 20:57:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\controller\main.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_main')
#1 {main}