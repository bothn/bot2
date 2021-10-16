<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  


  foreach ($weather as $pc) { 
    $a[]= $pc["FECHA_HXH"]     ;
    $b[]= $pc["SUCCESS"]     ;
 
}
 
$final_key = '['.implode(",", $a).']';

$chartConfig = ' {
  "type": "line",
  "data": {
    "labels": [
      new Date("' . implode(',', $a) . '")
    ],
    "datasets": [
      {
        "label": "My First dataset",
        "backgroundColor": "rgba(255, 99, 132, 0.5)",
        "borderColor": "rgb(255, 99, 132)",
        "fill": false,
        "data": [
          38,
          -19,
          35,
          -2,
          77,
          78,
          -93
        ]
      },
      {
        "label": "My Second dataset",
        "backgroundColor": "rgba(54, 162, 235, 0.5)",
        "borderColor": "rgb(54, 162, 235)",
        "fill": false,
        "data": [
          18,
          -7,
          49,
          86,
          63,
          -92,
          -35
        ]
      },
      {
        "label": "Dataset with point data",
        "backgroundColor": "rgba(75, 192, 192, 0.5)",
        "borderColor": "rgb(75, 192, 192)",
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

 echo 'https://quickchart.io/chart?w=500&h=300&c=' . $chartConfig;
?> 
