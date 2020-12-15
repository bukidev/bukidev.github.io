<?php

    require "connect_db.php";

    $country = $_POST['country'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO tb_ir_questions (COUNTRY, NAME, EMAIL, LOCATION, PHONE, CONTACT) VALUES ('$country', '$name', '$email', '$location', '$phone', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: http://cubebio.asia/controller/test.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


?>