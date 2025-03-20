<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grade Slip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .center {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
     <img src="logo.png" alt="logo" style="width: 100px; height: 100px; display: block; margin: 0 auto;">
    <h2 class="center">CEBU MARY IMMACULATE COLLEGE INC.</h2>
    <h3 class="center">1ST SEMESTER, 2019 - 2020</h3>
    
    
    <table>
        <tr>
        <?php
    $sql = "SELECT * FROM subjects INNER JOIN enrollment ON subjects.Subject_ID = enrollment.Subject_ID 
     INNER JOIN student ON enrollment.Student_ID = student.Student_ID 
     INNER JOIN student_to_studentgrades ON enrollment.E_ID = student_to_studentgrades.E_ID  
     INNER JOIN student_to_course ON student.Student_ID = student_to_course.Student_ID 
     INNER JOIN course ON student_to_course.Course_ID = course.Course_ID
     WHERE student.Student_ID =21";
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
      
        echo " 
              
             <th></th>
            <th>".$row['Fname']." ".$row['Lname']." ".$row['Mname']."  </th>
            <th>".$row['Student_ID']."</th>
        </tr>
        <tr>
            <th>Department</th>
            <th>".$row['Course_Discreption']."</th>
            <th>".$row['Semester']."st Year"."</th>
            
        </tr>
        <tr>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Grades</th>
        </tr>
        <tr>";

        
    }
       if($result->num_rows > 0) {
        foreach($result as $row) {

        echo "
            <td>".$row['Subj_Code']."</td>
            <td>".$row['Subj_Title']."</td>
            <td>".$row['Grade']."</td>
        </tr>";
        $totalUnits = 0;
        }
        $totalUnits = 0;
        foreach($result as $row) {
            $totalUnits += $row['Units']; // Assuming 'Units' is the column name for the number of units
        }
        echo "
            <tr>
                <td colspan='2' class='center'>Total Units</td>
                <td>".$totalUnits."</td>
            </tr>";


         
    }

    ?>

</table>
    
   
</body>
</html>