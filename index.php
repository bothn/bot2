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
}';

 $variable = 'https://quickchart.io/chart?w=500&h=300&c='.urlencode($chartConfig);
 
 
?> 
