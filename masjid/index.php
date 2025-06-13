<?php
    include "service/database.php";
    session_start();

    $register_message = "";


    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        try {
            $sql = "INSERT INTO akun (username, password) VALUES ('$username', '$password')";

        if($db->query($sql)) {
            $register_message = "Berhasil mendaftar, silahkan Login";
            } else {
            $register_message = "Mendaftar gagal, silahkan coba lagi";
        }
        }catch (mysqli_sql_exception) {
            $register_message = "username sudah ada, silahkan ganti yang lain";
        }
        $db->close();
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="assets/css/log.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .register-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .register-container form input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .register-container form button {
            width: 100%;
            padding: 12px;
            background-color: #667eea;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .register-container form button:hover {
            background-color: #5a67d8;
        }

        .register-container a {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #667eea;
            text-decoration: none;
        }

        .register-container i {
            display: block;
            text-align: center;
            color: #e53e3e;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register Akun</h2> 

        <i><?= $register_message ?></i>

        <form action="register.php" method="post">
            <input type="text" placeholder="Username" name="username" required />
            <input type="password" placeholder="Password" name="password" required />
            <button type="submit" name="register">Register</button>
        </form>

        <p class="info-text">Sudah punya akun?</p>
        <a href="login.php">Login</a>
    </div>
</body>
</html>
