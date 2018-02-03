<?php

    require "connect_db.php";

    $user_agreement = $_POST['agree'];
    $privacy = $_POST['agree2'];

    $id = $_POST['reg_mb_id'];
    $pwd = $_POST['user_password'];
    $name = $_POST['user_name'];
    $nickname = $_POST['user_nick'];
    $email = $_POST['user_email'];
    $mailing = $_POST['user_mailing'];
    $open = $_POST['user_open'];

    $sql2 = "INSERT INTO tb_users (USER_ID, PASSWORD, NAME, NICKNAME, EMAIL, MAILING, OPEN, USER_AGREEMENT, PRIVACY) VALUES ('$id', '$pwd', '$name', '$nickname', '$email', '$mailing', '$open', '$user_agreement' ,'$privacy')";

    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
        header('Location: http://cubebio.asia/view/register_finish.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


?>