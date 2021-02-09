<?php
    $kode_kategori = $_GET['kode_kategori'];


    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "../connect.php";
        $nama_kategori = $_POST['nama_kategori'];
        $simpan = mysqli_query($connect,"UPDATE tb_kategori SET nama_kategori = '$nama_kategori' WHERE kode_kategori = '$kode_kategori'");

        echo
        " <script>
        alert('Data Kategori Berhasil Di Ubah !!')
        </script> ";
        
        echo "
        <meta http-equiv='refresh' content ='0; url=?hal=dataKategori'>
        ";
    };
?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <?php
              include "../connect.php";
              $query = mysqli_query($connect,"SELECT * FROM tb_kategori WHERE kode_kategori = '$kode_kategori'");
              
              while($data = mysqli_fetch_array($query)){   
              ?>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb text-center"><i class="fa fa-tags"></i> Ubah Kategori</h4>
                    <form class="form-horizontal style-form " method="post">
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Nama Kategori</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_kategori"
                                    value="<?php echo $data['nama_kategori'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <button class="btn btn-primary" name="">Simpan</button>
                                <a href="?hal=dataKategori" class="btn btn-warning">Kembali</a>
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
                &copy; Copyrights<br> <strong>Anhar Hadhitya 18111184 <br>Dendi Renaldi 18111190<br> Sandi Alif Ramadhan
                    18111228<br> Kharisma Firsty 18111078 </strong>
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