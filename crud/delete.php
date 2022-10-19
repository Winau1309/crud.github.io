<?php
    include('config.php');

    $id = $_GET['id'];
    $query = "DELETE FROM produk WHERE id='$id'";
    $result = mysqli_query($config, $query);

    if(!$result) {
        die("Query Error :".mysqli_errno($config)." - ".mysqli_error($config));
    } else {
        echo "<script> alert('Berhasil Dihapus!');window.location='crud.php'; </script>";
    }