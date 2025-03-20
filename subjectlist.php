<?php
require_once('connect.php');
$sql = "SELECT * FROM subjects";
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
<h1>Student List</h1>
<a href="Add_Student.php">Add Student</a>
<a href="Add_Course.php">Add Course</a>
<a href="Add_Subject.php">Add Subject</a>
<a href="Enrollstudent.php">Add Enrollment</a>
<a href="Add_StudentToCourse.php">Add_StudentToCourse</a>
<br></br>
<table border="1">
    <tr>    
        
        <th>Subject_Code</th>
        <th>Subject_Title</th>                                                                                              
                                                                                                                                                                     
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['Subj_Code']."</td>";
            echo "<td>".$row['Subj_Title']."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>
</body>
</html>