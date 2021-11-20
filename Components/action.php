<?php

session_start();
require_once '../Pages/conn.php';

if(isset($_GET['tab']) && $_SESSION['status']=="students"){
    $tab = $_GET['tab'];
    $_SESSION['subject']=$tab;
    if($tab == "Home"){
        header('location: ../Pages/students/students.php');
    }
    elseif($tab == "English"){
        header('location: ../Pages/students/English.php');
    }
    elseif($tab == "Maths"){
        header('location: ../Pages/students/Maths.php');
    }
    elseif($tab == "Science"){
        header('location: ../Pages/students/Science.php');
    }
    elseif($tab == "Arts and Design"){
        header("location: ../Pages/students/A&T.php");
    }
    elseif($tab == "Citizenship"){
        header('location: ../Pages/students/Citizenship.php');
    }
    elseif($tab == "Computing"){
        header('location: ../Pages/students/Computing.php');
    }
    elseif($tab == "Design and Technology"){
        header('location: ../Pages/students/D&T.php');
    }
    elseif($tab == "Languages"){
        header('location: ../Pages/students/Languages.php');
    }
    elseif($tab == "Geography"){
        header('location: ../Pages/students/Geography.php');
    }
    elseif($tab == "History"){
        header('location: ../Pages/students/History.php');
    }elseif($tab == "Music"){
        header('location: ../Pages/students/Music.php');
    }elseif($tab == "Physical Education"){
        header('location: ../Pages/students/PE.php');
    }elseif($tab == "Religious and Moral Education"){
        header('location: ../Pages/students/RME.php');
    }elseif($tab == "Sex and Relationship Education"){
        header('location: ../Pages/students/SE.php');
    }
}

if(isset($_GET['tab']) && $_SESSION['status']=="teachers"){
    $tab = $_GET['tab'];
    if($tab == "Home"){
        header('location: ../Pages/teachers/teachers.php');
    }
    elseif($tab == "English" && $_SESSION['subject']=="English"){
        header('location: ../Pages/teachers/English.php');
    }
    elseif($tab == "Maths" && $_SESSION['subject']=="Mathematics"){
        header('location: ../Pages/teachers/Maths.php');
    }
    elseif($tab == "Science" && $_SESSION['subject']=="Science"){
        header('location: ../Pages/teachers/Science.php');
    }
    elseif($tab == "Arts and Design" && $_SESSION['subject']=="Arts & Design"){
        header("location: ../Pages/teachers/A&T.php");
    }
    elseif($tab == "Citizenship" && $_SESSION['subject']=="Computing"){
        header('location: ../Pages/teachers/Citizenship.php');
    }
    elseif($tab == "Computing" && $_SESSION['subject']=="Mathematics"){
        header('location: ../Pages/teachers/Computing.php');
    }
    elseif($tab == "Design and Technology" && $_SESSION['subject']=="Design & Technology"){
        header('location: ../Pages/teachers/D&T.php');
    }
    elseif($tab == "Languages" && $_SESSION['subject']=="Languages"){
        header('location: ../Pages/teachers/Languages.php');
    }
    elseif($tab == "Geography" && $_SESSION['subject']=="Geography"){
        header('location: ../Pages/teachers/Geography.php');
    }
    elseif($tab == "History" && $_SESSION['subject']=="History"){
        header('location: ../Pages/teachers/History.php');
    }
    elseif($tab == "Music" && $_SESSION['subject']=="Music"){
        header('location: ../Pages/teachers/Music.php');
    }
    elseif($tab == "Physical Education" && $_SESSION['subject']=="Physical Education"){
        header('location: ../Pages/teachers/PE.php');
    }
    elseif($tab == "Religious and Moral Education" && $_SESSION['subject']=="Religious & Moral Education"){
        header('location: ../Pages/teachers/RME.php');
    }
    elseif($tab == "Sex and Relationship Education" && $_SESSION['subject']=="Sex & Relationship Education"){
        header('location: ../Pages/teachers/SE.php');
    }
    else{
        echo "<script type= 'text/javascript' >
                    window.onload=function(){ alert('you don\'t have permission'); 
                        javascript:history.go(-1); }
                </script>";
                // header("location: javascript://history.go(-1)");
    }
}

if(isset($_GET['sideTab']) && $_SESSION['status']=="students"){
    $sideTab = $_GET['sideTab'];
    if($sideTab == "Overview"){
        header('location: ../Pages/students/students.php');
    }
    elseif($sideTab == "Lessons"){
        header('location: ../Pages/student sidetabs/Lessons.php');
    }
    elseif($sideTab == "Assignment"){
        header('location: ../Pages/student sidetabs/Assignments.php');
    }
    elseif($sideTab == "Announcements"){
        header('location: ../Pages/student sidetabs/Annoucements.php');
    }
}

if(isset($_GET['sideTab']) && $_SESSION['status']=="teachers"){
    $sideTab = $_GET['sideTab'];
    if($sideTab == "Overview"){
        header('location: ../Pages/teachers/teachers.php');
    }
    elseif($sideTab == "Lessons"){
        header('location: ../Pages/teacher sidetabs/Lessons.php');
    }
    elseif($sideTab == "Assignment"){
        header('location: ../Pages/teacher sidetabs/Assignments.php');
    }
}

if(isset($_POST['upload_assignment'])){
	$description = $_POST['description'];
	$dueDate = $_POST['dueDate'];
	$filename=$_FILES['file']['name'];
	$destination = '../Files/'.$filename;
	$extension = pathinfo($filename, PATHINFO_EXTENSION);
	
	$file = $_FILES['file']['tmp_name'];
	$size = $_FILES['file']['size'];
	if(move_uploaded_file($file,$destination)){
		$sql = "INSERT INTO Assignments(Uploaded_file, File_description, Subject, Due_date)
								VALUES(?,?,?,?)";
		$stmt = mysqli_prepare($link, $sql);
		mysqli_stmt_bind_param($stmt,"ssss", $uf, $fd, $subject, $dd);
		$uf = $filename; 
		$fd = $description;
        $subject = $_SESSION['subject'];
		$dd = $dueDate;
		mysqli_stmt_execute($stmt);
		echo "<script type= 'text/javascript' >
                    window.onload=function(){ 
                        javascript:history.go(-1); }
                </script>";
	}
}

if(isset($_POST['upload_lesson'])){
	$description = $_POST['description'];
	$title = $_POST['title'];
	$filename=$_FILES['file']['name'];
	$destination = '../Files/'.$filename;
	$extension = pathinfo($filename, PATHINFO_EXTENSION);
	
	$file = $_FILES['file']['tmp_name'];
	$size = $_FILES['file']['size'];
	if(move_uploaded_file($file,$destination)){
		$sql = "INSERT INTO Lessons(Uploaded_file, File_description, Title, Subject)
								VALUES(?,?,?,?)";
		$stmt = mysqli_prepare($link, $sql);
		mysqli_stmt_bind_param($stmt,"ssss", $uf, $fd, $ft, $subject);
		$uf = $filename; 
		$fd = $description;
        $subject = $_SESSION['subject'];
		$ft = $title;
		mysqli_stmt_execute($stmt);
		echo "<script type= 'text/javascript' >
                    window.onload=function(){ 
                        javascript:history.go(-1); }
                </script>";
	}
		
}

if(isset($_GET['download']) && isset($_GET['category'])){
    echo $_GET['download']." ".$_GET['category'];
    $sql = "Select Uploaded_file FROM ".$_GET['category']." WHERE ".$_GET['category']."_ID= ?";
    $stmt = mysqli_prepare($link, $sql);
	mysqli_stmt_bind_param($stmt,"i", $id);
    $id = $_GET['download'];
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $file = mysqli_fetch_assoc($result);
    $filename = "../Files/".$file['Uploaded_file'];
    if(file_exists($filename)){
        header('Content-Description: File Tranfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' .basename($filename) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' .filesize($filename));
        readfile($filename);
        exit;
    }
    else echo $filename;
}
?>