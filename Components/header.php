<?php
require_once "conn.php";
?>
<html>
    <head>
    <link rel="stylesheet" href="../Css/fontawesome/css/all.css" />
    </head>
    <body>
        <div id='header' style="height: 70px; background-color: blue; position: relative; margin: -8">
            <img src="../Images/vic.png" alt="logo" width=60 height=60/>
            <div id="user" style="position: absolute; right: 100; top: 25; display: inline-block">
                <i class="fa fa-user-circle icon" style="transform: scale(3); color: white" ></i>
                <div id='info'style="padding-left: 40px; margin-top: -25px">
                    <span style="cursor: pointer"><?php echo $_SESSION['fullname']; ?></span><br/>
                    <span><a href="logout.php" >Logout</a></span>
                </div>
            </div>
        </div>
    </body>
</html>