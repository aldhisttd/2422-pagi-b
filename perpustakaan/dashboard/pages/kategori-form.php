<div class="row">
    <div class="col-12">

        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Form Kategori</h4>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        
                        
                        <form action="process/kategori-form-process.php" method="POST">

                            <div class="col-6">

                                <?php 
                                    if(isset($_SESSION['msg']['error_global'])){
                                        echo '
                                            <div class="alert alert-danger" role="alert">
                                                '.$_SESSION['msg']['error_global'].'
                                            </div>
                                        ';
                                    }
                                ?>

                                <?php 
                                    if(isset($_SESSION['msg']['success_global'])){
                                        echo '
                                            <div class="alert alert-success" role="alert">
                                                '.$_SESSION['msg']['success_global'].'
                                            </div>
                                        ';
                                    }
                                ?>

                                

                                <div class="form-group">
                                    <label for="">Kode Kategori</label>
                                    <input name="kode" type="text" class="form-control">
                                    <?php 
                                        if(isset($_SESSION['msg']['error_kode'])){
                                            echo '<span class="text-danger">'.$_SESSION['msg']['error_kode'].'</span>';
                                        }
                                    ?>

                                </div>
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <input name="nama" type="text" class="form-control">
                                    <?php 
                                        if(isset($_SESSION['msg']['error_nama'])){
                                            echo '<span class="text-danger">'.$_SESSION['msg']['error_nama'].'</span>';
                                        }
                                    ?>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="btn-submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </div>

                        </form>  

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php 
unset($_SESSION['msg']);
?>