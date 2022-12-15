<?php
    require 'koneksi.php';
    $id=$_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM lokasi WHERE id = $id");
    $lokasi = [];
    while ($row = mysqli_fetch_assoc($result)){
        $lokasi[] = $row;
    }
    $lokasi = $lokasi[0];

    if(isset($_POST['update'])){
        $nama=$_POST['nama'];
        $harga=$_POST['harga'];
        $alamat=$_POST['alamat'];
        $desk = $_POST['desc'];
        $link=$_POST['link'];
        
        $sql = "UPDATE lokasi SET nama = '$nama', harga = '$harga',alamat ='$alamat',desk='$desk',link = '$link' WHERE id = '$id' ";
        $result = mysqli_query($conn, $sql); 
        if($result){
            echo 
            "<script>
                alert('Data Telah DiPerbarui');
                document.location.href = 'read.php';
            </script>";
        }
        else{
            "<script>
                alert('Data Gagal DiPerbarui');
                document.location.href = 'edit.php';
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'css/input.css';
        ?>
    </style>
    <title>ADMIN</title>
</head>
<body>
<div class="container">
        <div class="title">
            Update Data
        </div>
        <form action="" method="post" name="form1">
        <div class="form">
            <div class="input_field">
                <label for="">Nama Lokasi Wisata</label>
                <input type="text" name="nama" class="input">
            </div>
            <div class="input_field">
                <label for="">Harga Tiket Masuk</label>
                <div class="custom_select">
                <select name="harga" id="">
                    <option value="Gratis">Gratis</option>
                    <option value="Rp.15.000">Rp.15.000</option>
                    <option value="Rp.20.000">Rp.20.000</option>
                    <option value="Rp.30.000">Rp.30.000</option>
                    <option value="Rp.40.000">Rp.40.000</option>
                    <option value="Rp.50.000">Rp.50.000</option>
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Alamat Wisata</label>
                <input type="text" name = "alamat" class="input">
            </div>
            <div class="input_field">
                <label for="">Deskripsi Tempat Wisata</label>
                <input type="text" name="desc" class="desc">
            </div>
            <div class="input_field">
                <label for="">Link Google Maps</label>
                <input type="text" name ="link" class="input">
            </div>
            <div class="input_field">
                <label for="">Foto Tempat Wisata</label>
                <input type="file" name = "gambar1" class="input">
            </div>
            <div class="inputfield">
                <button type="submit" name="update" value="update">Update</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>