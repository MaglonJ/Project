<?php
include_once ('connect.php');
 if(isset($_POST['submit'])){
    $E_ID = $_POST['E_ID'];
    $Grade = $_POST['Grade']; 
    $Units = $_POST['Units'];
    $sql = "INSERT INTO student_to_studentgrades(E_ID,Grade, Units) VALUES ('$E_ID','$Grade', '$Units')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: studenttosubjectgradeslist.php");
            // header("Location: Masterlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>