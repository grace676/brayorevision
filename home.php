<?php
session_start();
if (!isset($_SESSION["u_name"])){
    header("location:login_and_register.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body>
    <h1 class="text-info text-center">All Users</h1>
    <a href="logout.php">Logout</a>
    <table class="table table-hover">
        <tr>
            <th>Username</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        require_once "db_connection.php";
        $selectQuery = "SELECT * FROM `users` WHERE 1";
        $users = mysqli_query($connection,$selectQuery);
        foreach ($users as $user) {
            $userName = $user["username"];
            $passWord = $user["password"];
            $id = $user["id"];
            echo "<tr>
                    <td>$userName</td>
                    <td><a class='btn btn-danger' href='delete.php?u_id=$id'>Delete</a></td>
                    <td><a class='btn btn-info' href=''>Update</a></td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>










