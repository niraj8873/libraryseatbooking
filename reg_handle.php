<?php
//check if the form is submitted
if(isset($_POST["submit"])){
    //Retrive data
    $studentName = $_POST["name"];
    $studentAddress = $_POST["address"];
    $studentPhone_No = $_POST["number"];
    $studentEmail = $_POST["email"];
    $studentuserId = $_POST["user_id"];
    $studentPassword = $_POST["pwd"];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];

    include "Database/connection.php";  


    $sql = "INSERT INTO `stud`(`Name`, `Address`, `Phone_No.`, `Email`, `User_Id`,`answer1`, `answer2`, `answer3`, `Password`) VALUES('$studentName','$studentAddress','$studentPhone_No.','$studentEmail','$studentuserId', '$answer1', '$answer2', '$answer3', '$studentPassword')";


    if ($conn->query($sql) === TRUE) {
      echo "<script> window.location.replace('./login.php'); alert('New record created successfully') </script>";
      //header("Location: login.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
  }


?>