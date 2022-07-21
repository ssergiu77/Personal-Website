<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergiu S</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/font-import.css">
    <script src="public/js/bootstrap.min.js"></script>
</head>
    <body>
        <?php session_start(); ?>
        <?php require_once ('app/Database/AutoMigration.php') ;?>
        <?php include('views/navbar.php') ?>
        <div class="row mt-5 justify-content-center">
            <div class="col col-xxl-4 border p-5 m-2" style="background-color:white; border-radius: 20px">
                <div class="mb-4"><h2>Welcome!</h2></div>
                <hr>
                <?php if (isset($_SESSION['data'])): ?>
                    <div class="row">
                        <div class="col-xxl-4 p-2 text-center">
                            <img class="rounded-pill" width=120 height=120 src="public/images/sergiu.jpg" alt="avatar">
                        </div>
                        <div class="col-xxl-8 mt-2 p-2">
                            <div class="text-muted fs-4">Sergiu Strugariu</div>
                            <div class="text-dark fs-6">sstrugariu07@gmail.com</div>
                            <div class="text-dark">Junior Web Developer</div>
                            <div class="text-dark">20 yrs.</div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="h6">Hi 👋, I'm Sergiu, welcome to my website!</div>
                        <div class="p">If you want to see the code behind this website I made you can check it out on my <a class="text-decoration-none border-0 text-primary" href="#github">github</a> 👨‍💻</div>
                        <div class="h5 mt-4">Something about me.</div>
                        <div class="p">I'm a simple boy who started programming at the age of 15 and since then he does what he likes, all this time I tried to learn and gain as much experience as possible to evolve, develop in this direction.</div>
                        <div class="p mt-4">I'm also a ☕ <span class="text-danger">lover</span>.</div>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <div class="col-xxl-4 p-2 text-center">
                            <img class="rounded-pill" width=120 height=120 src="public/images/sergiu.jpg" alt="avatar">
                        </div>
                        <div class="col-xxl-8 mt-2 p-2">
                            <div class="text-muted fs-4">Sergiu Strugariu</div>
                            <div class="text-dark fs-6">sstrugariu07@gmail.com</div>
                            <div class="text-dark">Junior Web Developer</div>
                            <div class="text-dark">20 yrs.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="h6">Hi 👋, I'm Sergiu, welcome to my website!</div>
                        <div class="p">If you want to see the code behind this website I made you can check it out on my <a class="text-decoration-none border-0 text-primary" href="#github">github</a> 👨‍💻</div>
                        <div class="h5 mt-4">Something about me.</div>
                        <div class="p">I'm a simple boy who started programming at the age of 15 and since then he does what he likes, all this time I tried to learn and gain as much experience as possible to evolve, develop in this direction.</div>
                        <div class="p mt-4">I'm also a ☕ <span class="text-danger">lover</span>.</div>
                    </div>
                <?php endif ?>
            </div>

            <div class="col col-xxl-4 border p-5 m-2" style="background-color:white; border-radius: 20px">
                <div class="mb-4"><h2>My Projects</h2></div>
                <hr>
                <div class="row justify-content-center">
                    <div style="height: 290px; width:300px;overflow: scroll;overflow-x: hidden;">
                        <div class="col-xxl-12">
                            <p class="text-danger text-center">The website is still in development</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-xxl-3 border p-5 m-2" style="background-color:white; border-radius: 20px;">
                <div class="mb-4"><h2>Platforms</h2></div>
                <hr>
                <div class="col-sm-12 p-4" style="height: 390px;overflow:scroll;">
                    <div class="row rounded-top mb-3">
                        <div class="d-flex bg-secondary rounded-top p-2">
                            <a href="https://www.linkedin.com/in/sergiustrugariu">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 21" data-supported-dps="84x21" fill="currentColor" class="mercado-match" width="84" height="21" focusable="false">
                                    <g>
                                        <g class="background-mercado">
                                        <path d="M12.5 2.75a1.75 1.75 0 101.8 1.75 1.75 1.75 0 00-1.8-1.75zM11 8h3v10h-3zM22.34 7.76A4.06 4.06 0 0019 9.39V8h-3v10h3v-5a2.31 2.31 0 012.16-2.48c1.1 0 1.84.82 1.84 2.44V18h3v-6.25c0-3.06-1.89-3.99-3.66-3.99zM82.5 0h-18A1.5 1.5 0 0063 1.5v18a1.5 1.5 0 001.5 1.5h18a1.5 1.5 0 001.5-1.5v-18A1.5 1.5 0 0082.5 0zM69 18h-3V8h3zM67.5 6.25a1.75 1.75 0 111.8-1.75 1.75 1.75 0 01-1.8 1.75zM81 18h-3v-5.09c0-1.62-.74-2.44-1.84-2.44A2.31 2.31 0 0074 13v5h-3V8h3v1.39a4.06 4.06 0 013.3-1.63c1.77 0 3.66.93 3.66 4zM3 3H0v15h9v-3H3V3zM57 9a4.23 4.23 0 00-3.17-1.3A4.9 4.9 0 0049 12.94a5 5 0 004.87 5.36 3.78 3.78 0 003.31-1.61V18H60V3h-3zm-2.54 6.8A2.57 2.57 0 0151.9 13a2.55 2.55 0 012.56-2.8A2.63 2.63 0 0157.1 13a2.6 2.6 0 01-2.64 2.8zM38.04 8H34.4l-3.34 4.04H31V3h-3v15h3v-4.81h.06L34.48 18h3.75l-4.06-5.5L38.04 8z"></path>
                                        <path d="M43.13 7.7A5 5 0 0038 12.87a5.11 5.11 0 005.24 5.43 5.5 5.5 0 004.39-1.94l-1.93-1.3a3.28 3.28 0 01-2.4 1 2.24 2.24 0 01-2.38-2V14h7v-.77C48 9.52 45.85 7.7 43.13 7.7zm-2.2 4.3a2.16 2.16 0 012.21-2.1 2 2 0 012 2.1z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="">
                            <img class="rounded-pill mt-3 mb-3" width=50 height=50 src="public/images/sergiu.jpg" alt="">
                            <div>
                                <h6>Sergiu Strugariu</h6>
                                <p>Junior Web Developer</p>
                            </div>
                            <div style="line-height: 0.8;">
                                <h6>Recentlly worked at:</h6>
                                <div class="d-flex">
                                    <img width=25 height=25 src="public/images/cloudlab.jpg" alt="">
                                    <p class="mt-1 ms-3">CloudLab</p>
                                </div>
                                <div class="d-flex">
                                    <img width=25 height=25 src="public/images/webmagnat.jpg" alt="">
                                    <p class="mt-1 ms-3">WebMagnat</p>
                                </div>
                                <div class="d-flex">
                                    <img width=25 height=25 src="public/images/bssone.jpg" alt="">
                                    <p class="mt-1 ms-3">BSS ONE</p>
                                </div>
                            </div>
                            <a class="btn btn-sm btn-primary rounded-pill mb-2" href="https://www.linkedin.com/in/sergiustrugariu/">View profile</a>
                        </div>
                    </div>
                    <div class="row rounded-top mb-3" id="github">
                        <a class="text-decoration-none" href="https://github.com/ssergiu77">
                            <div class="d-flex bg-secondary rounded-top text-dark p-2">
                                <svg aria-hidden="true" height="24" viewBox="0 0 16 16" version="1.1" width="24" data-view-component="true" class="octicon octicon-mark-github">
                                    <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                                </svg>
                                <h6 class="ms-3" style="margin-top:0.9px;">Github</h6>
                            </div>
                        </a>
                        <div class="">
                            <img class="rounded-pill mt-3 mb-3" width=50 height=50 src="public/images/sergiu.jpg" alt="">
                            <h6>Sergiu Strugariu</h6>
                            <p>So you wanna see how my code is written? Here it is 😊</p>
                            <a class="btn btn-sm btn-dark rounded-pill mb-2" href="https://github.com/ssergiu77">View profile</a>
                        </div>
                    </div>
                    <div class="row rounded-top  mb-3">
                        <a class="text-decoration-none" href="https://www.reddit.com/user/sergiustrr">
                            <div class="d-flex bg-secondary rounded-top text-danger p-2">
                                <img width=24 height=24 src="public/images/reddit.png" alt="">
                                <h6 class="ms-3" style="margin-top:0.9px;">Reddit</h6>
                            </div>
                        </a>
                        <div class="">
                            <img class="rounded-pill mt-3 mb-3" width=50 height=50 src="public/images/sergiu.jpg" alt="">
                            <h6>Sergiu Strugariu</h6>
                            <p>Here I'm asking question everytime when I'm blocked at a problem.</p>
                            <a class="btn btn-sm btn-danger rounded-pill mb-2" href="https://www.reddit.com/user/sergiustrr/">View profile</a>
                        </div>
                    </div>
                    <div class="row rounded-top mb-3">
                        <a class="text-decoration-none" href="https://twitter.com/raraitul">
                            <div class="d-flex bg-secondary rounded-top text-primary p-2">
                                <img width=24 height=24 src="public/images/twitter.png" alt="">
                                <h6 class="ms-3" style="margin-top:0.9px;">Twitter</h5>
                            </div>
                        </a>
                        <div class="">
                            <img class="rounded-pill mt-3 mb-3" width=50 height=50 src="public/images/sergiu.jpg" alt="">
                            <h6>Sergiu Strugariu</h6>
                            <p>I'm using that much Twitter but sometimes I'm just checking news about Laravel.</p>
                            <a class="btn btn-sm btn-primary rounded-pill mb-2" href="https://twitter.com/raraitul">View profile</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
    </body>
</html>