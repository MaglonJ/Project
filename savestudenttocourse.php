
<?php
include_once ('connect.php');
 if(isset($_POST['submit'])){
        $Student_ID = $_POST['Student_ID'];
        $Course_ID = $_POST['Course_ID'];
        $sql = "INSERT INTO student_to_course (Student_ID,Course_ID) VALUES ('$Student_ID','$Course_ID')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: Studenttocourselist.php");
            // header("Location: Masterlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>