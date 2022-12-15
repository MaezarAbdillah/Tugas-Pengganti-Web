<?php
    require("koneksi.php");
    mysqli_query($conn, "SELECT * FROM login_user");

    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];


    $insert = "INSERT INTO login_user VALUES('', '$user', '$pass')";
    $tambah = mysqli_query($conn,$insert);
    if($tambah){
        echo 
        "<script>
            alert('Registrasi berhasil');
            document.location.href = 'login-user.php';
        </script>";
    }
    else{
        "<script>
            alert('Registrasi akun gagal');
            document.location.href = 'register.php';
        </script>";
    }
    }
    $read = mysqli_query($conn,"SELECT * FROM login_user");

    $log_u = [];
    while ($row = mysqli_fetch_assoc($read)){
        $log_u[] = $row;
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
    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <div class="title">
            Registrasi Akun
        </div>
        <form action="" method="post" name="form1">
        <div class="form">
            <div class="input_field">
                <label for="">Username</label>
                <input type="text" name="username" class="input">
            </div>
            <div class="input_field">
                <label for="">Password</label>
                <input type="password" name="password" class="input">
            </div>
            <div class="inputfield">
                <button type="submit" name="submit" value="submit">Registrasi</button>
            </div>
        </div>
        </form>
    </div>
</body>