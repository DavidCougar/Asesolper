<?php

//
if(isset($_GET['id']))
{
$valor_id = $_GET['id'];


if(!$_GET['id'])
{
header('location:lista.php');
}
$conexion = new mysqli('localhost', 'root', '', 'proyecto');if ($conexion->connect_errno) {    echo "ERROR al conectar con la DB.";   exit; }

 $sql = "SELECT * FROM datos WHERE datos_id = '$valor_id'";

        // 5. Ejecuto cadena query()
        if(!$consulta = $conexion->query($sql))
        {
            echo "ERROR: no se pudo ejecutar la consulta!";
        }
          $filas = mysqli_num_rows($consulta);
 if($filas == 0){
                echo "<script>alert('No hay datos');</script>";
                 header('location:lista.php');
            }
        else
        {
        

            While($row=mysqli_fetch_object($consulta))
  {

    $nombre=$row->datos_nombre;
    $edad=$row->datos_edad;
    $domicilio=$row->datos_domicilio;

  }

        }


}
?>


<html>
<head>
<title>Editar Listado</title>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link href='css/estilos.css' rel='stylesheet' type='text/css'>
<div class="login">
  <div class="login-header">
    <h1>Formulario de Edicion</h1>
  </div>
  <div class="login-form">
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h3>ID:</h3>
    <input type="text" placeholder="ID" name="id" value="<?php echo $valor_id; ?>"  readonly/><br>
    <h3>Nombre:</h3>
    <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $nombre; ?>" />
    <br>
    <h3>Edad:</h3>
    <input type="text" placeholder="Edad" name="edad" value="<?php echo $edad; ?>" />
    <br>
    <h3>Domicilio:</h3>
    <input type="text" placeholder="Domicilio" name="domicilio" value="<?php echo $domicilio; ?>" />
    <br>

    <input type="submit" name="update" value="Actualizar" class="update-button"/>
    <br>
    <br>
  </form>
  </div>
</div>
<div class="error-page">

</div>
</body>
</html>


<?php
  
$conexion = new mysqli('localhost', 'root', '', 'proyecto');if ($conexion->connect_errno) {    echo "ERROR al conectar con la DB.";   exit; }

//
if(isset($_POST['update'])){
    $update_id = $_POST['id'];
    $update_nombre = $_POST['nombre'];
    $update_edad = $_POST['edad'];
    $update_domicilio = $_POST['domicilio'];



    if($update_id == "" || $_POST['id'] == null || $update_nombre == "" || $_POST['nombre'] == null || $update_edad == "" || $_POST['edad'] == null || $update_domicilio == "" || $_POST['domicilio'] == null){ 
        echo "<script>alert('Error: campos vacio');</script>"; 
               header('location:lista.php');
    }else{
    
        $sql = "UPDATE datos SET datos_nombre = '$update_nombre', datos_edad = '$update_edad', datos_domicilio = '$update_domicilio' WHERE datos_id = '$update_id' ";

  
 if(mysqli_query($conexion, $sql))
 {

        echo "Registro actualizado.";
        header('location:lista.php');
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
    }
    // Cierra la conexion
    mysqli_close($conexion);

        }
    }

?>



