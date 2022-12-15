<?php
    require 'koneksi.php';

  if(isset($_POST['login'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $result = mysqli_query($conn,"SELECT * FROM login_admin WHERE username = '$username'");
    
    
    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if($password === $row['password']){
        echo "<script> 
              alert('Selamat Datang $username');   
              document.location.href = 'menu-admin.php';  
              </script>";
      }
    }
    $error = true;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
    <?php include 'css/login.css';
    ?>
    </style>
    <title>Login Admin</title>
  </head>
    <div class="container">
        <h4 class="text-center" >LOGIN ADMIN</h4>
        <?php
        if(isset($error)){
          echo"<p style='color: red;'> Username atau Password salah!</p>";
        }
        ?>
        <hr>
        <form method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user" class="form-control" placeholder="Masukkan Username Anda" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Masukkan Password Anda" required>
            </div>
            <br>
            <button type="submit" name= "login" value="login" class="btn btn-primary">LOGIN</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
        <a href="login-user.php">Login Sebagai User ?</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
