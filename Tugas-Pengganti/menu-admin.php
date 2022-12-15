<?php
    require("koneksi.php");

    mysqli_query($conn, "SELECT * FROM lokasi");
    



    $read = mysqli_query($conn,"SELECT * FROM lokasi");

    $lokasi = [];
    while ($row = mysqli_fetch_assoc($read)){
        $lokasi[] = $row;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include('css/style-admin.css');
        ?>
        <?php include('js/main.js')
        ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>ADMIN</title>
</head>
<body>
<div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/maezar.abdillah"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="https://instagram.com/maezar.abdillah_"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.tiktok.com/@ezaar.jr?_t=8VwfxyaNvik&_r=1"><i class="fa-brands fa-tiktok"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="menu-admin.php">Pesona Kaltim</a></h1>
            <ul>
                <li><a href="logout-admin.php">LOG OUT</li>
            </ul>
        </div>
    </header>
    <h1 class = "ha"><center>MENU ADMIN</center></h1><br>
    <h4>Tambah Data</h4>
    <a href="add.php"><button class = "back"><i class="fa-solid fa-plus"></i></button></a>
    <table class="table" border="1" cellpadding="5">
        <tr>
            <th>Foto Wisata</th>
            <th>Nama Tempat</th>
            <th>Harga Tiket</th>
            <th>Alamat</th>
            <th>Link</th>
            <th>Deskripsi</th>
            <th>Edit / Delete</th>
        </tr>
        <?php foreach($lokasi as $lk):?>
        <tr>
            <td><img src="image/<?php echo $lk['gambar1']?>" alt="" class="gambar"></td>
            <td><?php echo $lk['nama']; ?></td>
            <td><?php echo $lk['tiket']; ?></td>
            <td><?php echo $lk['alamat']; ?></td>
            <td><?php echo $lk['link']; ?></td>
            <td><?php echo $lk['deskripsi']; ?></td>
            <td>
                <button class ="ed" type = "submit"><a href="edit.php?id=<?php echo $lk['id']; ?>"><i class="fa-solid fa-pen"></i></a></button>
                <button class = "ed" type = "submit"><a href="delete.php?id=<?php echo $lk['id']; ?>"><i class="fa-solid fa-trash"></i></a></button>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Pesona Kaltim. All Right Reserved</small>
        </div>
    </footer>
</body>
</html>