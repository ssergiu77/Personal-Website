<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergiu S</title>

    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/font-import.css">
    <script src="../public/js/bootstrap.min.js"></script>
</head>
<body class="m-3">
    <nav class="navbar rounded-pill navbar-expand-md navbar-dark bg-dark">
        <?php if (isset($_SESSION['data'])) : ?>
            <div class="container">
                <!-- <div class="text-light"><img class="rounded-pill text-center" width="70" height="70" src="https://cdn.discordapp.com/attachments/624609875896303628/999240505349124157/91ce2d87-385f-4f25-a9df-4810a6e4c273_hd_1.jpg" alt=""></div>  -->
                <div class="container d-flex justify-content-around">
                    <a class="text-decoration-none" href="">
                        <div class="text-light text-center m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 30 30" style=" fill:#FFFFFF;">    <path d="M 4 3 C 2.895 3 2 3.895 2 5 L 2 8 L 13 8 L 28 8 L 28 7 C 28 5.895 27.105 5 26 5 L 11.199219 5 L 10.582031 3.9707031 C 10.221031 3.3687031 9.5701875 3 8.8671875 3 L 4 3 z M 3 10 C 2.448 10 2 10.448 2 11 L 2 23 C 2 24.105 2.895 25 4 25 L 26 25 C 27.105 25 28 24.105 28 23 L 28 11 C 28 10.448 27.552 10 27 10 L 3 10 z"></path></svg>
                            <p class="text-light">Projects</p>
                        </div>                        
                    </a>
                    <a class="text-decoration-none" href="/views/profile/profile.php">
                        <div class="text-light text-center m-2">
                            <?php if ($_SESSION['data']['photo_url'] != ""): ?>
                                <img class="rounded-pill" width=50 height=50 src="<?= $_SESSION['data']['photo_url'] ?>" alt="photo_url">
                            <?php else: ?>
                                <img width=50 height=50 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAAEHElEQVR4nO3cz4tVZRzH8c/XmUAlg2hsExY2RRNqoFIEokLoWIiLBLEfVH9Aumujq1wltCzEomXtg35hCw2cqTFpUeHMTTHTaKFBpIWgOL5dPGcgLs0Zz7n3fp8z935fMKuZcz/n+XDumfPjOUcKIYQQQgghhIay3CtQBnhM0g5JmySNSXpE0ori19ckXZLUkjQh6ZiZnc+xnosSMAy8CnxLdZPAK8BQ7nE0GvA8cLZGwe1awHju8TQOsBz4qAsFt/sQWJZ7fI0APAj80IOS55wGVuYeZ1ZFya0eljynNbBlk3YXvdyS250GluYetzt6s09eyNHc43YFjGcoec4LOcbsfsICDEualvS4d3ahJWmtmc16hi7xDCu8pHwlS+kMc493aI6i38yQ2W6fd6DrroN07eKcZ+Y8kDRqZhe8Ar236B3OefMxSa6n6N5Fb3LOK7PZM8y76Ced88qMeYZ5F73KOa/Mw55h3kWvWPhP3NznGeZ91IFn3kLMzG38OY6jB1IU7cS76JvOeWVueIZ5F/2Pc16Za55h3kX/7pxX5pJnmHfR0855ZWY8w7yLnnTOKzPhGeZd9DGlK2e5obQublyLLqZsTXlmzmPSzH7zDMxxHP1+hsx273kH5rhnOCTpjKQnvLML05Ke6vt7hsUA93vn/sd+75KzIs2L83Yk97jdActIs4e8TDGIM5UkCViJz9y7GWAk93izKsr+voclTzGoExzbkXYjR3tQ8hEGdXdRBthG+pp36gzwXO7xNBowBLwMTAC3K5R7GzgJ7AUad0Oj6U9lrVaa6LJZaapC+1NZF5UmLZ5UeirL9bQ6hBBCCCGEEEJYRIBVwJoefv4aoEkT4P0AzwCHgZ+KC0I3gQPdvBgELAEOFp8N8CPwDvB0tzIaCRgFDgHnSq7AnQA2diFrI/BNSc5Z4G3g0W6MLbtiq9oFfAXM3u31TuBLYEuVLbzI2lpk3a1Z4AtgZ5WsxiC9F+kN4JcKg/4/l4GPgdeA9cAIcE/xMwJsAF4HPgGudJg1U3zWcO7+FgQY6cVTv3Y46JzOk248NPNaPfAs6UZov/iOJv3jBJaSjiBu5e2lJ2aBD4DlnfbU0dcDGJX0qaS1na5Iw/0s6cVOXmBY+z8tsFXSKfV/yZK0TtIpYEvdD6i1RZP2Xccl3Vs3eJG6LmnczCo/uVC5aOABpec/BnX2z5+SxszsryoL1dl1HNTgliylsR+oulCdonfVWKbf7Ky6QJ1dx3VJg/6+z3/NrNKbGups0VdqLNNvLlddoE7Rn9dYpt98VnWBOruOh5QO4O+vumyfuCppnZlVety68hZtZn9I2ivnh9Yb4m9Ju6uWLHVwCk6a6fmWpO2SVktq/uXFem5JuiDpa0nvmtnFzOsTQgghhBBCCCGEkN0dCw6ZaydNERoAAAAASUVORK5CYII=">
                            <?php endif;?>
                            <p class="text-light"><?= $_SESSION['data']['full_name'] ?></p>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="">
                        <div class="text-light text-center m-2">
                            <img width="50" height="50" src="data:image/png;base64,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">
                            <p class="text-light">Platforms</p>
                        </div>                        
                    </a>
                    
                </div>
            </div>
        <?php else: ?>
            <div class="container">
                <!-- <div class="text-light"><img class="rounded-pill text-center" width="70" height="70" src="https://cdn.discordapp.com/attachments/624609875896303628/999240505349124157/91ce2d87-385f-4f25-a9df-4810a6e4c273_hd_1.jpg" alt=""></div>  -->
                <div class="container d-flex justify-content-around">
                    <a class="text-decoration-none" href="">
                        <div class="text-light text-center m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 30 30" style=" fill:#FFFFFF;">    <path d="M 4 3 C 2.895 3 2 3.895 2 5 L 2 8 L 13 8 L 28 8 L 28 7 C 28 5.895 27.105 5 26 5 L 11.199219 5 L 10.582031 3.9707031 C 10.221031 3.3687031 9.5701875 3 8.8671875 3 L 4 3 z M 3 10 C 2.448 10 2 10.448 2 11 L 2 23 C 2 24.105 2.895 25 4 25 L 26 25 C 27.105 25 28 24.105 28 23 L 28 11 C 28 10.448 27.552 10 27 10 L 3 10 z"></path></svg>
                            <p class="text-light">Projects</p>
                        </div>                        
                    </a>                    
                    <a class="text-decoration-none" href="">
                        <div class="text-light text-center m-2">
                            <img width="50" height="50" src="data:image/png;base64,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">
                            <p class="text-light">Platforms</p>
                        </div>                        
                    </a>                    
                    <a class="text-decoration-none" href="/views/auth/RegisterAuth.php">
                        <div class="text-light text-center m-2">
                            <img width="50" height="50" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAAEHElEQVR4nO3cz4tVZRzH8c/XmUAlg2hsExY2RRNqoFIEokLoWIiLBLEfVH9Aumujq1wltCzEomXtg35hCw2cqTFpUeHMTTHTaKFBpIWgOL5dPGcgLs0Zz7n3fp8z935fMKuZcz/n+XDumfPjOUcKIYQQQgghhIay3CtQBnhM0g5JmySNSXpE0ori19ckXZLUkjQh6ZiZnc+xnosSMAy8CnxLdZPAK8BQ7nE0GvA8cLZGwe1awHju8TQOsBz4qAsFt/sQWJZ7fI0APAj80IOS55wGVuYeZ1ZFya0eljynNbBlk3YXvdyS250GluYetzt6s09eyNHc43YFjGcoec4LOcbsfsICDEualvS4d3ahJWmtmc16hi7xDCu8pHwlS+kMc493aI6i38yQ2W6fd6DrroN07eKcZ+Y8kDRqZhe8Ar236B3OefMxSa6n6N5Fb3LOK7PZM8y76Ced88qMeYZ5F73KOa/Mw55h3kWvWPhP3NznGeZ91IFn3kLMzG38OY6jB1IU7cS76JvOeWVueIZ5F/2Pc16Za55h3kX/7pxX5pJnmHfR0855ZWY8w7yLnnTOKzPhGeZd9DGlK2e5obQublyLLqZsTXlmzmPSzH7zDMxxHP1+hsx273kH5rhnOCTpjKQnvLML05Ke6vt7hsUA93vn/sd+75KzIs2L83Yk97jdActIs4e8TDGIM5UkCViJz9y7GWAk93izKsr+voclTzGoExzbkXYjR3tQ8hEGdXdRBthG+pp36gzwXO7xNBowBLwMTAC3K5R7GzgJ7AUad0Oj6U9lrVaa6LJZaapC+1NZF5UmLZ5UeirL9bQ6hBBCCCGEEEJYRIBVwJoefv4aoEkT4P0AzwCHgZ+KC0I3gQPdvBgELAEOFp8N8CPwDvB0tzIaCRgFDgHnSq7AnQA2diFrI/BNSc5Z4G3g0W6MLbtiq9oFfAXM3u31TuBLYEuVLbzI2lpk3a1Z4AtgZ5WsxiC9F+kN4JcKg/4/l4GPgdeA9cAIcE/xMwJsAF4HPgGudJg1U3zWcO7+FgQY6cVTv3Y46JzOk248NPNaPfAs6UZov/iOJv3jBJaSjiBu5e2lJ2aBD4DlnfbU0dcDGJX0qaS1na5Iw/0s6cVOXmBY+z8tsFXSKfV/yZK0TtIpYEvdD6i1RZP2Xccl3Vs3eJG6LmnczCo/uVC5aOABpec/BnX2z5+SxszsryoL1dl1HNTgliylsR+oulCdonfVWKbf7Ky6QJ1dx3VJg/6+z3/NrNKbGups0VdqLNNvLlddoE7Rn9dYpt98VnWBOruOh5QO4O+vumyfuCppnZlVety68hZtZn9I2ivnh9Yb4m9Ju6uWLHVwCk6a6fmWpO2SVktq/uXFem5JuiDpa0nvmtnFzOsTQgghhBBCCCGEkN0dCw6ZaydNERoAAAAASUVORK5CYII=">
                            <p class="text-light">Register</p>
                        </div>
                    </a>                
                </div>
            </div>
        <?php endif;?>
    </nav>
</body>