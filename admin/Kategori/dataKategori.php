<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <div class="row ">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4 class="text-center"> <i class="fa fa-tags"></i> Data Kategori</h4>
                        <hr>
                        <thead>
                            <?php
                            include  "../connect.php";
                            $query = mysqli_query($connect,"SELECT * FROM tb_kategori");
                        ?>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Kode Kategori</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nama Kategori</th>
                                <th><i class="fa fa-bullhorn"></i> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="hidden-phone"><?php echo $data['kode_kategori']?></td>
                                <td class="hidden-phone"><?php echo $data['nama_kategori']?></td>
                                <td>
                                    <a href="beranda.php?hal=ubahKategori&kode_kategori=<?php echo $data['kode_kategori']?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href= "beranda.php?hal=hapusKategori&kode_kategori=<?php echo $data['kode_kategori']?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin akan di hapus??')"><i class="fa fa-trash-o "></i></a>
                                </td>
                            </tr>
                            <?php
                            };
                    ?>
                        </tbody>
                    </table>

                    <div class="">
                        <a class="btn btn-primary" href="?hal=tambahKategori">Tambah Kategori</a>
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