<?php
    include "service/database.php";
    session_start();

    $login_message  = '';
    

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from akun where 
        username = '$username' and password = '$password'";

        $result = $db->query($sql);

        if($result->num_rows  > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data ["username"];
            $_SESSION["is_login"] = true;

            header("location: tampilan.php");
        }else   {
            $login_message = "akun tidak ada";
        }
        $db->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
    <link rel="stylesheet" href="assets/css/log.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .login-container form input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .login-container form button {
            width: 100%;
            padding: 12px;
            background-color: #43cea2;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-container form button:hover {
            background-color: #36b199;
        }

        .login-container a {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #185a9d;
            text-decoration: none;
        }

        .login-container i {
            display: block;
            text-align: center;
            color: #e53e3e;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login Akun</h2> 

        <i><?= $login_message ?></i>

        <form action="login.php" method="post">
            <input type="text" placeholder="Username" name="username" required />
            <input type="password" placeholder="Password" name="password" required />
            <button type="submit" name="login">Login</button>
        </form>
        <p class="info-text">Belum punya akun?</p>
        <a href="index.php">Daftar di sini</a>
    </div>

</body>
</html>