<?php 
require_once "conn.php";
session_start();
/*if( !isset($_SESSION['success']) && $_SESSION['success'] != true){
    header('location: login.php');
}
*/
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div id = 'allcontent'>
            <?php include '../Components/header.php'?>
        </div>
    </body>
</html>