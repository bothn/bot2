<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  


  foreach ($weather as $pc) { 
    $a[]= $pc["FECHA_HXH"]     ;
    $b[]= $pc["SUCCESS"]     ;
 
}
 
 
$chartConfig = '{"chart": {
  "type": "line",
  "data": {
     "labels": ["' . implode('","', $a) . '"],
    "datasets": [{
        "label": "Time series example",
        "fill": false,
        "data": ["' . implode('","', $b) . '"]  ,
    }]
  }  
}}';

$post_data = json_encode($chartConfig, JSON_UNESCAPED_SLASHES);
 
 $test='{"chart": {"type": "bar", "data": {"labels": ["Hello", "World"], "datasets": [{"label": "Foo", "data": ["1", "2"]}]}}}';
$ch = curl_init('https://quickchart.io/chart/create');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $chartConfig);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
$response = curl_exec($ch);
print_r($response);

echo 'https://quickchart.io/chart?w=500&h=300&c='.$chartConfig ;
?> 
