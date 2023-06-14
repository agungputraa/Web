<?php include "koneksi.php";
$id = $_POST['id'];
$name = $_POST['name'];
$user = $_POST['username'];
$email = $_POST['email'];
$profil = $_POST['profil'];

$sql = "UPDATE user
SET  username= '$user', email = '$email' , name= '$name', photo = '$profil'
WHERE id= '$id'";

$result = mysqli_query($conn, $sql);

   if ($result){
    echo "data berhasil di update";
    header("Location: login.php");
   }else{
    echo "data tidak berhasil di update";
   }
?>