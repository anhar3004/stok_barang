<?php

require_once __DIR__ . '/vendor/autoload.php';
include "connect.php";

$kode_terima= $_GET['kode_terima'];

$dataAtas=mysqli_query($connect,"SELECT * FROM tb_penerimaan LEFT JOIN tb_departement ON tb_penerimaan.kode_departement = tb_departement.kode_departement LEFT JOIN tb_login ON tb_penerimaan.id_login = tb_login.id_login WHERE kode_terima = '$kode_terima'");
$hasil= mysqli_fetch_array($dataAtas);

$query = mysqli_query($connect,"SELECT * FROM tb_penerimaan  left join tb_detail_penerimaan on tb_penerimaan.kode_terima = tb_detail_penerimaan.kode_terima left join tb_barang on tb_detail_penerimaan.kode_barang = tb_barang.kode_barang WHERE tb_penerimaan.kode_terima = '$kode_terima'");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="contoh/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="contoh/css/style.css" rel="stylesheet">
    <link href="contoh/css/style-responsive.css" rel="stylesheet">
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
<div class="pull-left">
<h2>Detail Penerimaan Barang</h2><hr>
</div>
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-10">
            <div>
                <div class="pull-left" >No Terima :'.$hasil['kode_terima'].'</div>
            
                <div class="clearfix"></div>
            </div>
            <div>
                <div class="pull-left">Tanggal Terima :'.$hasil['tanggal_terima'].'</div>
                <div class="clearfix"></div>
            </div>
            <div>
                <div class="pull-left">Departement:'.$hasil['nama_departement'].'</div>
                <div class="clearfix"></div>
            </div>
            <div>
            <div class="pull-left">Nama Admin:'.$hasil['nama_admin'].'</div>
            <div class="clearfix"></div>
        </div><br>
    <table class="table table-hover" border="1" cellpading="10" cellspacing="0" >
        <thead> 
            <tr>
            <th style="width:100px">Kode Barang </th>
            <th class="text-left">Nama Barang</th>
            <th style="width:30px">Total</th>
            </tr>
        </thead>';
        while($data = mysqli_fetch_array($query)){
            $html .=  '<tr>
                            <td>'.$data['kode_barang'].'</td>
                            <td>'.$data['nama_barang'].'</td>
                            <td>'.$data['jumlah_barang'].'</td>
                        </tr>';
        }
$html .='</table>
<script src="../contoh/lib/jquery/jquery.min.js"></script>

<script src="../contoh/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('DetailPenerimaanBarang.pdf',\Mpdf\Output\Destination::INLINE);