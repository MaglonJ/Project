<?php
include_once ('connect.php');
?>
<form method="POST"action="createCourse.php" > 
    <input type="text" name="Course_Code" placeholder="Course_Code" required> 
    <input type="text" name="Course_Discreption" placeholder="Course_Discreption" required> 
    <input type="submit" name="submit" value="Submit">

</form>
<style>
    label {
        position: absolute;
        left: 45px;
        top: 46px;
        background-color: white;
        padding: 0px 5px;
        transition: 0.3s ease, color 0.3s ease;
    }
    input:focus + label {
     transform: translateY(-25px);
     color:#0051ff;
    }
    input:focus {
    border-color: #0051ff;
    }
    input[type=text] {
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
    border-radius: 10px;
    }
    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;   
    border: none;
    cursor: pointer;
    border-radius: 10px;
    }
    input[type=submit]:hover {
    background-color: #0051ffs;
    color: white;
    }
      

</style>