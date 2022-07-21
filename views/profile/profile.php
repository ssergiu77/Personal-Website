<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergiu S</title>

    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/font-import.css">
    <script src="../../public/js/bootstrap.min.js"></script>
    
</head>
    <body>
        <?php session_start(); ?>
        <?php include('../navbar.php') ?>
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
        <?php if(isset($_SESSION['data'])): ?>
            <div class="row mt-5 justify-content-center">
                <div class="col border p-5 m-2" style="background-color:white; border-radius: 20px">
                    <div class="d-flex mb-4">
                        <a class="me-5" href="../../index.php"><img width=40 height=40 src="data:image/png;base64,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"></a>
                        <h2>Profile</h2>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col p-2 text-center">
                            <?php if ($_SESSION['data']['photo_url'] != ""): ?>
                                <img class="rounded-pill" width=120 height=120 src="<?= $_SESSION['data']['photo_url'] ?>" alt="photo_url">
                            <?php else: ?>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAAFdklEQVR4nO2cX4hUVRzHv79zdZOlzUBs7z2zYytarmg9ZP9ls4daRekhoQwDX3rLVAofTIKEHqyHRNSSqKceRIkiKNy2QMI/kWQQ/dEVcSt35swdt3+6YOzmnF8PTpG0s+6dO/d3Ztfzed35/T6HL5ezd8793QE8Ho/H4/F4PB6Pp0kh1wsYj46OjvnW2uUAlgLoAnArgLbqny8COAegH8DRIAj6BgcHz7pZ6bVpxqCnRVG0hojWA3ggYe0XAN4wxhwAUGn80uqnqYKOomgFEe0CcFvKVqcBbDTGfNqAZTWEpghaa90KYBeAZxrc+m2l1KZCofBng/smxnnQ7e3ttwRB0AvgrowUJ6y1K+M4Hsqo/4RwGnQ15MMAFmSsOm2t7XYZtnIl1lq3Vq/krEMGgAVKqYOdnZ0zBFxj4ixoXNmTs9ouxuLukZGRnYK+q3CydWitewD0uXBX9+teaa+LK3oagD0OvAAApdQOAIG4V1oYRdFTSH+fnIYurfUT0lLxoKvf+FzznLRQdI+unl2ckXTWgCuVyrxyufyjlFD0iq4eEDUDpJTqkRRKbx1LhX01IaJuSZ900AuFfePRJSmTDjov7BuPOZIy6aDbrv0RMW6SlEkH3SLsG48bJGUuzzquK3zQQkgHPSrsG48RSZl00MPCvvG4KCmTDnpQ2Dce5yRl0kGfFPbVhIhOSfqkgz4m7KuJtfaopE806CAI+gCwpLMGzMyiT3hEg66ObH0p6azBsTiOf5IUuriPdvYY6x+IaLe4U1oIINBa/wCZMYOxOGmMuRPCs3kurugKgA0OvAAAItoABwOQ4k+DAWB4eHigra0tB2CJsHqvMcbJ1uXsrEMptQnACUHl8ZaWlhcEfVfhdPYuDMPZSqkjyH6/7gfQbYz5JWNPTZye3sVxPGSt7SairzLUHLfWPuQyZKAJjknjOB4iomXM/FYG7fe2tLQ87HpkF2iC+ej/orV+BMBupH9wepKINhSLxUMNWFZDaKqgqwRa6ycBrAfwICa+RsaVs5Q9xpj3ANiM1lcXzRj0v7S3t89VSvVUZzAW4v9vZf0MoJ+ZjzBzn/TXao/H4/F4PB6Px+PxeCYRWut8GIaLsuofhuEirbXzAXgnZx0dHR33WmtXA1gJ4A4AfzHzy6VS6TU07jBIRVG0hYi2AZgO4FsAB621H8RxnOX595iIBZ3P5+dVKpV1ANYCmD/WZ5j5cwCbS6XS12lcURQtUUq9zszLanzkDIB9lUrl3XK5PJDGNVGyDlpprVcBeBZADyb4oIGIeq21r5ZKpaOY+BWuwjDsVkptAbBigjWWmT9RSr1ZLBZ7E7gSk1XQ03K53NPMvBXA7Sn6nAfwGTP3EdH3AAajKLoAAKVSaSaAOUS0mJmXA3gUwOwUrn4i2l4sFvcBuJyiz5g0OmiKomgtEb0CYG6De4tARAPM/JIxZj8aOCfYsKBzudz9zLwTwH2N6umYL621Gxv1jzN10J2dnTNGR0e3AdgMRwM5GWKJ6B1mft4YcylNo1RB5/P5edbaD5l5cZo+k4DvgiB4PM0PGNYddBiGy5RS7wOYVW+PScavzLy6VCodrqe4rqDDMLxHKXUIwI311E9iLgHoMcYkfnMhcdC5XG4WM59CulupycyQUqqrUCj8lqQo8aSStXYrrt+QAWC2tfbFpEWJgyaix5LWTEFWJS2oZ/auo46aqUbi08B6gj5fR81Uo5y0oJ6gP66jZkpBRB8lrUkctFJqO4Dfk9ZNIS4w846kRYmDLhQKRQBrIPzSepPwBxGtNsYkfqe9rrOJ4eHhgdbW1gNKqekAbgYwE00w1J4RlwGcBbCfmdcZY75xvSCPx+PxeDwej8fj8Xg8Htf8DYugki1+vchsAAAAAElFTkSuQmCC">
                            <?php endif;?>
                            <br>
                            <a class="btn btn-sm btn-dark text-decoration-none mt-4" href="/views/auth/LogoutAuth.php">Logout</a>
                        </div>
                        <div class="col mt-2 p-2">
                            <div class="text-muted fs-4">Username</div>
                            <div class="text-dark fs-6"><?= $_SESSION['data']['username'] ?></div>
                        </div>
                        <div class="col mt-2 p-2">
                            <div class="text-muted fs-4">First Name</div>
                            <div class="text-dark fs-6"><?= $_SESSION['data']['first_name'] ?></div>
                        </div>
                        <div class="col mt-2 p-2">
                            <div class="text-muted fs-4">Last Name</div>
                            <div class="text-dark fs-6"><?= $_SESSION['data']['last_name'] ?></div>
                        </div>
                        
                        <div class="col mt-2 p-2">
                            <div class="text-muted fs-4">Email</div>
                            <div class="text-dark fs-6"><?= $_SESSION['data']['email'] ?></div>
                        </div>
                    </div>
                </div>
                <form action="../../app/Helpers/ProfileUserHelper.php" method="post">
                    <input name="id" type="text" hidden value="<?= $_SESSION['data']['id'] ?>">
                    <div class="col border p-5 m-2" style="background-color:white; border-radius: 20px">
                        <div class="mb-4"><h2>Settings</h2></div>
                        <hr>
                        <div class="row justify-content-start">
                            <div class="col col-xxl-4 col-12 p-4 bg-light m-2" style="border-radius: 20px">
                                <div class="text-dark h2 mb-4">First Name</div>
                                <hr>
                                <div class="input-group input-group-default">
                                    <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
                                    <input type="text" name="first_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col col-xxl-4 col-12 p-4 bg-light m-2" style="border-radius: 20px">
                                <div class="text-dark h2 mb-4">Last Name</div>
                                <hr>
                                <div class="input-group input-group-default">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
                                    <input type="text" name="last_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col col-xxl-3 col-12 p-4 bg-light m-2" style="border-radius: 20px">
                                <div class="text-dark h2 mb-4">Username</div>
                                <hr>
                                <div class="input-group input-group-default">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                                    <input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col col-xxl-4 col-12 p-4 bg-light m-2" style="border-radius: 20px">
                                <div class="text-dark h2 mb-4">Email</div>
                                <hr>
                                <div class="input-group input-group-default">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                    <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col col-xxl-4 col-12 p-4 bg-light m-2" style="border-radius: 20px">
                                <div class="text-dark h2 mb-4">Profile Picture</div>
                                <hr>
                                <div class="input-group input-group-default">
                                    <span class="input-group-text" id="inputGroup-sizing-default">URL</span>
                                    <input type="text" name="photo_url" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark mt-2">Save changes</button>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <script>
                window.location.href = "../../index.php";
            </script>
        <?php endif; ?>
    </body>
</html>