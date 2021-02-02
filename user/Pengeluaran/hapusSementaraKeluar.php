<?php
    include "../connect.php";
    $id = $_GET['id'];
    $query = mysqli_query($connect,"DELETE FROM tb_sementara WHERE id='$id'") or die (mysql_error());
    
    echo "
    <meta http-equiv='refresh' content ='0; url=?hal=tambahPengeluaran'>
    ";
?>