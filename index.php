<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  


  foreach ($weather as $pc) { 
    $a[]= $pc["FECHA_HXH"]     ;
    $b[]= $pc["SUCCESS"]     ;
 
}
 
 

$chartConfig = '{
  "type": "line",
  "data": {
     "labels": ["' . implode('","', $a) . '"],
    "datasets": [{
        "label": "Time series example",
        "fill": false,
        "data": ["' . implode('","', $b) . '"]  ,
    }]
  },  "options": {
    "scales": {
      "xAxes":[{
  "type": "time",
  "time": {
    "format": "HH:mm",
    "unit": "hour",
    "unitStepSize": 300,
    "displayFormats": {
      "minute": "HH:mm", 
      "hour": "HH:mm", 
      "min": "00:00",
      "max": "23:59"
    },
}}],
    },
  }
} ';

$post_data = json_encode($chartConfig, JSON_UNESCAPED_SLASHES);
 
 $test='{"chart": {"type": "bar", "data": {"labels": ["Hello", "World"], "datasets": [{"label": "Foo", "data": ["1", "2"]}]}}}';
$ch = curl_init('https://quickchart.io/chart/create');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
$response = curl_exec($ch);
print_r($response);

echo 'https://quickchart.io/chart?c='.$chartConfig;
?> 
