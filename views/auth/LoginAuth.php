<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergiu S (Login)</title>

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
                    <form class="m-5" action="../../app/Helpers/LoginUserHelper.php" method="post">
                        <div class="card">
                            <div class="card-header fs-3 text-center">
                                Register
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                    <input name="email" type="email" required class="form-control" placeholder="Email" aria-label="Ban reason" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                    <input name="password" type="password" required class="form-control" placeholder="Password" aria-label="Ban reason" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-success mb-2" href="RegisterAuth.php">Go to Register</a>
                                <button type="submit" class="btn btn-primary mb-2">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>