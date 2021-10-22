<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', 'mysqlpass');
define('DB_NAME', 'victoria');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

if($link == false){
    die("Error. Couldn't connect to database".mysqli_connect_error());
}
?>