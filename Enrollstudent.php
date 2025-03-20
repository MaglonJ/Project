<?php   
include ('connect.php');
$sql = "SELECT * FROM student
INNER JOIN student_to_course ON student_to_course.Student_ID = student.Student_ID
INNER JOIN course ON student_to_course.Course_ID = course.Course_ID";
$result = $conn->query($sql);
?>
<form method="POST"action="SaveEnrollment.php" > 
    <h1>Enrollment</h1>
    <label for="Student_ID">Student ID:</label>
    <select name="Student_ID">
        <option value=" ">Select Student</option>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value=".$row['Student_ID'].">".$row['Fname']. " ".$row['Lname']." ".$row['Course_Code']." ".$row['Course_Discreption']."</option>";"</option>";
            }
        }
        ?>
    </select>
    <label for="Subject_ID">Subject_ID:</label>
    <select name="Subject_ID">
        <option value=" ">Select Subject</option>
        <?php
        $sql1 = "SELECT * FROM subjects";
    $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                echo "<option value=".$row['Subject_ID'].">".$row['Subj_Code']." ".$row['Subj_Title']."</option>";
            }
        }
        ?>
    </select>
    <label for="Semester">Semester:</label>
    <select name="Semester" id="Semester" required>
        <option value="">Select Semester</option>
        <option value="1">1st Semester</option>
        <option value="2">2nd Semester</option>
        <option value="3">Summer</option>
    </select>
    <label for="SchoolYear">School Year:</label>
    <select name="SchoolYear" id="SchoolYear" required>
        <option value="">Select School Year</option>
        <option value="2024-2025">2024-2025</option>
        <option value="2025-2026">2025-2026</option>
        <option value="2026-2027">2026-2027</option>
    </select>
    <input type="submit" name="submit" value="submit">
    </form>

    