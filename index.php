<?php
$pc = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);

foreach ($weather as $pc) { 
    $FECHA_HXH= $pc["FECHA_HXH"]." ";
    $INTENTOS= $pc["INTENTOS"]." ";
    $SUCCESS= $pc["SUCCESS"]." ";
 
}

$chartConfig = '{
  "type": "bar",
  "data": {
    "labels": print_r($pc["FECHA_HXH"]),
    "datasets": [{
      "label": "Users",
      "data": print_r($pc["SUCCESS"])
    }]
  }
}';
$chartConfig = json_encode($chartConfigArr);
echo $chartConfig;
echo $chartUrl = 'https://quickchart.io/chart?w=500&h=300&c=' . urlencode($chartConfig);
?>
