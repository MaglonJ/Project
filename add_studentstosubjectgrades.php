<?php   
include ('connect.php');
?>

<form method="POST"action="savestudenttosubjectgrades.php" > 
    <h1>Enrollment</h1>
    <label for="Student_ID">Student ID:</label>
    <select name="Student_ID">                                                          
        <option value=" ">Select Student</option>                   
        <?php
        $sql = "SELECT * FROM student
        INNER JOIN student_to_course ON student_to_course.Student_ID = student.Student_ID
        INNER JOIN course ON student_to_course.Course_ID = course.Course_ID
        INNER JOIN enrollment ON student.Student_ID = enrollment.Student_ID
        INNER JOIN subjects ON enrollment.Subject_ID = subjects.Subject_ID";
        $result = $conn->query($sql);
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
    <label for="E_ID">E_ID:</label>
    <select name="E_ID">
        <option value=" ">Select E_ID</option>
        <?php
        $sql1 = "SELECT * FROM enrollment";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                echo "<option value=".$row['E_ID'].">".$row['E_ID']."</option>";
            }
        }
        ?>
    </select>
    <input type="text" name="Grade" placeholder="Grade" required> 
    <input type="text" name="Units" placeholder="Units" required> 
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>