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
$arr = ["Nim","Nama","Jk","Alamat"];


echo "<table>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row1 = mysqli_fetch_assoc($result)){
    echo "<tr>";
        echo "<td>".$row1[$arr[0]]."</td>";
        echo "<td>".$row1[$arr[1]]."</td>";
        echo "<td>".$row1[$arr[2]]."</td>";
        echo "<td>".$row1[$arr[3]]."</td>";
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