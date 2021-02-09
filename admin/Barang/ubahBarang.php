<?php
    include "../connect.php";

    $kode_barang = $_GET['kode_barang'];

    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "../connect.php";
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $kode_kategori = $_POST['kode_kategori'];
        $stok_barang = $_POST['stok_barang'];
        $lokasi_barang = $_POST['lokasi_barang'];

        $simpan = mysqli_query($connect,"UPDATE tb_barang SET nama_barang = '$nama_barang', kode_kategori='$kode_kategori',  stok_barang = '$stok_barang', lokasi_barang = '$lokasi_barang'  WHERE kode_barang = '$kode_barang'");

        echo
        " <script>
        alert('Data Barang Berhasil Di Ubah !!')
        </script> ";
        
        echo "
        <meta http-equiv='refresh' content ='0; url=?hal=dataBarang'>
        ";
    };
?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <?php
             
              $query = mysqli_query($connect,"SELECT * FROM tb_barang WHERE kode_barang = '$kode_barang'");
              
              while($data = mysqli_fetch_array($query)){   
              ?>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb text-center"><i class="fa fa-pencil"></i> Ubah Barang</h4>
                    <form class="form-horizontal style-form " method="post">
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Kode Barang</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="kode_barang"
                                    value="<?php echo $data['kode_barang'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Nama Barang</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_barang"
                                    value="<?php echo $data['nama_barang'] ?>">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Kategori</label>
                            <div class="col-sm-4">
                                <?php
                               include "../connect.php";
                               echo "<select class='form-control' name='kode_kategori'>";
                               $tampil = mysqli_query($connect,"SELECT * FROM tb_kategori");
                                while ($result = mysqli_fetch_array($tampil)) {
                                    if($data['kode_kategori']==$result['kode_kategori']){
                                        echo " <option value = $result[kode_kategori] selected>$result[nama_kategori] </option>";
                                    }else{
                                        echo " <option value = $result[kode_kategori]> $result[nama_kategori] </option>";
                                    }
                                }
                                echo "</select>";
                               ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Stok Barang</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="stok_barang"
                                    value="<?php echo $data['stok_barang'] ?>">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Lokasi Barang</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lokasi_barang"
                                    value="<?php echo $data['lokasi_barang'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <button class="btn btn-primary" name="">Simpan</button>
                                <a href="?hal=dataBarang" class="btn btn-warning">Kembali</a>
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