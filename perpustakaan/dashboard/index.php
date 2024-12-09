<?php 
if(!isset($_REQUEST['page'])){
    header('location:index.php?page=dashboard');
    exit();
}
?>
<!doctype html>
<html lang="en">
    <head>
        <?php include('components/style.php') ?>
    </head>
    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php include('components/header.php') ?>
            <?php include('components/vertical-menu.php') ?>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <?php 
                            
                            include('pages/'.$_REQUEST['page'].'.php') 
                        ?>
                    </div>
                </div>
                <?php include('components/footer.php') ?>
            </div>
            <!-- end main content-->
        </div>
        <div class="rightbar-overlay"></div>
        <?php include('components/script.php') ?>
    </body>
</html>
