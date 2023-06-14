<?php require_once("koneksi.php");
$email = $_GET['Email'];


$sql = "select * from user where email='$email'";
$result = mysqli_query ($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<form class="bg-light shadow-lg p-3 mb-5 bg-white rounded" action="ubah-ac.php" method="POST" enctype="multipart/form-data">

            <input class="form-control" type="hidden" name="id" placeholder="Nama kamu" value ="<?php echo $row['id']?>" />

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="name" placeholder="Nama kamu" value ="<?php echo $row['name']?>" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" value ="<?php echo $row['username']?>" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" value ="<?php echo $row['email']?>" />
            </div>

            <div class="form-group">
            <label for="password">Ganti Profil</label>
            <input type="file" class="form-control" id="image" accept="images/*" onchange="upload();">
            </div>
            
            <div class="form-group">
                <label for="profil">Url Profil</label>
                <input class="form-control" type="text" id="profil" placeholder="Url Profile" name="profil" value ="<?php echo $row['photo']?>">
                </div>
                

            <input type="submit" class="btn btn-success btn-block" name="register" value="UPDATE" />

        </form>
<script src="https://cdn.jsdelivr.net/gh/AgungPutra220903/Web/profil.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.2/firebase.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AgungPutra220903/Web/initfb.js"></script>
</body>
</html>