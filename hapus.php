<?php include "koneksi.php";
$nim = $_GET['Nim'];

$sql = "DELETE FROM mahasiswa WHERE Nim= '$nim' ";
$result = mysqli_query($conn, $sql);
   if ($result){
    echo "data berhasil di hapus";
   }else{
    echo "data tidak berhasil di hapus";
   }
?>