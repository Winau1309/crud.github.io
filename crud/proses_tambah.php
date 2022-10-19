<?php
    include('config.php');

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar_produk = $_FILES['gambar_produk']['name'];
    
    if($gambar_produk != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x= explode('.', $gambar_produk);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_produk']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru =$angka_acak.'-'.$gambar_produk;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
            $query = " INSERT INTO produk (nama, harga, deskripsi, gambar_produk) VALUES('$nama', '$harga', '$deskripsi', '$nama_gambar_baru')";
            $result = mysqli_query($config, $query);

            if(!$result) {
                die("Query Error :".mysqli_errno($config)." - ".mysqli_error($config));
            } else {
                echo "<script> alert('Berhasil Input Data');window.location='crud.php'; </script>";
            }
        } else {
            echo "<script> alert('Format Gambar Hanya bisa .png dan .jpg');window.location='add.php'; </script>";
        }
    } else {
            $query = " INSERT INTO produk (nama, harga, deskripsi) VALUES('$nama','$harga', '$deskripsi')";
            $result = mysqli_query($config, $query);

            if(!$result) {
                die("Query Error :".mysqli_errno($config)." - ".mysqli_error($config));
            } else {
                echo "<script>alert('Berhasil Input Data');window.location='add.php'; </script>";
            }
        
    }
?>