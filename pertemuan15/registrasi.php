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
    <style>
        ul li {
            list-style: none;
        }
        
        input {
            display: block;
        }
    </style>
</head>
<body>

    <h1>Halaman Registrasi</h1>

    <form method="post" action="">
    
        <ul>
            <li>
                <label>
                    Username :
                    <input type="text" name="username" autofocus >
                </label>
            </li>
            <li>
                <label>
                    Password :
                    <input type="password" name="password" >
                </label>
            </li>
            <li>
                <label>
                    Konfirmasi Password :
                    <input type="password" name="password2" >
                </label>
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>
    
    </form>
</body>
</html>