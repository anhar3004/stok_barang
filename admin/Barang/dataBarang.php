<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <div class="row ">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4 class="text-center"><i class="fa fa-bars"></i> Data Barang</h4>
                        <hr>
                        <thead>
                            <?php
                            include  "../connect.php";
                            $query = mysqli_query($connect,"SELECT * FROM tb_barang  left join tb_kategori on tb_barang.kode_kategori = tb_kategori.kode_kategori");
                        ?>
                            <tr>
                                <th><i class="fa fa-bars"></i> Kode Barang</th>
                                <th class="hidden-phone"><i class="fa fa-bars"></i> Nama Barang</th>
                                <th class="hidden-phone"><i class="fa fa-bars"></i> Kategori</th>
                                <th class="hidden-phone"><i class="fa fa-bars"></i> Stok Awal</th>
                                <th class="hidden-phone"><i class="fa fa-bars"></i> Stok Akhir</th>
                                <th class="hidden-phone"><i class="fa fa-bars"></i> Lokasi Barang</th>
                                <th><i class="fa fa-bullhorn"></i> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            //data barang masuk
                            while($data = mysqli_fetch_array($query)){

                            error_reporting(0);
                            $jumlahBarangTerima = "SELECT sum(jumlah_barang) as jumlah_barang from tb_detail_penerimaan where kode_barang = '$data[kode_barang]'";  
                            $hasilBarangMasuk = mysqli_query($connect,$jumlahBarangTerima) or die (mysqli_error());
                            $barangTerima = mysqli_fetch_array($hasilBarangMasuk);

                            //data barang keluar
                            $jumlahBarangKeluar = "SELECT sum(jumlah_barang) as jumlah_barang from tb_detail_pengeluaran where kode_barang = '$data[kode_barang]'";  
                            $hasilBarangKeluar = mysqli_query($connect,$jumlahBarangKeluar) or die (mysqli_error());
                            $barangKeluar = mysqli_fetch_array($hasilBarangKeluar);

                            ?>
                            <tr>
                                <td class="hidden-phone"><?php echo $data['kode_barang']?></td>
                                <td class="hidden-phone"><?php echo $data['nama_barang']?></td>
                                <td class="hidden-phone"><?php echo $data['nama_kategori']?></td>
                                <td class="hidden-phone"><?php echo $data['stok_barang']?></td>
                                <td class="hidden-phone"><?php echo $data['stok_barang'] + $barangTerima['jumlah_barang'] - $barangKeluar['jumlah_barang']?></td>
                                <td class="hidden-phone"><?php echo $data['lokasi_barang']?></td>
                                <td>
                                    <a href="beranda.php?hal=ubahBarang&kode_barang=<?php echo $data['kode_barang']?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href= "beranda.php?hal=hapusBarang&kode_barang=<?php echo $data['kode_barang']?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin akan di hapus??')"><i class="fa fa-trash-o "></i></a>
                                </td>
                            </tr>
                            <?php
                            };
                    ?>
                        </tbody>
                    </table>

                    <div class="">
                        <a class="btn btn-primary" href="?hal=tambahBarang">Tambah Barang</a>
                        <a class="btn btn-danger" href="../printDataBarang.php" target="_blank">Print</a>
                    </div>
                </div>


                <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
        </div>

    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights<br> <strong>Anhar Hadhitya 18111184 <br>Dendi Renaldi <br> Sandi Alif Ramadhan </strong>
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