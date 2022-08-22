<?php

DEFINE("DB_HOST", 'sql.freedb.tech');
DEFINE("DB_USER", 'freedb_srvsusehn1');
DEFINE("DB_PASS", '*J*eskg%*6sSfcB');
DEFINE("DB_NAME", 'freedb_cellhn');
// Create connection
$conn_taoli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Set charset to UFT8
mysqli_set_charset($con, "utf8");
 
 

//$URL_K = "http://192.168.127.132:13013/sendsms?username=foo&password=bar&from=99999999&to=50495298662&text=textoprueba";
//$FA_TT = fopen($URL_K,"r");



//$conn_taoli=mysql_connect('sql.freedb.tech:3306','freedb_srvsusehn1','*J*eskg%*6sSfcB');
//mysql_select_db('freedb_srvsusehn1',$conn_taoli);

//$conn_ra=mysql_connect("192.168.127.180","root","nocadmin");
//mysql_select_db("celdas_oos",$conn_taoli);
						
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

//$URL_K = "http://192.168.127.132:13013/sendsms?username=foo&password=bar&from=99999999&to=50498710709&text=$Test";
//$FA_TT = fopen($URL_K,"r");

//$URL_K = "http://192.168.127.132:13013/sendsms?username=foo&password=bar&from=99999999&to=50494849727&text=$Test";
//$FA_TT = fopen($URL_K,"r");

//$URL_K = "http://192.168.127.132:13013/sendsms?username=foo&password=bar&from=99999999&to=50495298662&text=$Test";
//$FA_TT = fopen($URL_K,"r");





//$posicion3=strpos($texto,$buscar);
//$total=strlen($texto)-$posicion3;
//$texto=substr($texto, $posicion3,$total);

//echo $array[0];
//echo $array[1];
//echo $array[2];


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

 
