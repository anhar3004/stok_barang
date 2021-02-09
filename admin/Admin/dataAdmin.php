<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-desktop"></i> Data Master</h3>
        <div class="row ">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4 class="text-center"> <i class="fa fa-user"></i> Data Admin</h4>
                        <hr>
                        <thead>
                            <?php
                            include  "../connect.php";
                            $query = mysqli_query($connect,"SELECT * FROM tb_login");
                        ?>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Id Admin</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Username</th>

                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nama Admin</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Status Admin</th>
                                <th><i class="fa fa-bullhorn"></i> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="hidden-phone"><?php echo $data['id_login']?></td>
                                <td class="hidden-phone"><?php echo $data['username']?></td>

                                <td class="hidden-phone"><?php echo $data['nama_admin']?></td>
                                <td class="hidden-phone"><?php echo $data['status_admin']?></td>
                                <td>
                                    <a href="beranda.php?hal=ubahAdmin&id_login=<?php echo $data['id_login']?>"
                                        class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="beranda.php?hal=hapusAdmin&id_login=<?php echo $data['id_login']?>"
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

                    <div class="">
                        <a class="btn btn-primary" href="?hal=tambahAdmin">Tambah Admin</a>
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
          &copy; Copyrights<br> <strong>Anhar Hadhitya 18111184 <br>Dendi Renaldi 18111190<br> Sandi Alif Ramadhan 18111228<br> Kharisma Firsty 18111078 </strong>
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