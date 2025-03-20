<?php

include_once ('connect.php');
 if(isset($_POST['submit'])){
     $Subj_Code = $_POST['Subj_Code'];
     $Subj_Title = $_POST['Subj_Title'];

        $sql = "INSERT INTO subjects (Subj_Code,Subj_Title) VALUES ('$Subj_Code','$Subj_Title')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: subjectlist.php");
            // header("Location: Masterlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


?>