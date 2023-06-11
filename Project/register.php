<!-- Proses Program -->
<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $profil = filter_input(INPUT_POST, 'profil', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    

    // menyiapkan query
    $sql = "INSERT INTO user (name, username, email, password,photo) 
            VALUES (:name, :username, :email, :password, :profil)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email,
        ":profil" => $profil
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Akun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-white">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Bergabunglah bersama ribuan orang lainnya...</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form class="bg-light shadow-lg p-3 mb-5 bg-white rounded" action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />

                </div>
            <div class="form-group">
            <label for="password">Pilih Profil</label>
            <input type="file" class="form-control" id="image" accept="images/*" onchange="upload();">
            </div>
            
            <div class="form-group">
                <label for="profil">Url Profil</label>
                <input class="form-control" type="text" id="profil" placeholder="Url Profile" name="profil">
                </div>
                

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>

            
        </div>

        <div class="col-md-6">
        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_m9fz64i8.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
        </div>

    </div>
</div>

<div class="text-center p-4" style="background-color: rgba(255, 255, 255,0.8);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://agungdev.id/">agungdev.id</a>
</div>

<script src="https://cdn.jsdelivr.net/gh/AgungPutra220903/Web/profil.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.2/firebase.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AgungPutra220903/Web/initfb.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>