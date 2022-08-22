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
	
 
 
 $alarma="asdas";
 $site="asdasd";
 $sitename2="dfsdf"
 $lat="";
 $lon="";
 $tec="";
 $fei="";
 $tiempo="12";
 $today="";
 $terr="";
 $sitename="";
 $mor="";
 $id="";
 $desc="";
  
 

 
	$main_taoli1="INSERT INTO markers(alarma,name,address,lat,lng,type,hora_oos,tiempo,fecha_insert,territorio,ne_sitename,morfo,tt,avance) VALUES ('$alarma','$site','$sitename2','$lat','$lon','$tec','$fei','$tiempo','$today','$terr','$sitename','$mor','$id','$desc')";
 
	
		 if (mysqli_query($conn_taoli, $main_taoli1)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $main_taoli1 . "
" . mysqli_error($conn_taoli);
	 }
	 

 ?>
