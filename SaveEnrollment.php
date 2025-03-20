    <?php   
include_once ('connect.php');
 if(isset($_POST['submit'])){
        $Student_ID = $_POST['Student_ID'];
        $Subject_ID = $_POST['Subject_ID'];
        $Semester = $_POST['Semester'];
        $SchoolYear = $_POST['SchoolYear'];
        $sql = "INSERT INTO enrollment (Student_ID,Subject_ID,Semester,SchoolYear) VALUES ('$Student_ID','$Subject_ID','$Semester','$SchoolYear')";
        if ($conn->query($sql) === TRUE) {
            header("Location: EnrollmentList.php");
            // header("Location: Masterlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


?>