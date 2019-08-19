<?php
require '../conexion/conexion.php';
session_start();
$usuario = $_SESSION['usuario'];
echo "<h1>BIENVENIDO $usuario</h1>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estiloTablaHorario.css">
    
</head>
<body>
<center>


<form action="../conexion/insertarTabla.php" method="POST">
<div class="Tabla">
<div class="Lunes">
    <h1>Lunes</h1>
    <input type="checkbox" id ="1"  name="1"  value="1">07:00 - 07:54<br>
    <input type="checkbox" id ="2"  name="2"  value="2">07:54 - 08:50<br>
    <input type="checkbox" id ="3"  name="3"  value="3">08:50 - 09:45<br>
    <input type="checkbox" id ="4"  name="4"  value="4">09:45 - 10:40<br>
    <input type="checkbox" id ="5"  name="5"  value="5">11:10 - 12:05<br>
    <input type="checkbox" id ="6"  name="6"  value="6">12:05 - 12:59<br>
    <input type="checkbox" id ="7"  name="7"  value="7">01:00 - 01:54<br>
    <input type="checkbox" id ="8"  name="8"  value="8">02:00 - 02:55<br>
    <input type="checkbox" id ="9"  name="9"  value="9">02:55 - 3:45<br>
    <input type="checkbox" id ="10"  name="10"  value="10">03:50 - 04:45<br>
    <input type="checkbox" id ="11"  name="11"  value="11">04:50 - 05:40<br>
    <input type="checkbox" id ="12"  name="12"  value="12">06:10 - 06:54<br>
    <input type="checkbox" id ="13"  name="13"  value="13">07:00 - 07:54<br>
    <input type="checkbox" id ="14"  name="14"  value="14">07:55 - 08:55<br>
</div>

<div class="Martes">
    <h1>Martes</h1>
    <input type="checkbox" id ="15"  name="15"  value="15">07:00 - 07:54<br>
    <input type="checkbox" id ="16"  name="16"  value="16">07:54 - 08:50<br>
    <input type="checkbox" id ="17"  name="17"  value="17">08:50 - 09:45<br>
    <input type="checkbox" id ="18"  name="18"  value="18">09:45 - 10:40<br>
    <input type="checkbox" id ="19"  name="19"  value="19">11:10 - 12:05<br>
    <input type="checkbox" id ="20"  name="20"  value="20">12:05 - 12:59<br>
    <input type="checkbox" id ="21"  name="21"  value="21">01:00 - 01:54<br>
    <input type="checkbox" id ="22"  name="22"  value="22">02:00 - 02:55<br>
    <input type="checkbox" id ="23"  name="23"  value="23">02:55 - 3:45<br>
    <input type="checkbox" id ="24"  name="24"  value="24">03:50 - 04:45<br>
    <input type="checkbox" id ="25"  name="25"  value="25">04:50 - 05:40<br>
    <input type="checkbox" id ="26"  name="26"  value="26">06:10 - 06:54<br>
    <input type="checkbox" id ="27"  name="27"  value="27">07:00 - 07:54<br>
    <input type="checkbox" id ="28"  name="28"  value="28">07:55 - 08:55<br>
</div>

<div class="Miercoles">
    <h1>Miercoles</h1>
    <input type="checkbox" id ="29"  name="29"   value="29">07:00 - 07:54<br>
    <input type="checkbox" id ="30"  name="30"   value="30">07:54 - 08:50<br>
    <input type="checkbox" id ="31"  name="31"   value="31">08:50 - 09:45<br>
    <input type="checkbox" id ="32"  name="32"   value="32">09:45 - 10:40<br>
    <input type="checkbox" id ="33"  name="33"   value="33">11:10 - 12:05<br>
    <input type="checkbox" id ="34"  name="34"   value="34">12:05 - 12:59<br>
    <input type="checkbox" id ="35"  name="35"   value="35">01:00 - 01:54<br>
    <input type="checkbox" id ="36"  name="36"   value="36">02:00 - 02:55<br>
    <input type="checkbox" id ="37"  name="37"   value="37">02:55 - 3:45<br>
    <input type="checkbox" id ="38"  name="38"   value="38">03:50 - 04:45<br>
    <input type="checkbox" id ="39"  name="39"   value="39" >04:50 - 05:40<br>
    <input type="checkbox" id ="40"  name="40"   value="40">06:10 - 06:54<br>
    <input type="checkbox" id ="41"  name="41"   value="41">07:00 - 07:54<br>
    <input type="checkbox" id ="42"  name="42"   value="42">07:55 - 08:55<br>
</div>

<div class="Jueves">
    <h1>Jueves</h1>
    <input type="checkbox" id ="43"  name="43"  value="43">07:00 - 07:54<br>
    <input type="checkbox" id ="44"  name="44"  value="44">07:54 - 08:50<br>
    <input type="checkbox" id ="45"  name="45"  value="45">08:50 - 09:45<br>
    <input type="checkbox" id ="46"  name="46"  value="46">09:45 - 10:40<br>
    <input type="checkbox" id ="47"  name="47"  value="47">11:10 - 12:05<br>
    <input type="checkbox" id ="48"  name="48"  value="48">12:05 - 12:59<br>
    <input type="checkbox" id ="49"  name="49"  value="49">01:00 - 01:54<br>
    <input type="checkbox" id ="50"  name="50"  value="50">02:00 - 02:55<br>
    <input type="checkbox" id ="51"  name="51"  value="51">02:55 - 3:45<br>
    <input type="checkbox" id ="52"  name="52"  value="52">03:50 - 04:45<br>
    <input type="checkbox" id ="53"  name="53"  value="53">04:50 - 05:40<br>
    <input type="checkbox" id ="54"  name="54"  value="54">06:10 - 06:54<br>
    <input type="checkbox" id ="55"  name="55"  value="55">07:00 - 07:54<br>
    <input type="checkbox" id ="56"  name="56"  value="56">07:55 - 08:55<br>
</div>
    
<div class="Viernes">
    <h1>Viernes</h1>
    <input type="checkbox" id ="57"  name="57"  value="57">07:00 - 07:54<br>
    <input type="checkbox" id ="58"  name="58"  value="58">07:54 - 08:50<br>
    <input type="checkbox" id ="59"  name="59"  value="59">08:50 - 09:45<br>
    <input type="checkbox" id ="60"  name="60"  value="60">09:45 - 10:40<br>
    <input type="checkbox" id ="61"  name="61"  value="61">11:10 - 12:05<br>
    <input type="checkbox" id ="62"  name="62"  value="62">12:05 - 12:59<br>
    <input type="checkbox" id ="63"  name="63"  value="63">01:00 - 01:54<br>
    <input type="checkbox" id ="64"  name="64"  value="64">02:00 - 02:55<br>
    <input type="checkbox" id ="65"  name="65"  value="65">02:55 - 3:45<br>
    <input type="checkbox" id ="66"  name="66"  value="66">03:50 - 04:45<br>
    <input type="checkbox" id ="67"  name="67"  value="67">04:50 - 05:40<br>
    <input type="checkbox" id ="68"  name="68"  value="68">06:10 - 06:54<br>
    <input type="checkbox" id ="69"  name="69"  value="69">07:00 - 07:54<br>
    <input type="checkbox" id ="70"  name="70"  value="70">07:55 - 08:55<br>
</div>
</div>
    
<input type="submit" class="logbtn" value="Entrar">
</form>
</center>   
<script src="../js/jbotones.js"></script>
</body>
</html>