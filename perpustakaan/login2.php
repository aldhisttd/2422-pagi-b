<?php
session_start();
if (isset($_SESSION['is_login'])) {
    header('location:dashboard/index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | My Pustaka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>
    <div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="index.html" class="logo"><img src="assets/images/logo-dark.png" height="20" alt="logo"></a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                            <p class="text-muted">Sign in to continue to Nazox.</p>
                                        </div>


                                        <div class="p-2 mt-5">
                                        <?php
                                        if (isset($_SESSION['error_global'])) {
                                        ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php echo $_SESSION['error_global'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                            <form action="assets/login_proses2.php" method="POST">

                                                <div class="form-group auth-form-group-custom mb-4">
                                                    <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                    <label for="username">Username</label>
                                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                                                    
                                                    <?php
                                                    if (isset($_SESSION['error_user'])) {
                                                    ?>
                                                        <div class="text-danger">
                                                            <?php echo $_SESSION['error_user'] ?>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                


                                                <div class="form-group auth-form-group-custom mb-4">
                                                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                    <label for="userpassword">Password</label>
                                                    <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                    <?php
                                                    if (isset($_SESSION['error_pass'])) {
                                                    ?>
                                                        <div class="text-danger">
                                                            <?php echo $_SESSION['error_pass'] ?>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <button name="btn-submit" class="btn btn-primary w-md waves-effect waves-light btn-block" type="submit">Log In</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay">
                            <img src="assets/bg-login.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>

<?php

session_destroy();
?>