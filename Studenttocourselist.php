<?php
include ('connect.php');
$sql = "SELECT student.Fname, student.Lname, course.Course_Code, course.Course_Discreption FROM student_to_course
INNER JOIN student ON student_to_course.Student_ID = student.Student_ID
INNER JOIN course ON student_to_course.Course_ID = course.Course_ID";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of student</title>
</head>

<style>
table {
    width: 100%;
    background-color: #f2f2f2;
    border-collapse: collapse;
}
td:hover {  
    background-color:blue;
    color: white;
}                                                                                                                                       
table, th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}
th {
    background-color: #4CAF50;
    color: white;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
tr:nth-child(odd) {
    background-color: #f1f1f1;
}
</style>

<body>
<h1>list of student</h1>
<a href="Add_Student.php">Add Student</a>
<a href="Add_Course.php">Add Course</a>
<a href="Add_Subject.php">Add Subject</a>
<a href="Enrollstudent.php">Add Enrollment</a>
<a href="Add_StudentToCourse.php">Add_StudentToCourse</a>
<a href="add_studentstosubjectgrades.php">Add_StudentGrades</a>
<br></br>
<table border="1">
    <tr>    
        <th>Student</th>  
        <th>Course</th> 
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['Fname']. " ".$row['Lname']."</td>";
            echo "<td>".$row['Course_Code']." ".$row['Course_Discreption']."</td></tr>";
        }
    }
    ?>
    
</table>
</body>
</html>