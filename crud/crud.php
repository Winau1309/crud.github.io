<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>crud</title>
    <style type="text/css"> 
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Mukta:wght@200&display=swap');

    *{
        font-family: 'Mukta', sans-serif;
    }
    h1{
        text-transform: uppercase;
        font-family: 'Fredoka One', cursive;
        color: #06283D;
    }
    table{
        border: 1px;
        border-collapse: collapse;
        border-spacing:0;
        width: 70%;
        margin: 10px auto 10px auto;
    }
    table thead th{
        background-color: #425F57;
        border: 1px solid #749F82;
        color: white;
    }
    table thead td{
        border: 1px solid black;
        color: black;
        padding: 10px;
    }
    a {
        background-color: #647E68;
        color: white;
        padding: 5px;
        font-size: 15px;
        text-decoration: none;
    }
    </style>
    </head>
    <body>
        <center><h1> DATA PRODUK<h1></center>
        <center><a href="add.php">+&nbsp;Tambah Produk </a></center>
        <table>
            <thead>
                <tr>
                    <th> No. </th>
                    <th> Produk </th>
                    <th> Harga </th>
                    <th> Deskripsi </th>
                    <th> Gambar </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = " SELECT * FROM produk ORDER BY id ASC";
                $result = mysqli_query($config, $query);
                
                if(!$result){
                    die("QUERY ERROR".mysqli_connect_error($config)."-".mysqli_error($config));
                }
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td> <?php echo $no; ?></td>
                        <td> <?php echo $row['nama']; ?></td>
                        <td>Rp.<?php echo number_format ($row['harga'],0,',','.'); ?></td>
                        <td> <?php echo substr($row['deskripsi'],0,50); ?>...</td>
                        <td><img  style="width : 120px;" src="img/<?php echo $row['gambar_produk']; ?>"></td>
                        <td>
                            <a href="edit.php?id=<?php echo$row['id'];?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'];?>"onclick="return confirm('Anda yakin ingin hapus data ini?')">Hapus</a>
                        </td>
                </tr>
                <?php
                $no++;
                }
                ?>
            </tbody>
            </table>
</body>
</html>