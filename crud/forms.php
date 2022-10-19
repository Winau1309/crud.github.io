<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
<form action>
  <div class=" 
Nama: <input type="text" name="nama" value="Nama Kamu" />
<br />
 
Password: <input type="password" name="password" />
<br />
 
Jenis Kelamin : 
<input type="radio" name="jenis_kelamin" value="laki-laki" checked /> 
Laki - Laki
<input type="radio" name="jenis_kelamin" value="perempuan" /> 
Perempuan
<br />
 
Hobi: <input type="checkbox" name="hobi_baca" /> Membaca Buku
      <input type="checkbox" name="hobi_nulis" checked /> Menulis
      <input type="checkbox" name="hobi_mancing" /> Memancing
<br />
 
Asal Kota:
 <select name="asal_kota" >
     <option value="Kota Jakarta"> Jakarta</option>
     <option value="Kota Bandung">Bandung</option>
     <option value="Kota Semarang" selected>Semarang</option>
 </select>
<br />
 
Komentar Anda:
<textarea name="komentar" rows="5" cols="20">
Silahkan katakan isi hati anda
</textarea>
<br />
 
<input type="submit" value="Mulai Proses!" >
 
</form>
</html>