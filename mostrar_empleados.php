<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<?php
$db = "prueba_tecnica_dev";

$usuario = "16928072";
$servidor = "https://github.com/quenbauher/PhpPrueba_Nexura_Internacional.git";
$password ="31851873";


         /*$id="id";
         $nombre="nombre";
         $email="email";
         $sexo="sexo";
         $area_id="area_id";
         $boletin="boletin";
         $descripcion="descripcion";
       */  

// Create connection
$conn = new mysqli($servidor, $usuario, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, nombre, email, sexo, area_id, boletin, descripcion FROM empleado ORDER BY id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Nombre</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. " </td><td>" . $row["email"]." </td><td>" . $row["sexo"]." </td><td>" . $row["area_id"]." </td><td>" . $row["boletin"]." </td><td>" . $row["descripcion"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>

</body>
</html>
