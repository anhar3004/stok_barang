<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <div class="row ">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4 class="text-center"><i class="fa fa-building"></i> Data Departement</h4>
                        <hr>
                        <thead>
                            <?php
                            include  "../connect.php";
                            $query = mysqli_query($connect,"SELECT * FROM tb_departement");
                        ?>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Kode Departement</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Departement</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> No Telephone </th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Kepala Gudang</th>
                                <th><i class="fa fa-bullhorn"></i> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="hidden-phone"><?php echo $data['kode_departement']?></td>
                                <td class="hidden-phone"><?php echo $data['nama_departement']?></td>
                                <td class="hidden-phone"><?php echo $data['no_telephone']?></td>
                                <td class="hidden-phone"><?php echo $data['nama_manager']?></td>
                                <td>
                                    <a href="beranda.php?hal=ubahDepartement&kode_departement=<?php echo $data['kode_departement']?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href= "beranda.php?hal=hapusDepartement&kode_departement=<?php echo $data['kode_departement']?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin akan di hapus??')"><i class="fa fa-trash-o "></i></a>
                                </td>
                            </tr>
                            <?php
                            };
                    ?>
                        </tbody>
                    </table>

                    <div class="">
                        <a class="btn btn-primary" href="?hal=tambahDepartement">Tambah Departement</a>
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