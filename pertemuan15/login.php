<?php 
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
    <style>
        :root {
            font-size: 16px;
            color: white;
        }
        body {
            height: 100vh;
            font-family: monospace;
            background-image: url(background/iced-coffee-pattern.jpg);
            display: flex;
            align-items: center;
        }
        .container {
            width: 600px;
            padding: 10px;
            background-color: rgba(25, 46, 54, 0.3);
            margin: 0 auto;
            border-radius: 15px;
        }
        form {
            display: flex;
            /* justify-content: center; */
            align-content: center;
            flex-wrap: wrap;
            flex-direction: column;
        }
        label {
            padding: 10px;
            margin-top: 5px;
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            flex-wrap: wrap;
        }

        h1 {
            font-size: 3rem;
            text-align: center;
            margin: 0;
        }

        button {
            background-color: rgba(3, 179, 248, 0.7);
            color: white;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .7);
            padding: 5px;
            transition: .3s;
            border: .5px solid rgba(3, 179, 248, 1);
            border-radius: 1em;
            cursor: pointer;
        }

        button:hover {
            background-color: rgba(3, 179, 248, 1);
            box-shadow: 0 6px 4px rgba(0, 0, 0, .3);
            transform: translateY(-4px);
        }

        label p.error {
            color: rgb(223, 74, 74);
            font-weight: 700;
            font-size: .6em;
            text-align: left;
            font-style: italic;
            flex: 1;
            padding: 0;
            margin: 0;
        }

        input {
            border-radius: 7px;
            border: none;
            width: 250px;
            padding: 7px;
            color: salmon;
            max-width: 100%;
            justify-self: center;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .7);
            transition: .3s;
        }

        input:focus {
            transform: translateY(-2px);
            box-shadow: 0 6px 4px rgba(0, 0, 0, .3);
            margin-top: 2px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Halaman Login</h1>  

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
    </div>

    
    
</body>
</html>