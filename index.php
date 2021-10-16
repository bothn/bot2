<?php
$pc = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
 
 
 echo implode(", ", array_map(function($obj) { foreach ($obj as $p => $v) { return $p;} }, $pc));
echo $chartUrl = 'https://quickchart.io/chart?w=500&h=300&c=' . urlencode($chartConfig);
?>
