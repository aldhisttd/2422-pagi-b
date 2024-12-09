<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li class="<?= ($_REQUEST['page']=='dashboard')?"mm-active":null ?>">
                    <a href="index.php?page=dashboard" class="waves-effect <?= ($_REQUEST['page']=='dashboard')?"active":null ?>">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="
                        <?php 
                            if(
                                $_REQUEST['page']=='kategori-data' || 
                                $_REQUEST['page']=='kategori-form'
                            ){
                                echo "mm-active";
                            }
                        ?>
                    ">
                    <a href="javascript: void(0);" class="has-arrow waves-effect 
                        <?php 
                            if(
                                $_REQUEST['page']=='kategori-data' || 
                                $_REQUEST['page']=='kategori-form'
                            ){
                                echo "mm-active";
                            }
                        ?>
                    ">
                        <i class="ri-archive-line"></i>
                        <span>Kategori</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="<?= ($_REQUEST['page']=='kategori-data')?"mm-active":null ?>">
                            <a href="index.php?page=kategori-data" class="<?= ($_REQUEST['page']=='kategori-data')?"active":null ?>">Data Kategori</a>
                        </li>
                        <li class="<?= ($_REQUEST['page']=='kategori-form')?"mm-active":null ?>">
                            <a href="index.php?page=kategori-form" class="<?= ($_REQUEST['page']=='kategori-form')?"active":null ?>">Form Kategori</a>
                        </li>
                    </ul>
                </li>

                <li class="
                        <?php 
                            if(
                                $_REQUEST['page']=='penerbit-data' || 
                                $_REQUEST['page']=='penerbit-form'
                            ){
                                echo "mm-active";
                            }
                        ?>
                    ">
                    <a href="javascript: void(0);" class="has-arrow waves-effect 
                        <?php 
                            if(
                                $_REQUEST['page']=='penerbit-data' || 
                                $_REQUEST['page']=='penerbit-form'
                            ){
                                echo "mm-active";
                            }
                        ?>
                    ">
                        <i class="ri-hotel-line"></i>
                        <span>Penerbit</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="<?= ($_REQUEST['page']=='penerbit-data')?"mm-active":null ?>">
                            <a href="index.php?page=penerbit-data" class="<?= ($_REQUEST['page']=='penerbit-data')?"active":null ?>">Data Penerbit</a>
                        </li>
                        <li class="<?= ($_REQUEST['page']=='penerbit-form')?"mm-active":null ?>">
                            <a href="index.php?page=penerbit-form" class="<?= ($_REQUEST['page']=='penerbit-form')?"active":null ?>">Form Penerbit</a>
                        </li>
                    </ul>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>