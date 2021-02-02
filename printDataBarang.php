<?php

require_once __DIR__ . '/vendor/autoload.php';
include "connect.php";
$query = mysqli_query($connect,"SELECT * FROM tb_barang  left join tb_kategori on tb_barang.kode_kategori = tb_kategori.kode_kategori");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            background-color:grey;
        }

        tr:nth-child(even){
            background-color:#ddd;
        }
    </style>
</head>
<body>
    <h1  style="text-align:center">Data Barang</h1> 
    <table class="table table-hover" border="1" cellpading="10" cellspacing="0" >
        <thead> 
            <tr>
                <th>Kode Barang</th>
                <th >Nama Barang</th>
                <th >Kategori</th>
                <th >Stok Awal</th>
                <th >Stok Akhir</th>
                <th >Lokasi Barang</th>
            </tr>
        </thead>';
        while($data = mysqli_fetch_array($query)){

            error_reporting(0);
            $jumlahBarangTerima = "SELECT sum(jumlah_barang) as jumlah_barang from tb_detail_penerimaan where kode_barang = '$data[kode_barang]'";  
            $hasilBarangMasuk = mysqli_query($connect,$jumlahBarangTerima) or die (mysqli_error());
            $barangTerima = mysqli_fetch_array($hasilBarangMasuk);

            //data barang keluar
            $jumlahBarangKeluar = "SELECT sum(jumlah_barang) as jumlah_barang from tb_detail_pengeluaran where kode_barang = '$data[kode_barang]'";  
            $hasilBarangKeluar = mysqli_query($connect,$jumlahBarangKeluar) or die (mysqli_error());
            $barangKeluar = mysqli_fetch_array($hasilBarangKeluar);

            $stokAkhir = $data['stok_barang'] + $barangTerima['jumlah_barang'] - $barangKeluar['jumlah_barang'];

            $html .= '<tr>
                        <td>'.$data['kode_barang'].'</td>
                        <td>'.$data['nama_barang'].'</td>
                        <td>'.$data['nama_kategori'].'</td>
                        <td>'.$data['stok_barang'].'</td>
                        <td>'.$stokAkhir.'</td>
                        <td>'.$data['lokasi_barang'].'</td>
                    </tr>';
        }
$html .='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('DataBarang.pdf',\Mpdf\Output\Destination::INLINE);