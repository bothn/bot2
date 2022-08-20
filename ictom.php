<?php
// nos  conectamos a ejemplo.com y al puerto 3307
$enlace = mysql_connect('sql.freedb.tech:3306',  'freedb_srvsusehn1', '*J*eskg%*6sSfcB');
if  (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
 
?>
