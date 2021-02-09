<?php
    include "../connect.php";
    $today = date("ymd");
    $query = "SELECT max(kode_terima) as maxCode FROM tb_penerimaan";
    $hasil = mysqli_query($connect,$query);
    $data = mysqli_fetch_array($hasil);
    $kode_baru = $data['maxCode'];
    $noUrut = (int) substr ($kode_baru,8,4);
    $noUrut ++;
    $char = "T";
    $kode_baru = $char. $today . sprintf("%04s", $noUrut);
    echo $kode_baru;
  

    //input ke table sementara
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['tambah'])){
        include "../connect.php";
        $kode_terima = $_POST['kode_terima'];
        $kode_barang = $_POST['kode_barang'];
        $jumlah = $_POST['jumlah'];
        
        // cek apakah ada kode barang  yang sama di dalam tabel sementara
        $cekData = "SELECT kode_barang from tb_sementara WHERE kode_barang = '$kode_barang'";
        $ada = mysqli_query($connect,$cekData) or die (mysqli_error());

        if(mysqli_num_rows($ada)>0){
            //jika ada 1 kode barang yang duplikat di tabel sementara maka jumlah kode barang tersebut akan di tambah melalui proses UPDATE
            $ubah = mysqli_query($connect,"UPDATE tb_sementara SET jumlah = jumlah + '$jumlah' WHERE kode_barang = '$kode_barang' ");
        }else{
            //apabila kode barang tidak sama maka akan langsung menambahkan data (INSERT) 
            $simpan = mysqli_query($connect," INSERT INTO tb_sementara VALUES ('','$kode_terima','$kode_barang','$jumlah')");
        if(simpan){
            echo " <meta http-equiv='refresh' content='0 url=?hal=tambahPenerimaan'>";
            };
        }; 
    };

    //input ke table penerimaan
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['simpan'])){
        include "../connect.php";
        $kode_terima = $_POST['kode_terima'];
        $tanggal_terima = $_POST['tanggal_terima'];
        $jumlah_item = $_POST['jumlah_item'];
        $kode_departement = $_POST['kode_departement'];
        $id_login = $_SESSION['id_login'];
        $keterangan = $_POST['keterangan'];

        $simpan = mysqli_query($connect,"INSERT INTO tb_penerimaan VALUES ('$kode_terima','$today','$jumlah_item','$kode_departement','$id_login','$keterangan')");
        if(simpan){
            //memindahkan data yang ada di tabel_sementara ke tabel detail_penerimaan
            $simpanTMP = mysqli_query($connect,"INSERT INTO tb_detail_penerimaan (kode_terima,kode_barang,jumlah_barang) SELECT kode,kode_barang,jumlah from tb_sementara");

            //hapus semua data yang ada di tabel sementara 
            $hapusTMP = mysqli_query($connect,"DELETE FROM tb_sementara ") or die (mysqli_error());

            echo "<script>
            windows.alert('Data Penerimaan Barang Berhasil Di simpan');
            </script>";

            echo " <meta http-equiv='refresh' content='0 url=?hal=dataPenerimaan'>";
        };
    };
    
?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-cogs"></i> Transaksi</h3>

        <div class="form-panel">
            <h4 class="mb text-center"><i class="fa fa-backward"></i> Tambah Penerimaan Barang</h4>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-md-6">
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <label> No Terima</label>
                                    <input type="text" class="form-control" name="kode_terima"
                                        value="<?php echo $kode_baru ?>" readonly>
                                </div>
                                <div class="form-group ">
                                    <label> Nama Barang</label>
                                    <div>
                                        <?php
                               include "../connect.php";
                               echo "<select class='form-control' name='kode_barang' id= 'kode_barang' onchange='changeValue(this.value)'>";
                               $tampil = mysqli_query($connect,"SELECT * FROM tb_barang");
                                while ($result = mysqli_fetch_array($tampil)) {
                                    echo " <option value = $result[kode_barang]> $result[nama_barang] </option>";
                                }
                                echo "</select>";
                               ?>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label> Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah">
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <button class="btn btn-primary" name="tambah">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <?php
                            include  "../connect.php";
                            $query = mysqli_query($connect,"SELECT * FROM tb_sementara  left join tb_barang on tb_sementara.kode_barang = tb_barang.kode_barang");
                        ?>
                                    <tr>
                                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Kode Barang</th>
                                        <th class="hidden-phone"><i class="fa fa-calendar"></i> Nama Barang</th>
                                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jumlah</th>
                                        <th><i class="fa fa-bullhorn"></i> Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                            while($data = mysqli_fetch_array($query)){
                            ?>
                                    <tr>
                                        <td class="hidden-phone"><?php echo $data['kode_barang']?></td>
                                        <td class="hidden-phone"><?php echo $data['nama_barang']?></td>
                                        <td class="hidden-phone"><?php echo $data['jumlah']?></td>
                                        <td>

                                            <a href="beranda.php?hal=hapusSementara&id=<?php echo $data['id']?>"
                                                class="btn btn-danger btn-xs"
                                                onclick="return confirm ('Yakin akan di hapus??')"><i
                                                    class="fa fa-trash-o "></i></a>
                                        </td>
                                    </tr>
                                    <?php
                            };
                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-panel">
            <h4 class="mb text-center"><i class="fa fa-save"></i> Simpan Penerimaan Barang</h4>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-md-6">
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <label> No Terima</label>
                                    <input type="text" class="form-control" name="kode_terima"
                                        value="<?php echo $kode_baru ?>" readonly>
                                </div>
                                <div class="form-group ">
                                    <label> Departement</label>
                                    <div>
                                        <?php
                               include "../connect.php";
                               echo "<select class='form-control' name='kode_departement' id= 'kode_departement' onchange='changeValue(this.value)'>";
                               $tampil = mysqli_query($connect,"SELECT * FROM tb_departement");
                                while ($result = mysqli_fetch_array($tampil)) {
                                    echo " <option value = $result[kode_departement]> $result[nama_departement] </option>";
                                }
                                echo "</select>";
                               ?>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label> Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan">
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <button class="btn btn-primary" name="simpan">Simpan</button>
                                        <a href="?hal=dataPenerimaan" class="btn btn-warning">Kembali</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label> Penerima</label>
                                <input type="text" class="form-control" name="id_login" id="id_login"
                                    value="<?php echo $_SESSION['nama_admin']?>" readonly>
                            </div>
                            <div class="form-group ">
                                <label> Jumlah Item Barang</label>
                                <?php 
                                    include '../connect.php';
                                    $item = mysqli_query($connect,"SELECT kode_barang from tb_sementara");
                                    $jumlahItem = mysqli_num_rows($item);
                                    ?>
                                <input type="text" class="form-control" name="jumlah_item" id="jumlah_item"
                                    value="<?php echo $jumlahItem ?>" readonly>
                            </div>
                            <div class="form-group ">
                                <label> Tanggal Terima Barang</label>
                                <input type="text" class="form-control" name="tanggal_terima"
                                    value="<?php echo date("m/d/Y")?>" readonly>
                            </div>
                            </form>
                        </div>
                    </div>
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