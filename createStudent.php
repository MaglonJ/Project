<?php

include_once ('connect.php');
 if(isset($_POST['submit'])){
     $Fname = $_POST['Fname'];
     $Lname = $_POST['Lname'];
     $Mname = $_POST['Mname'];

        $sql = "INSERT INTO student (Fname, Lname,Mname) VALUES ('$Fname', '$Lname', '$Mname')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: studentlist.php");
            // header("Location: Masterlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


?>