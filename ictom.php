<?php

DEFINE("DB_HOST", 'sql.freedb.tech');
DEFINE("DB_USER", 'freedb_srvsusehn1');
DEFINE("DB_PASS", '*J*eskg%*6sSfcB');
DEFINE("DB_NAME", 'freedb_cellhn');
// Create connection
$conn_taoli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Set charset to UFT8

 
 

 

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
 
?>

 
