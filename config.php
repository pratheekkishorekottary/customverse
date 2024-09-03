<?php


ob_start();
session_start();

define('DB_SERVER', "localhost"); 
define('DB_USER', "root"); 
define('DB_DATABASE', "custom_verse1"); 
define('DB_PASSWORD', ""); 
define('DB_TYPE', 'mysql'); 





define('SITE_TITLE', 'demo.com');
define('SITE_TAG_LINE', 'give your tag line of your project here');


define('SITE_CONTACT', 'your number');

define('SITE_EMAIL_INFO', 'your mail id');

define('BASE_URL', 'http://localhost/cud opertaion/');
require_once 'app/Main.php';
require_once 'app/Controller.php';
require_once 'app/Admin.php';
