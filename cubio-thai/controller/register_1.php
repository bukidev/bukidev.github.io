<?php

    require "connect_db.php";

    $user_agreement = $_POST['agree'];
    $privacy = $_POST['agree2'];

    $id = $_POST['user_id'];
    $pwd = $_POST['user_password'];
    $name = $_POST['user_name'];
    $nickname = $_POST['user_nick'];
    $email = $_POST['user_email'];
    $mailing = $_POST['user_mailing'];
    $open = $_POST['user_open'];

    $sql = "INSERT INTO tb_users (USER_ID, PASSWORD, NAME, NICKNAME, EMAIL, MAILING, OPEN, USER_AGREEMENT, PRIVACY) VALUES ('$id', '$pwd', '$name', '$nickname', '$email', '$mailing', '$open', '$user_agreement' ,'$privacy')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


?>