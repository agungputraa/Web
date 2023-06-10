<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <style>
        table, th, td {
  border:1px solid black;
}
    </style>
</head>
<body>
<?php
  // collect value of input field
  $nama = $_POST['nama'];
  $nim = $_POST ['nim'];
  $jk = $_POST ['jk'];
  $alamat = $_POST ['alamat'];
  $sql = "INSERT INTO mahasiswa (Nim, Nama, Jk, Alamat) VALUES ('$nim', '$nama','$jk','$alamat')"; 
  $result = mysqli_query($conn, $sql);
   if ($result){
    echo "data berhasil di tambah";
   }else{
    echo "data tidak berhasil di tambahkan";
   }
//   echo "<table>";
//   echo "<tr>";
//     echo "<td>".$nama."</td>";
//     echo "<td>".$nim."</td>";
//     echo "<td>".$jk."</td>";
//     echo "<td>".$alamat."</td>";
//     echo "</tr>";
//   echo "</table>";
// 
?>
</body>
</html>