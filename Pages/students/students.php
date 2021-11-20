<?php 
require_once "../conn.php";
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
        <link rel ="stylesheet" type="text/css" href="../../Css/student.css" />
        <link rel="stylesheet" href="../../Css/components.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0" />
    </head>
    <body>
        <script>
            function init(){
                let tabs = document.getElementsByClassName("tab");
            console.log(tabs[0].innerHTML);
            }
            window.onload = init;
        </script>
        <?php include '../../Components/header.php'; 
            include '../../Components/topBar.php'; 
        ?>
        <div id = 'allcontent'>
           <?php include '../../Components/sideBar.php' ?>
            <div id="content">
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
                <h1>Overview</h1>
                <p>lets ride</p>
            </div>
        </div>
    </body>
</html>