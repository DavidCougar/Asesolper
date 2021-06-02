<?php
if (isset($_POST['usuario']))
{
$username = $_POST['usuario'];
}
$conexion = new mysqli('localhost', 'root', '', 'proyecto');if ($conexion->connect_errno) {    echo "ERROR al conectar con la DB.";   exit; }

$sql = "SELECT * FROM usuarios WHERE usuarios_usuario = '$username'";

      
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            $filas = mysqli_num_rows($consulta);

            
            if($filas == 0){
              header('location:Index.php'); 
        
            }
            }

?>
<html>
<head>
<title>Lista</title>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link href='css/estilos.css' rel='stylesheet' type='text/css'>
<div class="login">
  <div class="login-header">
    <h1>Listado</h1>
  </div>
  <div class="lista-form">

 <?php
    session_start();
$conexion = new mysqli('localhost', 'root', '', 'proyecto');

if ($conexion->connect_errno) {

    echo "Lo sentimos, este sitio web está experimentando problemas.<br>";
    echo "Error: Fallo al conectarse a MySQL debido a: <br>";
    echo "Error Nro: " . $conexion->connect_errno . "<br>";
    echo "Error: " . $conexion->connect_error . "<br>";

    exit;
}

$consulta = "SELECT * FROM datos";

if (!$resultado = $conexion->query($consulta)) {
    echo "Lo sentimos, no se pudo realizar la consulta.";
    exit;
}


  echo "<table border=1 cellpadding=4 cellspacing=0>";


  echo "<tr>
          <th colspan=5> Listado </th>
        <tr>
      <td width='150' style='font-weight: bold'>ID</td> 
      <td width='150' style='font-weight: bold'>NOMBRE</td> 
      <td width='150' style='font-weight: bold'>EDAD</td> 
      <td width='150' style='font-weight: bold'>DIRECCION</td> 
      <td width='150' style='font-weight: bold'>EDITAR</td> 
      </tr>";


while ($array_registro = $resultado->fetch_assoc()) {
    echo "<tr>
    <td>".$array_registro['datos_id']."</td>
    <td>".$array_registro['datos_nombre']."</td>
    <td>".$array_registro['datos_edad']."</td>
    <td>".$array_registro['datos_domicilio']."</td>
    <td><a href='editar.php?id=".$array_registro['datos_id']."'> EDITAR </a></td>
    </tr>";
}
echo "</table>";

$resultado->free(); 
$conexion->close();
  ?>






  </div>
</div>
<div class="error-page">

</div>
</body>
</html>