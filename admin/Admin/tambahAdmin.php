<?php
    include "../connect.php";
    $query = "SELECT max(id_login) as maxCode FROM tb_login";
    $hasil = mysqli_query($connect,$query);
    $data = mysqli_fetch_array($hasil);
    $idLogin = $data['maxCode'];
    $noUrut = (int) substr ($idLogin,3,3);
    $noUrut ++;
    $char = "ADM";
    $idLogin = $char . sprintf("%03s", $noUrut);
    echo $idLogin;

?>

<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "../connect.php";
        
        $id_login = $_POST['id_login'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_md5=md5($password);
        $nama_admin = $_POST['nama_admin'];
        $status_admin = $_POST['status_admin'];
        $image_upload = $_FILES['image_upload']['name'];
        $path = $_FILES['image_upload']['tmp_name'];

        
        

        move_uploaded_file ($path,'./Admin/picture/'.$image_upload);
        

        $simpan = mysqli_query($connect,"INSERT INTO tb_login VALUES('$id_login','$username','$password_md5','$nama_admin','$status_admin','$image_upload')");

        echo
        " <script>
        alert('Data Admin Berhasil Di Tambahkan !!')
        </script> ";
        
        echo "
        <meta http-equiv='refresh' content ='0; url=?hal=dataAdmin'>
        ";
    };
?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb text-center"><i class="fa fa-user"></i> Tambah Admin</h4>
                    <form class="form-horizontal style-form " method="POST" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Id Admin</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="id_login" value="<?php echo $idLogin ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Username</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Password</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Nama Admin</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_admin" required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Status Admin</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="status_admin" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Image Upload</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                        style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
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
                                <!-- <input class="btn btn-primary" type="submit" value="Submit" name="submit"> -->
                                <button class="btn btn-primary" name="">Simpan</button>
                                <a href="?hal=dataAdmin" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Kelompok 2</strong>
            </p>
            <div class="credits">
                <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->

            </div>
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
</section>