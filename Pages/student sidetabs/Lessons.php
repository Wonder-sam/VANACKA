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
        <link rel="stylesheet" href="../../Css/fontawesome/css/all.css" />
        <link rel="stylesheet" href="../../Css/components.css" />
        <link rel="stylesheet" href="../../Css/lessons.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0" />
    </head>
    <body>
        <?php include '../../Components/header.php'; 
            include '../../Components/topBar.php'; 
        ?>
        <div id = 'allcontent'>
           <?php include '../../Components/sideBar.php' ?>
            <div id="content">
            <div id = "lessons">
                    <h2>Lessons</h2>
                    
                    <?php
                        $sql= "SELECT * FROM Lessons";
                        $stmt = mysqli_prepare($link, $sql);
                        mysqli_stmt_execute($stmt);
                        $results = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_assoc($results)){
                            if(preg_match('/'.strtok($_SESSION['subject'], " ").'/',$row['Subject'])){
                    ?>
                    <div class = "lesson">
                        <h3><?php echo $row['Title'] ?></h3>
                        <em class="description"><?php echo $row['File_description'] ?></em><br/>
                        <div class='filegroup'>
                            <p class = "file"><?php echo $row['Uploaded_file'] ?></p>
                            <p class = 'downloadBtn'><a href="../../Components/action.php?download=<?php echo $row['Lessons_ID']?>&amp;category=Lessons" class = 'downloadText'>Download</a></p>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    ?>
            </div>
        </div>
        
    </body>
</html>