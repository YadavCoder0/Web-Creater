<?php
    $fullname = $_POST['fullname'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $collegename = $_POST['collegename'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = $_POST['password'];
    //data base connection
   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error){
    die('Connection Failde : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into signup(fullname, phoneno, email, collegename, username,password) values(?, ? ,?, ?, ?, ?)");
        $stmt->bind_param("vivvvi",$fullname, $phoneno, $email, $collegename, $username, $password);
        $stmt->execute();
        echo "Successful...";
        $stmt->close();
        $conn->close();
    }
   
?>