<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userid = $_POST["userid"];
    $password = $_POST["pwd"];

    include "Database/connection.php";  
    $sql = "UPDATE `stud` SET `Password`='$password' WHERE `stud_id` = ".$userid;
    if($conn->query($sql) === true){
        echo "<script> alert('Password updated successfully'); window.location.href = './login.php'; </script>";
    }else{
        echo "Somthing went wrong";
    }
}