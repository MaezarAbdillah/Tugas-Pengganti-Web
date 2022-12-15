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
    <title>Pesona Kaltim</title>
    <link rel="stylesheet" href="index.css">
    <style>
        <?php include('css/style.css');
        ?>
        <?php include('js/main.js')
        ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
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
            <h1><a href="menu-user.php">Pesona Kaltim</a></h1>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href = "#konten">SPOT LIST</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="logout-user.php">LOG OUT</li>
            </ul>
        </div>
    </header>
    
    <!-- Background -->
    <section class="banner">
        <h2>WELCOME TO MY WEBSITE</h2>
    </section>
    <h1 class="head" id="home">Destinasi Tempat Wisata Kalimantan Timur</h1>
    <!-- Isi Content -->
    <!-- content -->
    <div id="konten" class="flex">
        <?php $i=1; foreach($lokasi as $lk): ?>
            <div class="content">
                <img src="image/<?php echo $lk['gambar1'];?>" alt="" class="gambar">
                <!-- <img src="image/''.jpg" alt="Masjid Islamic Center" class="gambar"> -->
                
                <h2><?php echo $lk['nama']; ?></h2>
                
                <p><?php echo $lk['deskripsi']; ?><br>Harga Tiket Masuk : <?php echo $lk['tiket']?><br><?php echo $lk['alamat']?></p>
                <div class="btn">
                    <a href=<?php echo $lk['link']?>><i class="fa-solid fa-location-dot"></i> Lihat Lokasi Tempat Ini</a>
                </div>  
            </div>
        <?php $i++; endforeach;?>
    </div>
        
    </div>
    <!-- About -->
    <div class="about" id="about">
        <h3><center>ABOUT ME<center></h3>
            <div class="main">
                <div class="bg">
                <div class="img"></div>
                <hr>
                </div>
                <h1>Maezar Abdillah</h1>
                <div class="text">Mahasiswa <strong>Universitas Mulawarman</strong></div>
                <p>Halo! Nama saya Maezar Abdillah, saya lahir pada 1 Desember 2003, hobi saya adalah bermain Sepak Bola dan Futsal. </p>
                <ul>
                    <li><a onclick="popup()"><i class="fa-brands fa-square-facebook"></i></a></li>
                    <li><a onclick="popup1()"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a onclick="popup2()"><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
            </div>
            <script src="js/main.js"></script>
</div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Pesona Kaltim. All Right Reserved</small>
        </div>
    </footer>
</body>
</html>