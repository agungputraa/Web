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
  $agung = 3;
  while ($row1 = mysqli_fetch_row($result)){
    echo "<tr>";
    for ($i = 0; $i<=$agung; $i++){
        echo "<td>".$row1[$i]."</td>";
      }
      echo "</tr>";
  }
  
} else {
  echo "0 results";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>