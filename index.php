<!-- /*
include 'conexion/conexion.php';

session_start();
if(isset($_GET['cerrar_sesion'])){
    session_unset();
    session_destroy();
}

if(isset($_SESSION['rol'])){
   switch($_SESSION['rol']){
	 case 1:
         header('location: pages/PagAdmin.php');
	 break;

	 case 2:
	     header('location: pages/PagUsuario.php');
	 break;

	 default:	 
}
}
$conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
if(isset($_POST['usuario']) && isset($_POST['password'])){
	$username = $_POST['usuario'];
	$password = $_POST['password'];

$query =  ('SELECT * FROM usuarios WHERE usuario = :username AND password = :password');
$query->execute(['usuario' => $username, 'password' => $password]);
$row = $query->fetch(PDO::FETCH_NUM);

if($row == true){

}else{
	echo "No existe";
}
}


*/ -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilolog.css">
	<!-- Este script es para la animacion de usuario y contraseña -->
	<script src="js/jquey.js"></script>
</head>
<body>

<form action="conexion/logear.php" method="POST" class="login-from">
	
<img src="img/user-circle-solid.svg">

<div class="txtb">
	<input type="text" name="usuario">
	<span data-placeholder="Usuario"></span>
</div>

<div class="txtb">
	<input type="password" name="password">
	<span data-placeholder="Contraseña"></span>
</div>

<input type="submit" class="logbtn" value="Entrar">

<div class="bottom-text">
	¿Aun no tiene cuenta? <a href="pages/registroEmpleado.php">Registrar</a>
</div>

</form>

<script type="text/javascript" src="js/jslogin.js">
</script>
</body>
</html>