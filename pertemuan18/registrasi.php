<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo 
        "<script>
            alert('user baru telah ditamabahkan!');
        </script>";
    }else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="login.css">
    <!-- <style>
        
        input {
            display: block;
        }
    </style> -->
</head>
<body>

    <div class="container">

        <h1>Halaman Registrasi</h1>
        <form method="post" action="">
        
            <label>
                Username :
                <input type="text" name="username" autofocus required >
            </label>
            <label>
                Password :
                <input type="password" name="password" required >
            </label>
            <label>
                Konfirmasi Password :
                <input type="password" name="password2" >
            </label>
            <button type="submit" name="register">Register!</button>
        
        </form>
        <p style="text-align: center;">Sudah punya akun? <a href="login.php">Masuk</a></p>

    </div>

    
</body>
</html>