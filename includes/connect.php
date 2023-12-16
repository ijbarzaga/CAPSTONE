<?php
// Check if constants are not defined before defining them
if (!defined('SITEURL')) {
    define('SITEURL', 'http://shaynessweets.store/');
}

if (!defined('DB_HOST')) {
    define('DB_HOST', '127.0.0.1:3306');
}

if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'u669884075_shaynessweets');
}

if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', 'Pus38516');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'u669884075_ecomdb');
}

date_default_timezone_set("Asia/Manila");

// Establish database connection using the defined constants
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error()); //database connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //selecting database

$db_host = '127.0.0.1:3306';
$db_username = 'u669884075_shaynessweets';
$db_password = 'Pus38516';
$db_name = 'u669884075_ecomdb';

// Create connection
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
