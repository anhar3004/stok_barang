<?php
    include "../connect.php";
    $kode_terima = $_GET['kode_terima'];
    $hapusTabelPenerimaaan = mysqli_query($connect,"DELETE FROM tb_penerimaan WHERE kode_terima='$kode_terima'") or die (mysql_error());
    if($hapusTabelPenerimaaan){
        $hapusTabelDetailPenerimaan = mysqli_query($connect,"DELETE FROM tb_detail_penerimaan WHERE kode_terima='$kode_terima'");

    }

    echo "
    <meta http-equiv='refresh' content ='0; url=?hal=dataPenerimaan'>
    ";
?>