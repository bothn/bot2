<?php

DEFINE("DB_HOST", 'sql.freedb.tech');
DEFINE("DB_USER", 'freedb_srvsusehn1');
DEFINE("DB_PASS", '*J*eskg%*6sSfcB');
DEFINE("DB_NAME", 'freedb_cellhn');
// Create connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Set charset to UFT8
mysqli_set_charset($con, "utf8");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
