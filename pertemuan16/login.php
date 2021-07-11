<?php 
session_start();
if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}
require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["nama"] = $_POST["username"];
            $_SESSION["login"] = true;
            header("location: index.php");
            exit;
        }

    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman Login</h1> 
    <section>
        <div class="container">
            <form method="post" action="">

                <label>
                    Username :
                    <input type="text" name="username" placeholder="masukkin username kamu" autocomplete="off" autofocus >
                </label>
                <label>
                    Password :
                    <input type="password" name="password" placeholder="password kamu di sini.." >
                    <?php if(isset($error)) :  ?>
                        <p class="error">hmmmm... kayaknya username / password kamu salah</p>
                    <?php endif; ?>
                </label>
                <button type="submit" name="login">Login</button>
                

            </form>
            <p style="text-align: center;">Belum punya akun? <a href="registrasi.php">Sign Up</a></p>
        </div>
    </section>
    
</body>
</html>