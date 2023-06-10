<?php include "koneksi.php";
$nim = $_POST['Nim'];
$nama = $_POST['Nama'];
$jk = $_POST['Jk'];
$alamat = $_POST['Alamat'];

$sql = "UPDATE mahasiswa
SET  Nama= '$nama', Jk = '$jk' , Alamat = '$alamat'
WHERE Nim= '$nim'";

$result = mysqli_query($conn, $sql);

   if ($result){
    echo "data berhasil di update";
   }else{
    echo "data tidak berhasil di update";
   }
?>