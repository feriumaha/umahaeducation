<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <?php include_once 'header.php' ?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       <?php include_once 'mobile-sidebar.php' ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include_once 'sidebar.php' ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
        
            <!-- MAIN CONTENT-->
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>POST Form</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                      
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Judul POST</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Tulis judul..." class="form-control">
                                                    <small class="form-text text-muted">Judul POS</small>
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Kategori</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Pilih Kategori</option>
                                                        <option value="1">PPDB</option>
                                                        <option value="2">Event</option>
                                                        <option value="3">Beasiswa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                                                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Kirim gambar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                              
                            </div>
                         
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 UDOIT. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
            </div>

    <!-- Jquery JS-->
    <?php include_once 'footer.php' ?>

</body>

</html>
<!-- end document-->
