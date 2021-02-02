<?php
    include "../connect.php";
    $id_login = $_GET['id_login'];
    $query = mysqli_query($connect,"DELETE FROM tb_login WHERE id_login='$id_login'") or die (mysql_error());

    echo "
    <meta http-equiv='refresh' content ='0; url=?hal=dataAdmin'>
    ";
?>