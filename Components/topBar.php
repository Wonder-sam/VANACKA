
<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' type="text/css" href='../../Css/components.css'>
        <Script>
            function showSites(){
                document.getElementById("topBar").style.height=screen.height+"px";
                var plus = document.getElementById('topBar');
                if(plus.style.display=="block"){
                    plus.style.display = "none";
                    $("#content").css("height","auto");
                    $("#content").css("overflow","scroll");
                }
                else{
                    plus.style.display = "block";
                    $("#content").css("height",screen.height);
                    $("#content").css("overflow","hidden");
                    $("#topBar").css("overflow","scroll");
                }
            }
            function showTabs(){
                document.getElementById("sideBar").style.height=screen.height+"px";
                document.getElementById("sideBar").style.width=screen.width+"px";
                document.getElementById("sideBar").style.backgroundColor="white";


                var plus = document.getElementById('sideBar');
                if(plus.style.display=="block"){
                    plus.style.display = "none";
                    $("body").css("overflow","scroll");
                }
                else{
                    plus.style.display = "block";
                    $("body").css("overflow","hidden");
                    $("#topBar").css("overflow","scroll");
                }
            }
        </Script>
    </head>
    <body>
        <div id ="topBar">
            <ul>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Home'"><i class="fas fa-home icon"></i>HOME</a></li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=English'"><i class="fa fa- icon"></i>English</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Maths'"><i class="fa fa- icon"></i>MATHEMATICS</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Science'"><i class="fa fa- icon"></i>SCIENCE</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Arts and Design'"><i class="fa fa- icon"></i>ART & DESIGN</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Citizenship'"><i class="fa fa- icon"></i>CITIZENSHIP</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Computing'"><i class="fa fa- icon"></i>COMPUTING</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Design and Technology'"><i class="fa fa- icon"></i>DESIGN & TECHNOLOGY</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Languages'"><i class="fa fa- icon"></i>LANGUAGES</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Geography'"><i class="fa fa- icon"></i>GEOGRAPHY</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=History'"><i class="fa fa- icon"></i>HISTORY</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Music'"><i class="fa fa- icon"></i>MUSIC</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Physical Education'"><i class="fa fa- icon"></i>PHYSICAL EDUCATION</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Religious and Moral Education'"><i class="fa fa- icon"></i>RELIGIOUS & MORAL EDUCATION</li>
                <li class = "tab" onclick="location.href='../../Components/action.php?tab=Sex and Relationship Education'"><i class="fa fa- icon"></i>SEX & RELATIONSHIP EDUCATION</li>
            </ul>
        </div>
        <div id="mobileBar">
            <div id="currentTab" onclick="showTabs()">
                <!-- <?php echo $_SESSION['subject'] ?> -->
                <span>FAST<span>
            </div>
            <div id="sites" onclick="showSites()">
                <span<i class="fa fa-th icon"></i></span>
            </div>
        </div>
    </body>

</html>