<section id="main-content">
    <section class="wrapper">
        <h3> <i class="fa fa-cogs"></i> Transaksi</h3>
        <div class="row ">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4 class="text-center"><i class="fa fa-backward"></i> Data Penerimaan Barang</h4>
                        <hr>
                        <thead>
                            <?php
                            include  "../connect.php";
                            $query = mysqli_query($connect,"SELECT * FROM tb_penerimaan  left join tb_departement on tb_penerimaan.kode_departement = tb_departement.kode_departement left join tb_login on tb_penerimaan.id_login = tb_login.id_login");
                        ?>
                            <tr>

                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Kode Terima</th>
                                <th class="hidden-phone"><i class="fa fa-calendar"></i> Tanggal</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jumlah Item</th>
                                <th class="hidden-phone"><i class="fa fa-building"></i> Nama Departement </th>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Nama Admin</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Keterangan</th>
                                <th><i class="fa fa-bullhorn"></i> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="hidden-phone"><?php echo $data['kode_terima']?></td>
                                <td class="hidden-phone"><?php echo $data['tanggal_terima']?></td>
                                <td class="hidden-phone"><?php echo $data['jumlah_item']?></td>
                                <td class="hidden-phone"><?php echo $data['nama_departement']?></td>
                                <td class="hidden-phone"><?php echo $data['nama_admin']?></td>
                                <td class="hidden-phone"><?php echo $data['keterangan']?></td>
                                <td>
                                    <a href="beranda.php?hal=detailPenerimaan&kode_terima=<?php echo $data['kode_terima']?>" class="btn btn-primary btn-xs"><i class="fa fa-code-fork" data-toggle="tooltip" title="Detail"></i></a>
                                    <a href= "beranda.php?hal=hapusPenerimaan&kode_terima=<?php echo $data['kode_terima']?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin akan di hapus??')"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></a>
                                    <a href="../printDetailPenerimaanBarang.php?kode_terima=<?php echo $data['kode_terima']?>" target="_blank" class="btn btn-warning btn-xs"><i class="fa fa-print" data-toggle="tooltip" title="Cetak"></i></a>
                                </td>
                            </tr>
                            <?php
                            };
                    ?>
                        </tbody>
                    </table>

                    <div class="">
                        <a class="btn btn-primary" href="?hal=tambahPenerimaan">Tambah Data</a>
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