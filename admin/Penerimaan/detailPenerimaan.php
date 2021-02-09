<?php
    include "../connect.php";

    $kode_terima= $_GET['kode_terima'];

    $dataAtas=mysqli_query($connect,"SELECT * FROM tb_penerimaan LEFT JOIN tb_departement ON tb_penerimaan.kode_departement = tb_departement.kode_departement WHERE kode_terima = '$kode_terima'");
    $hasil= mysqli_fetch_array($dataAtas);
?>


<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12 mt">
            <div class="row content-panel">
                <div class="col-lg-12 col-lg-offset-1">
                    <div class="pull-left">
                        <h2>Detail Penerimaan Barang</h2>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-10">
                            <div>
                                <div class="pull-left">No Terima</div>
                                <div class="pull-right"><?php echo $hasil['kode_terima']?></div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <div class="pull-left">Tanggal Terima</div>
                                <div class="pull-right"><?php echo $hasil['tanggal_terima']?></div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <div class="pull-left">Departement</div>
                                <div class="pull-right"><?php echo $hasil['nama_departement']?></div>
                                <div class="clearfix"></div>
                            </div>
                            <table class="table">
                                <thead>
                                    <?php
                            include  "../connect.php";
                            $query = mysqli_query($connect,"SELECT * FROM tb_penerimaan  left join tb_detail_penerimaan on tb_penerimaan.kode_terima = tb_detail_penerimaan.kode_terima left join tb_barang on tb_detail_penerimaan.kode_barang = tb_barang.kode_barang WHERE tb_penerimaan.kode_terima = '$kode_terima'");
                        ?>
                                    <tr>
                                        <th style="width:100px">Kode Barang </th>
                                        <th class="text-left">Nama Barang</th>
                                        <th style="width:30px">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            while($data = mysqli_fetch_array($query)){
                            ?>
                                    <tr>
                                        <td><?php echo $data['kode_barang']?></td>
                                        <td><?php echo $data['nama_barang']?></td>
                                        <td><?php echo $data['jumlah_barang']?></td>
                                    </tr>
                                    <?php
                            };
                        ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <a class="btn btn-primary" href="?hal=dataPenerimaan">Kembali</a>
                            </div>
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