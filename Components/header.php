
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../Css/fontawesome/css/all.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0" />
    </head>
    <body>
        <script type="text/javascript">
            function popup(){
                var more = document.getElementById('options');
                if(more.style.display=="block"){
                    more.style.display = "none";
                }
                else{
                    more.style.display = "block";
                }
            }
        </script>
        <div id="header">
            <img src="<?php echo preg_match("/reset/",$_SERVER["PHP_SELF"])==1 ? '../Images/vic.png' : '../../Images/vic.png'; ?>" alt="logo" width=40 height=40 id ="logo"/>
            <div id="user">
                <div class="userIcon">
                    <?php echo substr($_SESSION['fname'], 0, 1).substr($_SESSION['lname'], 0, 1)?>
                </div>
                <div id='info'>
                    <h4 id="name" onclick="popup()" ><?php echo $_SESSION['fullname']; ?></h4>
                    <div id='options'>
                        <span><a href="../reset.php" >Reset Password</a></span><br/>
                        <span><a href="<?php echo preg_match("/reset/",$_SERVER["PHP_SELF"])==1 ? 'logout.php' : '../logout.php' ?>" >Logout</a></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>