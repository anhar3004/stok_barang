<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-book"></i> Laporan</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb text-center"><i class="fa fa-tags"></i> Pengeluaran Barang</h4>
                    <form class="form-horizontal style-form " method="POST" target="_blank"
                        action="../printLaporanPengeluaranBarang.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Rentang Tanggal</label>
                            <div class="col-md-4">
                                <div class="input-group input-large">
                                    <input type="date" class="form-control " name="tanggal_awal">
                                    <span class="input-group-addon">To</span>
                                    <input type="date" class="form-control " name="tanggal_akhir">
                                </div>
                                <span class="help-block">Pilih rentang tanggal</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <!-- <input class="btn btn-primary" type="submit" value="Submit" name="submit"> -->
                                <button target="_blank" class="btn btn-danger" name=""><i class="fa fa-print"></i>
                                    Cetak</button>
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