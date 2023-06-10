<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Value</title>
    <style>
        table, th, td {
  border:1px solid black;
}
    </style>
</head>
<body>
<?php
$sql = "SELECT Nim, Nama, Jk, Alamat FROM mahasiswa";
$result = mysqli_query($conn, $sql);


echo "<table>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo "<td>" . $row["Nim"]."</td>";
      echo "<td>" . $row["Nama"]."</td>";
      echo "<td>" . $row["Jk"]."</td>";
      echo "<td>" . $row["Alamat"]."</td>";
      echo "<td><a href=\"hapus.php?Nim=".$row["Nim"]."\">Hapus</a></td>";
      echo "<td><a href=\"ubah.php?Nim=".$row["Nim"]."\">Ubah</a></td>";
      echo "</tr> ";
  }
  
} else {
  echo "0 results";
}
echo "</table>";

mysqli_close($conn);
?>
</body>
</html>
