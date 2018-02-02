<?php

    session_start();
    
    echo "checking... <br>";

    require "connect_db.php";

    $login_id = $_POST['login_id'];
    $login_pass = $_POST['login_password'];

    $sql = "SELECT USER_ID, PASSWORD FROM tb_users WHERE USER_ID = '$login_id ' AND PASSWORD = '$login_pass'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        //echo "login successfull";
        
        $row = mysqli_fetch_array($result);
        $_SESSION["USER_ID"] = $row["USER_ID"];
        $_SESSION["NAME"] = $row["NAME"];
        
        header('Location: http://cubebio.asia/');
    } else {
        //echo "your password is incorrect!";
        header('Location: http://cubebio.asia/view/login-wrong.php');
        
    }
    $conn->close();


?>