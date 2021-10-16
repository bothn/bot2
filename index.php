<?php
$pc = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
 
$data = $pc["SUCCESS"];
foreach ($weather as $pc) { 
    $FECHA_HXH= $pc["FECHA_HXH"]." ";
    $INTENTOS= $pc["INTENTOS"]." ";
    $SUCCESS= $pc["SUCCESS"]." ";
 
}

$chartConfig = '{
  "type": "bar",
  "data": {
    "labels": [2012, 2013, 2014, 2015, 2016],
    "datasets": [{
      "label": "Users",
      "data": [' . implode(',', $data) . ']
    }]
  }
}';
echo $chartConfig;
echo $chartUrl = 'https://quickchart.io/chart?w=500&h=300&c=' . urlencode($chartConfig);
?>
