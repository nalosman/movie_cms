<?php 

define('ABSPATH', __DIR__);   //SHOW WHERE FILE IS 
define('ADMIN_PATH', ABSPATH.'/admin');
define('ADMIN_SCRIPT_PATH', ADMIN_PATH.'/scripts');

// echo ABSPATH;
// exit;

ini_set('display_errors', 1);
require_once ABSPATH.'/config/database.php';
require_once ADMIN_SCRIPT_PATH.'/read.php';
require_once ADMIN_SCRIPT_PATH.'/login.php';


//loads functions to where they need to go go, A Bridge