<?php include 'koneksi.php';
$nim = $_GET['Nim'];


$sql = "select * from mahasiswa where Nim='$nim'";
$result = mysqli_query ($conn, $sql);
$row = mysqli_fetch_assoc($result);
var_dump($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ubah-ac.php" method="post">
  <label for="fname">Nama:</label><br>
  <input type="text" id="nama" name="Nama" value ="<?php echo $row['Nama']?>"><br>
  <label for="lname">Nim:</label><br>
  <input type="text" id="nim" name="Nim" value ="<?php echo $row['Nim']?>" ><br>
  <label for="fname">Jenis Kelamin:</label><br>
  <input type="text" id="jk" name="Jk" value ="<?php echo $row['Jk']?>"><br>
  <label for="lname">Alamat:</label><br>
  <input type="text" id="alamat" name="Alamat" value ="<?php echo $row['Alamat']?>" ><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>