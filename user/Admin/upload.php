<?php
 if(isset($_POST['submit'])){
    $image_upload = $_FILES['image_upload']['name'];
    $path = $_FILES['image_upload']['tmp_name'];
    

    move_uploaded_file ($path,'picture/'.$image_upload);
    echo
    " <script>
    alert('Data Admin Berhasil Di Tambahkan !!')
    </script> ";
    
    echo "
    <meta http-equiv='refresh' content ='0; url=?hal=dataAdmin'>
    ";
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Favicons -->
     <link href="../contoh/img/favicon.png" rel="icon">
    <link href="../contoh/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../../contoh/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../contoh/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../contoh/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../../contoh/lib/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../../contoh/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <!-- Custom styles for this template -->
    <link href="../../contoh/css/style.css" rel="stylesheet">
    <link href="../../contoh/css/style-responsive.css" rel="stylesheet">
    <script src="../../contoh/lib/chart-master/Chart.js"></script>

</head>

<body>
    <form class="form-horizontal style-form " method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2">Image Upload</label>
            <div class="col-md-9">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail"
                        style="max-width: 200px; max-height: 150px; line-height: 20px;">
                    </div>
                    <div>
                        <span class="btn btn-theme02 btn-file">
                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select
                                image</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" class="" name="image_upload">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                <!-- <button class="btn btn-primary" name="">Simpan</button> -->
                <a href="?hal=dataAdmin" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </form>
</body>

<script src="../contoh/lib/jquery/jquery.min.js"></script>

    <script src="../../contoh/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../contoh/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../contoh/lib/jquery.scrollTo.min.js"></script>
    <script src="../../contoh/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../../contoh/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="../../contoh/lib/common-scripts.js"></script>
    <script type="text/javascript" src="../../contoh/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../../contoh/lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="../../contoh/lib/sparkline-chart.js"></script>
    <script src="../../contoh/lib/zabuto_calendar.js"></script>
    <script type="text/javascript" src="../../contoh/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
</html>