<?php
 
//$FA_TT = fopen($URL_K,"r");



$conn_taoli=mysql_connect("sql300.epizy.com","epiz_32418681","7sz0r5nk");
mysql_select_db("epiz_32418681_cehn",$conn_taoli);

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

 
//$FA_TT = fopen($URL_K,"r");
 
//$FA_TT = fopen($URL_K,"r");

 
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
	
$main_taoli=mysql_query("select * FROM markers WHERE tt='".$id."'",$conn_taoli);
$row_main_taoli_result=mysql_fetch_assoc($main_taoli);
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
	$main_taoli="INSERT INTO markers(alarma,name,address,lat,lng,type,hora_oos,tiempo,fecha_insert,territorio,ne_sitename,morfo,tt,avance) VALUES ('$alarma','$site','$sitename2','$lat','$lon','$tec','$fei','$tiempo','$today','$terr','$sitename','$mor','$id','$desc')";
	mysql_query($main_taoli,$conn_taoli) or die(mysql_error());
	//$main_ra="INSERT INTO ra2 (ne_site,men_taoli_fecha,men_taoli_horai,tt) VALUES ('$site','$fera','$hoira','$id')";
	//mysql_query($main_ra,$conn_ra) or die(mysql_error());
	 	//$FA_TT = fopen($URL_K,"r");
	
	
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
		
	$main_taoli="UPDATE markers SET fecha_avance='$fecha',tiempo='$tiempo',avance='$desc', alarma='$alarma' WHERE tt = '$id'";
	
	mysql_query($main_taoli,$conn_taoli) or die(mysql_error());
	
}else if ($tt!="" && $operacion == "SDMCIERRE"){
		
	$main_taoli="DELETE FROM markers WHERE tt = '$id'";
	mysql_query($main_taoli,$conn_taoli) or die(mysql_error());
	$hofra=date('H');
	//$main_ra="UPDATE ra2 SET men_taoli_horaf = '$hofra' )";
	//mysql_query($main_ra,$conn_ra) or die(mysql_error());
	 	//$FA_TT = fopen($URL_K,"r");
	
	
}


?>
