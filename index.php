<?php

define('APPLICATION_PATH', dirname(__FILE__));
// define('BASE_URL',"http://z.blog.yaf.com/");
define('BASE_URL',"http://www.yafblog.com/");
define('CACHE_TIME', 3600);
define('IP',"127.0.0.1");
// define('IP',"123.57.52.70");

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
