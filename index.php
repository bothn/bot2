<?php

  
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  



  foreach ($weather as $pc) { 
    
    $a[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["SUCCESS"].'}'      ;
    $b[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["INTENTOS"].'}'      ;
 
}
 
 
$chartConfig = '{"width":900,"height":200, "chart":{
  "type": "line",
 
  "data": {
    "datasets": [
 {
        "label": "Intentos",

              "borderWidth": 1,
      "pointRadius": 0,
        "fill": "start",
        "data": [
'. implode(',', $b).'
        ]
      } , {
        "label": "Exitosos",

              "borderWidth": 1,
      "pointRadius": 0,
        "fill": false,
        "data": [
'. implode(',', $a).'
        ]
      }      

    ] },
  "options": {    
 
    "scales": {
      "xAxes": [{
        "type": "time",
        "time": {"unitStepSize": 1,"unit":"minute",
          "parser": "MM/DD/YYYY HH:mm",
          "displayFormats": {
            "day": "MMM DD YYYY"
          }
        }
      }]
    }
  }
}}';
 $post_data = json_encode($chartConfig, JSON_UNESCAPED_SLASHES);
 $title='?title="Activaciones por minuto"';
 $ch = curl_init('https://quickchart.io/chart/create');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $chartConfig );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
$response = curl_exec($ch);
$xc=print_r($response);
  

$httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE); 
 ECHO $xc["url"];
?> 
