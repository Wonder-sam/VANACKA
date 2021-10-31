<?php 
require_once "conn.php";
session_start();
/*if( !isset($_SESSION['success']) && $_SESSION['success'] != true){
    header('location: login.php');
}
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel ="stylesheet" type="text/css" href="../Css/student.css" />
    </head>
    <body>
        <script>
            function init(){
                let tabs = document.getElementsByClassName("tab");
            console.log(tabs[0].innerHTML);
            }
            window.onload = init;
        </script>
        <?php include '../Components/header.php'; 
            include '../Components/topBar.php'; 
        ?>
        <div id = 'allcontent'>
           <?php include '../Components/sideBar.php' ?>
        </div>
    </body>
</html>