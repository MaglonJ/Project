<?php

include_once ('connect.php');
 if(isset($_POST['submit'])){
     $Course_Code = $_POST['Course_Code'];
     $Course_Discreption = $_POST['Course_Discreption'];

        $sql = "INSERT INTO course (Course_Code,Course_Discreption) VALUES ('$Course_Code','$Course_Discreption')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: courselist.php");
            // header("Location: Masterlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


?>