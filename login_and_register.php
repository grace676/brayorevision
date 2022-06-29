<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Register</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body class="myHomeBg">
    <section>
        <div class="row contentDiv">
            <div class="col-2"></div>
            <div class="col-4 contentLeft p-3">
                <h4>Login here</h4>
                <form method="post" action="login_handler.php">
                    <label>Username</label><br>
                    <input name="u_name" class="form-control" type="text">
                    <label>Password</label><br>
                    <input name="u_pass" class="form-control" type="password"> <br>
                    <input name="btn_login" class="btn btn-info" value="Login" type="submit">
                </form>
            </div>
            <div class="col-4 contentRight p-3">
                <h4>Register here</h4>
                <form method="post" action="register_handler.php">
                    <label>Username</label><br>
                    <input name="u_name" class="form-control" type="text">
                    <label>Password</label><br>
                    <input name="u_pass" class="form-control" type="password"> <br>
                    <input name="btn_reg" class="btn btn-info" value="Register" type="submit">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </section>
</body>
</html>
