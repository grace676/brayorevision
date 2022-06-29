<?php
if (isset($_POST["btn_login"])) {
    $userName = $_POST["u_name"];
    $password = $_POST["u_pass"];
    $encryptedPassword = md5($password);

    require_once "db_connection.php";
    $selectUserQuery = "SELECT * FROM `users` WHERE username = '$userName' 
                        and password = '$encryptedPassword'";
    $existingUsers = mysqli_query($connection,$selectUserQuery);
    $countExistingUsers = mysqli_num_rows($existingUsers);
    if ($countExistingUsers > 0){
        session_start();
        $_SESSION["u_name"] = $userName;
        header("location:home.php");
    }else{
        echo "Wrong username or password";
    }
}








