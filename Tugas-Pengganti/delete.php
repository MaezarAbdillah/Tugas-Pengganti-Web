<?php
    require 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM lokasi WHERE id = $id");

    if($result){
        echo 
        "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'menu-admin.php';
        </script>";
    }
    else{
        "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'menu-admin.php';
        </script>";
    }
?>