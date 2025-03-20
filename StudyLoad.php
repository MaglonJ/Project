<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studyload</title>
</head>
<body>
<h1>Study Load List</h1>
    <a href="StudyLoad.php">Add Study Load</a>
    <br>
    <br>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>

            <th>Subject Code</th>
            <th>Subject Title</th>
            <th>Grade</th>

            
        </tr>
        <?php
        $sql = "SELECT  DISTINCT * FROM student_to_studentgrades INNER JOIN enrollment ON student_to_studentgrades.E_ID = enrollment.E_ID INNER JOIN student ON enrollment.Student_ID = student.Student_ID INNER JOIN subjects ON enrollment.Subject_ID = subjects.Subject_ID  WHERE student.Student_ID = 20";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr><td>" . $row['Student_ID'] . "</td><td>" .$row['Fname']." ".$row['Mname']." " .$row['Lname']."</td><td>" . $row['Subj_Code'] . "</td><td>" . $row['Subj_Title'] . "</td><td>" . $row['Grade'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }
    th, td {
        padding: 12px;s
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    a {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
    }
    a:hover {
        background-color: #45a049;
    }
    </style>
    
    
</body>
</html>
