
<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'aksh');
    if($conn->connect_error){
        die('connection failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(fname, lname, age, email, password, gender) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fname, $lname, $age, $email, $password, $gender);
        $stmt->execute();
        echo "registration successful...";
        $stmt->close();
        $conn->close();
    }
?>