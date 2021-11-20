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
        <script>
            function upload(){
                var plus = document.getElementById('upload');
                if(plus.style.display=="block"){
                    plus.style.display = "none";
                }
                else{
                    plus.style.display = "block";
                }
            }
        </script>
        <?php include '../../Components/header.php'; 
            include '../../Components/topBar.php'; 
        ?>
        <div id = 'allcontent'>
           <?php include '../../Components/sideBar.php' ?>
           <div id = "content">
                <h2>Assignments</h2>
                <table id="table">
                    <tr>
                        <th>Assignment</th><th>File</th><th>Subject</th><th>Due Date</th><th>Uploaded_On</th>
                    </tr>
                    <?php
                        $sql= "SELECT * FROM Assignments WHERE Subject = ?";
                        $stmt = mysqli_prepare($link, $sql);
                        mysqli_stmt_bind_param($stmt, "s", $subject);
                        $subject = $_SESSION['subject'];
                        mysqli_stmt_execute($stmt);
                        $results = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_assoc($results)){
                    ?>

                    <tr>
                        <td><?php echo $row["Uploaded_file"] ?></td>
                        <td><?php echo $row['File_description'] ?></td>
                        <td><?php echo $row['Subject'] ?></td>
                        <td><?php echo $row['Due_date'] ?></td>
                        <td><?php echo $row['Uploaded_on'] ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <div id= "upload">
                    <form action="../../Components/action.php" method="post" enctype="multipart/form-data">
                        <table id="upload-form">
                            <tr>
                                <td><label for="description">Instructions: </label></td>
                                <td><input type="textArea" name="description" style="width:200px; height:50px;" /></td>
                            </tr>
                            <tr>
                                <td><label for="dueDate">Due_Date: </label></td>
                                <td><input type="date" name = "dueDate" /></td>
                            </tr>
                            <tr>
                                <td><label for="file">File: </label></td>
                                <td><input type="file" name="file" accept='file/*' /></td>
                            </tr>
                        </table>
                        <input type="submit" value = "Upload" name="upload_assignment"/>
                    </form>
                </div>
                <div id = add onclick="upload()">
                <i class="fa fa-plus icon"></i>
                </div>
            </div>
        </div>
        
    </body>
</html>