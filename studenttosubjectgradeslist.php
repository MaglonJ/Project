<?php
include_once ('connect.php');
  $sql = "SELECT * FROM student
  INNER JOIN student_to_course ON student_to_course.Student_ID = student.Student_ID
  INNER JOIN course ON student_to_course.Course_ID = course.Course_ID
  INNER JOIN enrollment ON student.Student_ID = enrollment.Student_ID
  INNER JOIN student_to_studentgrades ON enrollment.E_ID = student_to_studentgrades.E_ID 
  INNER JOIN subjects ON enrollment.Subject_ID = subjects.Subject_ID";
$result = $conn->query($sql);
?>
<!DOCTYPE html
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
<table>
    <tr>
        <th>Student_ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Course Code</th>
        <th>Course Discreption</th>
        <th>Subject Code</th>
        <th>Subject Title</th>
        <th>Grade</th>
        <th>Units</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['Student_ID']."</td>";
            echo "<td>".$row['Fname']."</td>";
            echo "<td>".$row['Lname']."</td>";
            echo "<td>".$row['Course_Code']."</td>";
            echo "<td>".$row['Course_Discreption']."</td>";
            echo "<td>".$row['Subj_Code']."</td>";
            echo "<td>".$row['Subj_Title']."</td>";
            echo "<td>".$row['Grade']."</td>";
            echo "<td>".$row['Units']."</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
</table>
</body>
</html>
