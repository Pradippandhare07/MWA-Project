<?php
    $Name = $_POST['Name'];
    $Courses = $_POST['Courses'];
    $email= $_POST['email'];
    $Password = $_POST['Password'];
    // $Confirm_Password=$_POST['Confirm_Password'];

    $conn = new mysqli('localhost', 'root', '', 'Registration');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into Courses(Name,Courses, email,Password) values(?,?,?,?)");
        $stmt->bind_param("ssss", $Name, $Courses,$email,  $Password );
        $stmt->execute();
        echo "registration successful";
        $stmt->close();
        $conn->close();
    }
?>