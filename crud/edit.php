<?php include('config.php'); 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM produk WHERE id = '$id'";
        $result = mysqli_query($config, $query);
        if(!$result) {
            die("Query Error :".mysqli_errno($config). " - ".mysqli_error($config));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script>alert('Data Tidak Ditemukan !');window.location='crud.php';</script>";
        }

    } else {
        echo "<script>alert('Masukan Produk yang Akan di Edit');window.location='proses_edit.php';</script>";
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Edit Produk</title>
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
    <center><h1>Edit Produk <?php echo $data['nama']; ?><h1></center>
    <form method="POST" action="edit.php" enctype="multipart/config-data">
    <section class="base">
        <div>
            <label>Nama Produk</label>
            <input type="text" name="nama" autofocus="" required="" value="<?php echo $data['nama']; ?>"/>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="harga" required="" value="<?php echo $data['harga']; ?>"/>
        </div>
        <div>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>"/>
        </div>
        <div>
            <label>Gambar Produk</label>
            <img src="gambar/" value="<?php echo $data['gambar_produk']; ?>" style="width: 120px; float:left;  margin-botton: 5px;">
            <input type="file" name="gambar_produk" required=""/>
            <i style="float:left;font-size:11px;color:red;">Abaikan Apabila Gambar Tidak Dirubah</i>
        </div>
        <div>
            <br>
            <button type="submit"> Simpan Perubahan</button>
        </div>
</section>
    </form>
</body>
</html>