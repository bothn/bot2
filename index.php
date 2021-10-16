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
    "datasets": [
      {
        "label": "Time series example",
        "fill": false,
        "data": [
          {
            "x": "06/14/2020 09:08",
            "y": -29
          },
          {
            "x": "06/19/2020 09:08",
            "y": -34
          },
          {
            "x": "06/21/2020 09:08",
            "y": -62
          },
          {
            "x": "06/29/2020 09:08",
            "y": 1
          }
        ]
      }
    ]
  },
  "options": {
    "scales": {
      "xAxes": [{
        "type": "time",
        "time": {
          "parser": "MM/DD/YYYY HH:mi",
          "displayFormats": {
            "hour": "MM/DD/YYYY HH"
          }
        }
      }]
    }
  }
}';

 echo 'https://quickchart.io/chart?w=500&h=300&c=' . $chartConfig;
?> 
