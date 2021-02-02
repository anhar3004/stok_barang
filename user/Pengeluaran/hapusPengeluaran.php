<?php
    include "../connect.php";
    $kode_keluar = $_GET['kode_keluar'];
    $hapusTabelPenerimaaan = mysqli_query($connect,"DELETE FROM tb_pengeluaran WHERE kode_keluar='$kode_keluar'") or die (mysql_error());
    if($hapusTabelPenerimaaan){
        $hapusTabelDetailPenerimaan = mysqli_query($connect,"DELETE FROM tb_detail_pengeluaran WHERE kode_keluar='$kode_keluar'");

    }

    echo "
    <meta http-equiv='refresh' content ='0; url=?hal=dataPengeluaran'>
    ";
?>