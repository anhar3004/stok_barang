<?php
    if($_GET['hal']=='beranda')
        {include "beranda.php";}
    // else if($_GET['hal']=='printPenerimaanBarang')
    //     {include "../printPenerimaanBarang.php";}
    else if($_GET['hal']=='home')
        {include "home.php";}
    else if($_GET['hal']=='dataKategori')
        {include "Kategori/dataKategori.php";}
    else if($_GET['hal']=='tambahKategori')
        {include "Kategori/tambahKategori.php";}
    else if($_GET['hal']=='ubahKategori')
        {include "Kategori/ubahKategori.php";}
    else if($_GET['hal']=='hapusKategori')
        {include "Kategori/hapusKategori.php";}
    else if($_GET['hal']=='dataBarang')
        {include "Barang/dataBarang.php";}
    else if($_GET['hal']=='tambahBarang')
        {include "Barang/tambahBarang.php";}
    else if($_GET['hal']=='ubahBarang')
        {include "Barang/ubahBarang.php";}
    else if($_GET['hal']=='hapusBarang')
        {include "Barang/hapusBarang.php";}
    else if($_GET['hal']=='dataAdmin')
        {include "Admin/dataAdmin.php";}
    else if($_GET['hal']=='tambahAdmin')
        {include "Admin/tambahAdmin.php";}
    else if($_GET['hal']=='ubahAdmin')
        {include "Admin/ubahAdmin.php";}
    else if($_GET['hal']=='hapusAdmin')
        {include "Admin/hapusAdmin.php";}
    else if($_GET['hal']=='dataDepartement')
        {include "Departement/dataDepartement.php";}
    else if($_GET['hal']=='tambahDepartement')
        {include "Departement/tambahDepartement.php";}
    else if($_GET['hal']=='ubahDepartement')
        {include "Departement/ubahDepartement.php";}
    else if($_GET['hal']=='hapusDepartement')
        {include "Departement/hapusDepartement.php";}
    else if($_GET['hal']=='dataPenerimaan')
        {include "Penerimaan/dataPenerimaan.php";}
    else if($_GET['hal']=='tambahPenerimaan')
        {include "Penerimaan/tambahPenerimaan.php";}
    else if($_GET['hal']=='hapusSementara')
        {include "Penerimaan/hapusSementara.php";}
    else if($_GET['hal']=='detailPenerimaan')
        {include "Penerimaan/detailPenerimaan.php";}
    else if($_GET['hal']=='hapusPenerimaan')
        {include "Penerimaan/hapusPenerimaan.php";}
    else if($_GET['hal']=='dataPengeluaran')
        {include "Pengeluaran/dataPengeluaran.php";}
    else if($_GET['hal']=='tambahPengeluaran')
        {include "Pengeluaran/tambahPengeluaran.php";}
    else if($_GET['hal']=='hapusPengeluaran')
        {include "Pengeluaran/hapusPengeluaran.php";}
    else if($_GET['hal']=='hapusSementaraKeluar')
        {include "Pengeluaran/hapusSementaraKeluar.php";}
    else if($_GET['hal']=='hapusPengeluaran')
        {include "Pengeluaran/hapusPengeluaran.php";}
    else if($_GET['hal']=='detailPengeluaran')
        {include "Pengeluaran/detailPengeluaran.php";}
    else if($_GET['hal']=='laporanPenerimaanBarang')
        {include "Laporan/laporanPenerimaanBarang.php";}
    else if($_GET['hal']=='laporanPengeluaranBarang')
        {include "Laporan/laporanPengeluaranBarang.php";}
?>