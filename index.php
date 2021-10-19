<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  


  foreach ($weather as $pc) { 
    
    $a[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["SUCCESS"].'}'      ;
    $b[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["INTENTOS"].'}'      ;
 
}
 
 
$chartConfig = '{
  "type": "line",
  "data": {
    "datasets": [
      {
        "label": "Time series example",
        "fill": false,
        "data": ['.implode(',', $b).'
 
        ]
      }
    ]
  },  "options": {
    "scales": {
      "xAxes":[{
  "type": "time",
  "time": {
    "format": "HH:mm",
    "unit": "hour",
    "unitStepSize": 1,
    "displayFormats": {
      "minute": "HH:mm", 
      "hour": "HH:mm", 
      "min": "00:00",
      "max": "23:59"
    },
}}],
    },
  }
}';
 $post_data = json_encode($chartConfig, JSON_UNESCAPED_SLASHES);
 
 $ch = curl_init('https://quickchart.io/chart/create');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
$response = curl_exec($ch);
print_r($response);
 
echo $chartConfig ;
?> 
