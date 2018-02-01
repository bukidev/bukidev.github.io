<?php

    //session_start();
    
    echo "checking... <br>";

    require "connect_db.php";

    $login_id = $_POST['login_id'];
    $login_pass = $_POST['login_password'];

    $sql = "SELECT USER_ID, PASSWORD FROM tb_users WHERE USER_ID = '$login_id ' AND PASSWORD = '$login_pass'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "login successfull";
    } else {
        echo "your pasword is incorrect!";
        
    }
    $conn->close();


?>