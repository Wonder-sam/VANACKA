<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' type="text/css" href='../../Css/components.css'>
        <script src = "../../js/jquery-3.5.1-min.js"></script>
    </head>
    <body>
        <script>
            window.onload = function init(){
                let displayTab = document.getElementById("announcement");
                let status = "<?php echo $_SESSION['status'] ?>";
                if( status == "teachers" ){
                    displayTab.style.display = "block";
                }

                var len = $("#sideBar ul li:first-child").css("width");
                $("#sideBar ul li:last-child").css("width", len);
                console.log(screen.height);

                
            }
        </script>
        <div id="sideBar">
            <ul>
                <li class = "tab" onclick="location.href='../../Components/action.php?sideTab=Overview'"><i class="fas fa-info-circle icon"></i>OVERVIEW</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?sideTab=Lessons'"><i class="fa fa-book-reader icon"></i>LESSONS</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?sideTab=Assignment'"><i class="far fa-clipboard icon"></i>ASSIGNMENTS</li>
                <li class = "tab" id="announcement" onclick="location.href='../../Components/action.php?sideTab=Announcement'"><i class="far fa-clipboard icon"></i>ANNOUNCEMENTS</li>
                <li class = "tab" id="more"><i class="fa fa-chevron-left icon"></i>More</li>
            </ul>
        </div>
    </body>

</html>