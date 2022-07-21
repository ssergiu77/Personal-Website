<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergiu S (Register)</title>

    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/font-import.css">
    <script src="../../public/js/bootstrap.min.js"></script>
</head>
    <body>
        <?php include('../navbar.php') ?>
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="m-5" action="../../app/Helpers/RegisterUserHelper.php" method="post">
                        <div class="card">
                            <div class="card-header fs-3 text-center">
                                Register
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">First Name</span>
                                    <input name="first_name" type="text" required class="form-control" placeholder="First Name" aria-label="1" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Last Name</span>
                                    <input name="last_name" type="text" required class="form-control" placeholder="Last Name" aria-label="1" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Username</span>
                                    <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Ban reason" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                    <input name="email" type="email" required class="form-control" placeholder="Email" aria-label="Ban reason" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                    <input name="password" type="password" required class="form-control" placeholder="Password" aria-label="Ban reason" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Repeat Password</span>
                                    <input name="repeat_password" required type="password" class="form-control" placeholder="Repeat Password" aria-label="Ban reason" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-success mb-2" href="LoginAuth.php">Go to Login</a>
                                <button type="submit" class="btn btn-primary mb-2">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>