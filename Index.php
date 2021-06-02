


<html>
<head>
<title>Iniciar Sesion</title>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link href='css/estilos.css' rel='stylesheet' type='text/css'>
<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
     <form method="post" action="lista.php">
    <h3>Usuario:</h3>
    <input type="text" placeholder="Usuario" name="usuario" /><br>
    <h3>Contrase&ntilde;a:</h3>
    <input type="password" placeholder="Password" name="clave" />
    <br>
    <input type="submit" name="login" value="Enviar" class="login-button"/>
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

if(isset($_POST['login'])){
    $u = $_POST['usuario'];
    $c = $_POST['clave'];

echo "ss";


    if($u == "" || $_POST['clave'] == null){ 
        echo "<script>alert('Error: usuario vacio');</script>"; 
    }else{
    
        $sql = "SELECT * FROM usuarios WHERE usuarios_usuario = '$u' AND usuarios_contra = '$c'";

      
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            $filas = mysqli_num_rows($consulta);

            
            if($filas == 0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            }else{
                header('location:lista.php?'); 
                    session_start();

    $idpersona=$_POST['datos_id'];

    $_SESSION['consulta']=$idpersona;

    echo $idpersona;
            }

        }
    }
}

?>

