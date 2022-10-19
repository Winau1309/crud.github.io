<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Tambah Produk </title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');
        *{
            font-family: 'Merriweather Sans', sans-serif;
        }
        h1{
        text-transform: uppercase;
        font-family: 'Fredoka One', cursive;
        color: #06283D;
        }
        .base{
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background-color: #F5EFE6;
        }
        label{
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input{
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: white;
            border: 2px solid black;
            outline-color: #A1C298;
        }
        button{
            background-color: #425F57;
            color: white;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
    </style>
    </head>
    <body>
    <center><h1>Tambah Produk<h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Nama Produk</label>
            <input type="text" name="nama" autofocu="" required=""/>
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="harga" required=""/>
        </div>
        <div>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi"/>
        </div>
        <div>
            <label>Gambar Produk</label>
            <input type="file" name="gambar_produk" required=""/>
        </div>
        <div>
            <button type="submit"> Simpan Produk</button>
        </div>
</section>
</form>
</body>
</html>