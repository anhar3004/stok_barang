<?php
include "../connect.php";
$query = "SELECT max(kode_kategori) as maxCode FROM tb_kategori";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$kodeKategori = $data['maxCode'];
$noUrut = (int) substr ($kodeKategori,3,3);
$noUrut ++;
$char = "ID";
$kodeKategori = $char . sprintf("%03s", $noUrut);
echo $kodeKategori;

    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "../connect.php";
        $kode_kategori = $_POST['kode_kategori'];
        $nama_kategori = $_POST['nama_kategori'];
        
        $simpan = mysqli_query($connect,"INSERT INTO tb_kategori VALUES('$kode_kategori', '$nama_kategori')");

        echo
        " <script>
        alert('Data Kategori Berhasil Di Tambahkan !!')
        </script> ";
        
        echo "
        <meta http-equiv='refresh' content ='0; url=?hal=dataKategori'>
        ";
    };
?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i>Data Master</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb text-center"><i class="fa fa-tags"></i> Tambah Kategori</h4>
                    <form class="form-horizontal style-form " method="post">
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Kode</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="kode_kategori"
                                    value="<?php echo $kodeKategori ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 col-sm-2 control-label"> Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_kategori">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <button class="btn btn-primary" name="">Simpan</button>
                                <a href="?hal=dataKategori" class="btn btn-warning">Kembali</a>
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