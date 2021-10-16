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
    "labels": $final_key,
    "datasets": [{
      "label": "Users",
      "data": [' . implode(',', $b) . ']
    }]
  },
  "options": {
    "title": {
      "text": "Chart.js Time Scale"
    },
    "scales": {
      "xAxes": [{
        "type": "time",
        "time": {
          "parser": "MM/DD/YYYY HH:mm",
        },
        "scaleLabel": {
          "display": true,
          "labelString": "Date"
        }
      }],
      "yAxes": [{
        "scaleLabel": {
          "display": true,
          "labelString": "value"
        }
      }]
    }
  }
}';

 echo $chartConfig;
?> 
