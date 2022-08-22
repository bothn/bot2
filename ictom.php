<?php

DEFINE("DB_HOST", 'sql.freedb.tech');
DEFINE("DB_USER", 'freedb_srvsusehn1');
DEFINE("DB_PASS", '*J*eskg%*6sSfcB');
DEFINE("DB_NAME", 'freedb_cellhn');
// Create connection
$conn_taoli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Set charset to UFT8
$conn_taoli -> set_charset("utf8");
date_default_timezone_set('America/Tegucigalpa');
$id=$_GET["ticket"];
$from=$_GET["from"];
$texto=$_GET["texto"];
$texto=str_replace(" ", "+",$texto);
$today = date('Y-m-d H:i:s');
$texto=str_replace("'", " ",$texto);
$tipo = $_GET["key"]; 
$texto_recibido=$texto;

$operacion=$tipo;
$operacion=strtoupper($operacion);


$texto=trim($texto);
$array=explode(" ",$texto);
$buscar=$array[0];

$Test= $texto.$tipo.$id;


$nombre_contacto="";
$mensaje_respuesta="";
$ne_sitename='';
$ne_site='';
$empresa_contacto='';
$nombre_contacto='';
$desicion_tyc='';
$desicion_ss='';
	
$main_taoli=$conn_taoli -> query("select * FROM markers WHERE tt='".$id."'");
$row_main_taoli_result=mysqli_fetch_assoc($main_taoli);
$tt=$row_main_taoli_result['tt'];



if ($tt=="" && $operacion == "SDMAPERTURA"){
	
	$buscar=trim($buscar);
	$array2=explode("*",$buscar);
	$site=$array2[0];
	$sitename=$array2[1];
	$sitename = str_replace("+", " ",$sitename);
	$lat=$array2[2];
	$lon=$array2[3];
	$tec=$array2[4];
	$mor=$array2[5];
	$fei=$array2[6];
	$fei = str_replace("+", " ",$fei);
	$fei=strtotime($fei);
	$desc=$array2[7];
	$desc = str_replace("+", " ",$desc);
	$tiempo = (strtotime($today)-$fei);
	//$terr = substr($sitename,strpos($sitename,"(")+1,2);
	$terr = $array2[8];
	//$halt = $array2[9];
	$sitename2="[".substr($sitename,0,strpos($sitename," "))."]";
	$fei = date('Y-m-d H:i:s',$fei);
	$alarma="CELDA FUERA DE SERVICIO";
	
	$fera= date('Ymd');
	$hoira = date('H');

	//if ($halt=="Yes"){
	//	$alarma= "CELDA EN ESTADO HALTED";
	//}else{
	//	$alarma="CELDA FUERA DE SERVICIO";
	//}
	$main_taoli1="INSERT INTO markers(alarma,name,address,lat,lng,type,hora_oos,tiempo,fecha_insert,territorio,ne_sitename,morfo,tt,avance) VALUES ('$alarma','$site','$sitename2','$lat','$lon','$tec','$fei','$tiempo','$today','$terr','$sitename','$mor','$id','$desc')";
//$conn_taoli -> query($main_taoli1) or die(mysql_error());
 mysqli_query($conn_taoli, $main_taoli1);
	
	
}else if($tt!="" && $operacion == "SDMAVANCE"){
	$buscar=trim($buscar);
	$array2=explode("*",$buscar);
	$fecha=$array2[0];
	$fecha = str_replace("+", " ",$fecha);
	$desc=$array2[1];
	$desc = str_replace("+", " ",$desc);
	$fei=$row_main_taoli_result['hora_oos'];
	
	///pendiente la hora del avance
	$fei=strtotime($fei);
	$tiempo = (strtotime($today) - $fei)/60/60;	
	///fin pendiente
	$halt = $array2[2];
	$alarma="CELDA FUERA DE SERVICIO";
	if ($halt=="Yes"){
		$alarma = "CELDA EN ESTADO HALTED";
	}else{
		$alarma = "CELDA FUERA DE SERVICIO";
	}
		
///	$main_taoli1="UPDATE markers SET fecha_avance='$fecha',tiempo='$tiempo',avance='$desc', alarma='$alarma' WHERE tt = '$id'";
	
	/// $conn_taoli -> query($main_taoli1) or die(mysql_error());
 
}else if ($tt!="" && $operacion == "SDMCIERRE"){
		
	$main_taoli1="DELETE FROM markers WHERE tt = '$id'";
	/// $conn_taoli -> query($main_taoli1) or die(mysql_error());
	$hofra=date('H');

	 
	
}

?>

 
