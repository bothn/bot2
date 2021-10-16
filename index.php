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
    "labels": [' . implode(',', $a) . '],
    "datasets": [{
      "label": "Users",
      "data": [' . implode(',', $b) . ']
    }]
  }  ,   "options": {
      "scales": {
        "xAxes": [{
          "type": "time"
        }]
      } , legend: false
    }
}';

 echo 'https://quickchart.io/chart?w=500&h=300&c=' . $chartConfig;
?> 
