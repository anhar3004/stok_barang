<?php
    include "../connect.php";
   

    $kode_departement = $_GET['kode_departement'];

    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "../connect.php";
        $kode_departement = $_POST['kode_departement'];
        $nama_departement = $_POST['nama_departement'];
        $no_telephone = $_POST['no_telephone'];
        $nama_manager = $_POST['nama_manager'];
     

        $simpan = mysqli_query($connect,"UPDATE tb_departement SET nama_departement = '$nama_departement', no_telephone='$no_telephone', nama_manager='$nama_manager'  WHERE kode_departement = '$kode_departement'");

        echo
        " <script>
        alert('Data Departement Berhasil Di Ubah !!')
        </script> ";
        
        echo "
        <meta http-equiv='refresh' content ='0; url=?hal=dataDepartement'>
        ";
    };
?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <?php
             
             $query = mysqli_query($connect,"SELECT * FROM tb_departement WHERE kode_departement = '$kode_departement'");
             
             while($data = mysqli_fetch_array($query)){   
             ?>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb text-center"><i class="fa fa-building"></i> Ubah Departement</h4>
                    <form class="form-horizontal style-form " method="post">
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Kode Departement</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="kode_departement" value="<?php echo $data['kode_departement'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Nama Departement</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_departement" value="<?php echo $data['nama_departement'] ?>">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> No Telephone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_telephone" value="<?php echo $data['no_telephone'] ?>">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Nama Manager</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_manager" value="<?php echo $data['nama_manager'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <button class="btn btn-primary" name="">Simpan</button>
                                <a href="?hal=dataDepartement" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </form>
                    <?php
             }
             ?>
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