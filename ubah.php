<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if( isset($_POST["submit"])) {

if( ubah($_POST)>0){
    ECHO "
    <script>
    alert('data berhasil diubah!');
    document.localtion.href = 'index.php';
    </script>
   ";
} else {
    echo "
    <script>
        alert('data gagal diubah!');
        document.localtion.href = 'index.php';
        </script>
     ";

    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah data mahasiswa</title>
        <style>
            label {
                display: flex;
            }
            </style>
</head>
<body>
    <a href="index.php">kembali</a>
    <br>
    <h1>Ubah data mahasiswa</h1>

    <from action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
               <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <li> 
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
           </li>
           <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
           </li>
           <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
                
                
           </li>
           <li>
                <button type="submit" name="submit">Ubah Data!</button>
           </li>
        </ul>


    </from>
    </body>
    </html>