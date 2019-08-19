<?php

session_start();
$usuario = $_SESSION['usuario'];
echo "<h1>BIENVENIDO $usuario</h1>";


//lunes
$l1 = $_POST['1'];
$l2 = $_POST['2'];
$l3 = $_POST['3'];
$l4 = $_POST['4'];
$l5 = $_POST['5'];
$l6 = $_POST['6'];
$l7 = $_POST['7'];
$l8 = $_POST['8'];
$l9 = $_POST['9'];
$l10 = $_POST['10'];
$l11 = $_POST['11'];
$l12 = $_POST['12'];
$l13 = $_POST['13'];
$l14 = $_POST['14'];
//Martes
$M1 = $_POST['15'];
$M2 = $_POST['16'];
$M3 = $_POST['17'];
$M4 = $_POST['18'];
$M5 = $_POST['19'];
$M6 = $_POST['20'];
$M7 = $_POST['21'];
$M8 = $_POST['22'];
$M9 = $_POST['23'];
$M10 = $_POST['24'];
$M11 = $_POST['25'];
$M12 = $_POST['26'];
$M13 = $_POST['27'];
$M14 = $_POST['28'];
//Miercoles
$Mi1 = $_POST['29'];
$Mi2 = $_POST['30'];
$Mi3 = $_POST['31'];
$Mi4 = $_POST['32'];
$Mi5 = $_POST['33'];
$Mi6 = $_POST['34'];
$Mi7 = $_POST['35'];
$Mi8 = $_POST['36'];
$Mi9 = $_POST['37'];
$Mi10 = $_POST['38'];
$Mi11 = $_POST['39'];
$Mi12 = $_POST['40'];
$Mi13 = $_POST['41'];
$Mi14 = $_POST['42'];
//Jueves
$J1 = $_POST['43'];
$J2 = $_POST['44'];
$J3 = $_POST['45'];
$J4 = $_POST['46'];
$J5 = $_POST['47'];
$J6 = $_POST['48'];
$J7 = $_POST['49'];
$J8 = $_POST['50'];
$J9 = $_POST['51'];
$J10 = $_POST['52'];
$J11 = $_POST['53'];
$J12 = $_POST['54'];
$J13 = $_POST['55'];
$J14 = $_POST['56'];
//Viernes
$V1 = $_POST['57'];
$V2 = $_POST['58'];
$V3 = $_POST['59'];
$V4 = $_POST['60'];
$V5 = $_POST['61'];
$V6 = $_POST['62'];
$V7 = $_POST['63'];
$V8 = $_POST['64'];
$V9 = $_POST['65'];
$V10 = $_POST['66'];
$V11 = $_POST['67'];
$V12 = $_POST['68'];
$V13 = $_POST['68'];
$V14 = $_POST['69'];


//Lunes
if (isset($_POST["1"]) && $_POST["1"] == 1){
    $l1 = "07:00-07:54";
}else
{
    $l1 = "";
}

if (isset($_POST["2"]) && $_POST["2"] == 2){
    $l2 = "07:54-08:50";
}else
{
    $l2 = "";
}

if (isset($_POST["3"]) && $_POST["3"] == 3){
    $l3 = "08:50-09:45";
}else
{
    $l3 = "";
}

if (isset($_POST["4"]) && $_POST["4"] == 4){
    $l4 = "09:45 - 10:40";
}else
{
    $l4 = "";
}

if (isset($_POST["5"]) && $_POST["5"] == 5){
    $l5 = "11:10 - 12:05";
}else
{
    $l5 = "";
}

if (isset($_POST["6"]) && $_POST["6"] == 6){
    $l6 = "12:05 - 12:59";
}else
{
    $l6 = "";
}

if (isset($_POST["7"]) && $_POST["7"] == 7){
    $l7 = "01:00 - 01:54";
}else
{
    $l7 = "";
}

if (isset($_POST["8"]) && $_POST["8"] == 8){
    $l8 = "02:00 - 02:55";
}else
{
    $l8 = "";
}

if (isset($_POST["9"]) && $_POST["9"] == 9){
    $l9 = "02:55 - 3:45";
}else
{
    $l9 = "";
}if (isset($_POST["10"]) && $_POST["10"] == 10){
    $l10 = "03:50 - 04:45";
}else
{
    $l10 = "";
}

if (isset($_POST["11"]) && $_POST["11"] == 11){
    $l11 = "04:50 - 05:40";
}else
{
    $l11 = "";
}

if (isset($_POST["12"]) && $_POST["12"] == 12){
    $l12 = "06:10 - 06:54";
}else
{
    $l12 = "";
}if (isset($_POST["13"]) && $_POST["13"] == 13){
    $l13 = "07:00 - 07:54";
}else
{
    $l13 = "";
}

if (isset($_POST["14"]) && $_POST["14"] == 14){
    $l14 = "07:55 - 08:55";
}else
{
    $l14 = "";
}


//Martes
if (isset($_POST["15"]) && $_POST["15"] == 15){
    $M1 = "07:00-07:54";
}else
{
    $M1 = "";
}

if (isset($_POST["16"]) && $_POST["16"] == 16){
    $M2 = "07:54-08:50";
}else
{
    $M2 = "";
}

if (isset($_POST["17"]) && $_POST["17"] == 17){
    $M3 = "08:50-09:45";
}else
{
    $M3 = "";
}

if (isset($_POST["18"]) && $_POST["18"] == 18){
    $M4 = "09:45 - 10:40";
}else
{
    $M4 = "";
}

if (isset($_POST["19"]) && $_POST["19"] == 19){
    $M5 = "11:10 - 12:05";
}else
{
    $M5 = "";
}

if (isset($_POST["20"]) && $_POST["20"] == 20){
    $M6 = "12:05 - 12:59";
}else
{
    $M6 = "";
}

if (isset($_POST["21"]) && $_POST["21"] == 21){
    $M7 = "01:00 - 01:54";
}else
{
    $M7 = "";
}

if (isset($_POST["22"]) && $_POST["22"] == 22){
    $M8 = "02:00 - 02:55";
}else
{
    $M8 = "";
}

if (isset($_POST["23"]) && $_POST["23"] == 23){
    $M9 = "02:55 - 3:45";
}else
{
    $M9 = "";
}if (isset($_POST["24"]) && $_POST["24"] == 24){
    $M10 = "03:50 - 04:45";
}else
{
    $M10 = "";
}

if (isset($_POST["25"]) && $_POST["25"] == 25){
    $M11 = "04:50 - 05:40";
}else
{
    $M11 = "";
}

if (isset($_POST["26"]) && $_POST["26"] == 26){
    $M12 = "06:10 - 06:54";
}else
{
    $M12 = "";
}if (isset($_POST["27"]) && $_POST["27"] == 27){
    $M13 = "07:00 - 07:54";
}else
{
    $M13 = "";
}

if (isset($_POST["28"]) && $_POST["28"] == 28){
    $M14 = "07:55 - 08:55";
}else
{
    $M14 = "";
}


//Miercoles
if (isset($_POST["29"]) && $_POST["29"] == 29){
    $Mi1 = "07:00-07:54";
}else
{
    $Mi1 = "";
}

if (isset($_POST["30"]) && $_POST["30"] == 30){
    $Mi2 = "07:54-08:50";
}else
{
    $Mi2 = "";
}

if (isset($_POST["31"]) && $_POST["31"] == 31){
    $Mi3 = "08:50-09:45";
}else
{
    $Mi3 = "";
}

if (isset($_POST["32"]) && $_POST["32"] == 32){
    $Mi4 = "09:45 - 10:40";
}else
{
    $Mi4 = "";
}

if (isset($_POST["33"]) && $_POST["33"] == 33){
    $Mi5 = "11:10 - 12:05";
}else
{
    $Mi5 = "";
}

if (isset($_POST["34"]) && $_POST["34"] == 34){
    $Mi6 = "12:05 - 12:59";
}else
{
    $Mi6 = "";
}

if (isset($_POST["35"]) && $_POST["35"] == 35){
    $Mi7 = "01:00 - 01:54";
}else
{
    $Mi7 = "";
}

if (isset($_POST["36"]) && $_POST["36"] == 36){
    $Mi8 = "02:00 - 02:55";
}else
{
    $Mi8 = "";
}

if (isset($_POST["37"]) && $_POST["37"] == 37){
    $Mi9 = "02:55 - 3:45";
}else
{
    $Mi9 = "";
}if (isset($_POST["38"]) && $_POST["38"] == 39){
    $Mi10 = "03:50 - 04:45";
}else
{
    $Mi10 = "";
}

if (isset($_POST["39"]) && $_POST["39"] == 39){
    $Mi11 = "04:50 - 05:40";
}else
{
    $Mi11 = "";
}

if (isset($_POST["40"]) && $_POST["40"] == 40){
    $Mi12 = "06:10 - 06:54";
}else
{
    $Mi12 = "";
}if (isset($_POST["40"]) && $_POST["40"] == 40){
    $Mi13 = "07:00 - 07:54";
}else
{
    $Mi13 = "";
}

if (isset($_POST["41"]) && $_POST["41"] == 41){
    $Mi14 = "07:55 - 08:55";
}else
{
    $Mi14 = "";
}


//Jueves
if (isset($_POST["42"]) && $_POST["42"] == 42){
    $J1 = "07:00-07:54";
}else
{
    $J1 = "";
}

if (isset($_POST["43"]) && $_POST["43"] == 43){
    $J2 = "07:54-08:50";
}else
{
    $J2 = "";
}

if (isset($_POST["44"]) && $_POST["44"] == 44){
    $J3 = "08:50-09:45";
}else
{
    $J3 = "";
}

if (isset($_POST["45"]) && $_POST["45"] == 45){
    $J4 = "09:45 - 10:40";
}else
{
    $J4 = "";
}

if (isset($_POST["46"]) && $_POST["46"] == 46){
    $J5 = "11:10 - 12:05";
}else
{
    $J5 = "";
}

if (isset($_POST["47"]) && $_POST["47"] == 47){
    $J6 = "12:05 - 12:59";
}else
{
    $J6 = "";
}

if (isset($_POST["48"]) && $_POST["48"] == 48){
    $J7 = "01:00 - 01:54";
}else
{
    $J7 = "";
}

if (isset($_POST["49"]) && $_POST["49"] == 49){
    $J8 = "02:00 - 02:55";
}else
{
    $J8 = "";
}

if (isset($_POST["50"]) && $_POST["50"] == 50){
    $J9 = "02:55 - 3:45";
}else
{
    $J9 = "";
}if (isset($_POST["51"]) && $_POST["51"] == 51){
    $J10 = "03:50 - 04:45";
}else
{
    $J10 = "";
}

if (isset($_POST["52"]) && $_POST["52"] == 52){
    $J11 = "04:50 - 05:40";
}else
{
    $J11 = "";
}

if (isset($_POST["53"]) && $_POST["53"] == 53){
    $J12 = "06:10 - 06:54";
}else
{
    $J12 = "";
}if (isset($_POST["54"]) && $_POST["54"] == 54){
    $J13 = "07:00 - 07:54";
}else
{
    $J13 = "";
}

if (isset($_POST["55"]) && $_POST["55"] == 55){
    $J14 = "07:55 - 08:55";
}else
{
    $J14 = "";
}



$datosLunes = array(
    'id' => '1',
    'hora' => $l1."__".$l2."__".$l3."__".$l4."__".$l5."__".$l6."__".$l7."__".$l8."__".$l9."__".$l10."__".$l11."__".$l12."__".$l13."__".$l14
);

$datosMartes = array(
    'id' => '2',
    'hora' => $M1."__".$M2."__".$M3."__".$M4."__".$M5."__".$M6."__".$M7."__".$M8."__".$M9."__".$M10."__".$M11."__".$M12."__".$M13."__".$M14
);

$datosMiercoles = array(
    'id' => '3',
    'hora' => $Mi1."__".$Mi2."__".$Mi3."__".$Mi4."__".$Mi5."__".$Mi6."__".$Mi7."__".$Mi8."__".$Mi9."__".$Mi10."__".$Mi11."__".$Mi12."__".$Mi13."__".$Mi14
);

$datosJueves = array(
    'id' => '4',
    'hora' => $J1."__".$J2."__".$J3."__".$J4."__".$J5."__".$J6."__".$J7."__".$J8."__".$J9."__".$J10."__".$J11."__".$J12."__".$J13."__".$J14
);

$datosViernes = array(
    'id' => '5',
    'hora' => $V1."__".$V2."__".$V3."__".$V4."__".$V5."__".$V6."__".$V7."__".$V8."__".$V9."__".$V10."__".$V11."__".$V12."__".$V13."__".$V14
);



foreach($datosLunes as $key => $value){  
      $k[]=$key;
      $v[]="'".$value."'";
}

$k = implode(",",$k);
$v = implode(",",$v);
$conn = mysqli_connect("localhost","root","","pwj");
$sql = "INSERT INTO hora ($k) VALUES ($v)";
$exe = mysqli_query($conn,$sql);

//Martes


//Miercoles


//Jueves


//Viernes
?>