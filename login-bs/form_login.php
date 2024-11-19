<?php
session_start();
if (isset($_SESSION['login'])) {
    header('location:beranda.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login BS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-secondary">


    <div class="container text-center">

        <div class="row align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-5">

                <form action="proses/proses_login.php" method="POST">

                    <div class="bg-white p-5 text-start rounded-5">

                        <div class="text-center">
                            <img width="100" src="assets/login.png" alt="" class="img-fluid">
                        </div>
                        <hr class="mb-0">
                        <h4 class="p-0">
                            <center>Form Login</center>
                        </h4>
                        <hr class="mt-0">

                        <?php
                        if (isset($_SESSION['error_global'])) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error_global'] ?>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input name="username" type="text" class="form-control <?= (isset($_SESSION['error_user']) ? 'is-invalid' : null) ?>" id="exampleFormControlInput1" placeholder="Input username anda">
                            <?php
                            if (isset($_SESSION['error_user'])) {
                            ?>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?php echo $_SESSION['error_user'] ?>
                                </div>
                            <?php
                            }
                            ?>


                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control <?= (isset($_SESSION['error_pass']) ? 'is-invalid' : null) ?>" id="exampleFormControlInput1" placeholder="Input username anda">
                            <?php
                            if (isset($_SESSION['error_pass'])) {
                            ?>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?php echo $_SESSION['error_pass'] ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <hr>
                        <div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-lg" type="submit" name="btn-submit">Login</button>
                            </div>
                        </div>

                        <div class="mt-5">
                            <a href="form_register.php">Register >></a>
                        </div>


                    </div>

                </form>


            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

<?php

session_destroy();
?>