<?php
session_start();
if (!isset($_SESSION["u_name"])){
    header("location:login_and_register.php");
}else{
    if (isset($_GET["u_id"])){
        $usrId = $_GET["u_id"];
        require_once "db_connection.php";
        $deleteQuery = "DELETE FROM `users` WHERE id='$usrId'";
        $delete = mysqli_query($connection, $deleteQuery);
        if (isset($delete)){
            header("location:home.php");
        }else{
            echo "Deleting failed";
        }
    }
}
?>


