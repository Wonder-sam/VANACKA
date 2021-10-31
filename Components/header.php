
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../Css/fontawesome/css/all.css" />
    </head>
    <body>
        <div id="header">
            <img src="../Images/vic.png" alt="logo" width=60 height=60 style="margin: 5px 0px 0px 10px"/>
            <div id="user">
                <div class="icon">
                    <?php echo substr($_SESSION['fname'], 0, 1).substr($_SESSION['lname'], 0, 1)?>
                </div>
                <div id='info'>
                    <span style="cursor: pointer"><?php echo $_SESSION['fullname']; ?></span><br/>
                    <span><a href="reset.php" >Reset Password</a></span><br/>
                    <span><a href="logout.php" >Logout</a></span>
                </div>
            </div>
        </div>
    </body>
</html>