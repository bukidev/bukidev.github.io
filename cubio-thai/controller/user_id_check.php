<?php

    //connect to database  
    require "/controller/connect_db.php"
        
    //get the username  
    $username = mysql_real_escape_string($_POST['username']);  
  
    $sql = "SELECT * FROM tb_users WHERE USER_ID = '$username'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        //echo "login successfull";
        
        //$row = mysqli_fetch_array($result);
        //$_SESSION["USER_ID"] = $row["USER_ID"];
        //$_SESSION["NAME"] = $row["NAME"];
        
        //header('Location: http://cubebio.asia/');
        echo "<span style='color:brown;'>Sorry username already taken !!!</span>";
    } else {
        //echo "your password is incorrect!";
        //header('Location: http://cubebio.asia/view/login-wrong.php');
        echo "<span style='color:green;'>available</span>";
    }


    //$conn->close();

?>