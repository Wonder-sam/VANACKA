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
         <link rel="stylesheet" href="../../Css/assignments.css" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0" />
    </head>
    <body>
        <?php include '../../Components/header.php'; 
            include '../../Components/topBar.php'; 
        ?>
        <div id = 'allcontent'>
           <?php include '../../Components/sideBar.php' ?>
           <div id = "content">
                <h2>Assignments</h2>
                <table id="table">
                    <tr>
                    <th>ASSIGNMENT</th>
                    <th>FILE</th>
                    <th>DUE DATE</th>
                    <th>UPLOADED ON</th>
                    </tr>
                    <?php
                        $sql= "SELECT * FROM Assignments";
                        $stmt = mysqli_prepare($link, $sql);
                        mysqli_stmt_execute($stmt);
                        $results = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_assoc($results)){
                            if(preg_match('/'.strtok($_SESSION['subject']," ").'/',$row["Subject"])){
                    ?>

                    <tr>
                        <td><?php echo $row["File_description"] ?></td>
                        <td><?php echo $row['Uploaded_file'] ?></td>
                        <td><?php echo $row['Due_date'] ?></td>
                        <td><?php echo $row['Uploaded_on'] ?></td>
                        <td><a href="../../Components/action.php?download=<?php echo $row['Assignments_ID']?>&amp;category=Assignments" class ="download">Download</a></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
        
    </body>
</html>