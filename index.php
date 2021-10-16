<?php
$pc = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
let labels = result.map(e => e.FECHA_HXH);
let data = result.map(e => e.SUCCESS);

foreach ($weather as $pc) { 
    $FECHA_HXH= $pc["FECHA_HXH"]." ";
    $INTENTOS= $pc["INTENTOS"]." ";
    $SUCCESS= $pc["SUCCESS"]." ";
 
}

$chartConfigArr = array(
  "type": "bar",
  "data": {
    "labels": labels,
    "datasets": [{
      "label": "Users",
      "data": data
    }]
  }
);
$chartConfig = json_encode($chartConfigArr);
echo $chartConfig;
echo $chartUrl = 'https://quickchart.io/chart?w=500&h=300&c=' . urlencode($chartConfig);
?>
