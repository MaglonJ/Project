<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddStudentToCourse</title>
</head>
<body>
    <?php
 require_once('connect.php');
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $sql1 = "SELECT * FROM course";
    $result1 = $conn->query($sql1);
    ?>
   <form method="POST"action="savestudenttocourse.php" > 
    <h1>Add Student To Course</h1>
    <label for="Student_ID">Student ID:</label>
    <select name="Student_ID">
        <option value=" ">Select Student</option>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value=".$row['Student_ID'].">".$row['Fname']. " ".$row['Lname']."</option>";
            }
        }
        ?>
    </select>
    <label for="Course_ID">Course ID:</label>
    <select name="Course_ID">
        <option value=" ">Select Course</option>
        <?php
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                echo "<option value=".$row['Course_ID'].">".$row['Course_Code']." ".$row['Course_Discreption']."</option>";
            }
        }
        ?>
    </select>
    <input type="submit" name="submit" value="submit">
    

</form>

</body>
</html>