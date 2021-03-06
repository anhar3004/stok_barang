<?php

require_once __DIR__ . '/vendor/autoload.php';
include "connect.php";

$tanggal_awal= $_POST['tanggal_awal'];
$tanggal_akhir= $_POST['tanggal_akhir'];

$query = mysqli_query($connect,"SELECT * FROM tb_penerimaan  left join tb_login on tb_penerimaan.id_login = tb_login.id_login left join tb_detail_penerimaan on tb_penerimaan.kode_terima = tb_detail_penerimaan.kode_terima left join tb_barang on tb_detail_penerimaan.kode_barang = tb_barang.kode_barang left join tb_departement on tb_penerimaan.kode_departement = tb_departement.kode_departement where (tb_penerimaan.tanggal_terima between '$tanggal_awal' and '$tanggal_akhir')");
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

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

        h2 {
            text-align:center;    
        }
        table{
            margin-left:auto;
            margin-right:auto;
        }
    </style>
</head>
<body>
<div class="pull-left">
<h2>Laporan Penerimaan Barang</h2>
</div>
<div class="clearfix"></div>
    <div class="row">
    <table width="1000px" class="table table-hover" border="1" cellpading="10" cellspacing="0" >
        <thead> 
            <tr>
            <th class="hidden-phone">Tanggal</th>
            <th class="hidden-phone">Kode Transaksi</th>
            <th class="hidden-phone">Nama Barang</th>
            <th class="hidden-phone">Jumlah Barang </th>
            <th width="200px" class="hidden-phone">Nama Departement</th>
            <th width="150px" class="hidden-phone">Nama Admin</th>
            <th width="200px" class="hidden-phone"> Keterangan</th>
            </tr>
        </thead>';
        while($data = mysqli_fetch_array($query)){
            $html .=  '<tr>
                            <td>'.$data['tanggal_terima'].'</td>
                            <td>'.$data['kode_terima'].'</td>
                            <td>'.$data['nama_barang'].'</td>
                            <td>'.$data['jumlah_barang'].'</td>
                            <td>'.$data['nama_departement'].'</td>
                            <td>'.$data['nama_admin'].'</td>
                            <td>'.$data['keterangan'].'</td>
                        </tr>';
        }
$html .='</table>
<script src="../contoh/lib/jquery/jquery.min.js"></script>

<script src="../contoh/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>';

$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output('DetailPenerimaanBarang.pdf',\Mpdf\Output\Destination::INLINE);