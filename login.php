<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header" style="background-color: #8B1414; color: white;">Student Login</div>
        <div class="card-body">
            <center>
                <h2><i>MEASI INSTITUTE OF INFORMATION TECHNOLOGY</i></h2>
            </center>
            <form method="POST" action="login1.php">
                <div class="row">
                    <div class="col-md-4">
                        <img src="admin/images/miit.png" alt="..." width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div>
                                <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="user" required="required" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required="required">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block" style="background-color: #8B1414;">Login</button>
                <a type="button" href="register.php" class="btn btn-info btn-block" style="background-color: #00483D; color: white;">Register</a>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
