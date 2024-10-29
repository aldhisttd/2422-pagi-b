<?php
session_start();
if(isset($_SESSION['login'])){
    header('location:beranda.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_SESSION['error_global'])) {
    ?>
        <span style="color: red;font-style: italic;">
            <small><?php echo $_SESSION['error_global'] ?></small>
        </span>

    <?php
    }
    ?>

    <form action="proses/proses_login.php" method="POST">

        <div>
            <label>Username</label><br>
            <input style="border-color: <?= (isset($_SESSION['error_user']) ? 'red' : null) ?>;" type="text" name="username"><br>

            <?php
            if (isset($_SESSION['error_user'])) {
            ?>
                <span style="color: red;font-style: italic;">
                    <small><?php echo $_SESSION['error_user'] ?></small>
                </span>

            <?php
            }
            ?>


        </div>
        <div>
            <label>Password</label><br>
            <input style="border-color: <?= (isset($_SESSION['error_pass']) ? 'red' : null) ?>;" type="password" name="password"><br>
            <?php
            if (isset($_SESSION['error_pass'])) {
            ?>
                <span style="color: red;font-style: italic;">
                    <small><?php echo $_SESSION['error_pass'] ?></small>
                </span>

            <?php
            }
            ?>
        </div>
        <div style="margin-top: 20px;">
            <button type="submit" name="btn-submit">Login</button>
        </div>

    </form>

</body>

</html>

<?php

session_destroy();
?>