<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  


  foreach ($weather as $pc) { 
    $a[]= $pc["FECHA_HXH"]     ;
    $b[]= $pc["SUCCESS"]     ;
 
}
 
$final_key = '['.implode(",", $a).']';

$chartConfig = '{
  "type": "line",
  "data": {
     "labels": [00:30, 02:30, 09:00, 15:00, 22:00],
    "datasets": [
      {
        "label": "Time series example",
        "fill": false,
        "data": [22,33,44,66,77]
       
         
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

 echo 'https://quickchart.io/chart?w=500&h=300&c=' . $chartConfig;
?> 
