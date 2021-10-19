<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  


  foreach ($weather as $pc) { 
    
    $a[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["SUCCESS"].'}'      ;
    $b[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["INTENTOS"].'}'      ;
 
}
 
 
$chartConfig = '{"width":700,"height":700 "chart":{
  "type": "line",
 
  "data": {
 
    "datasets": [
 
 
 {
        "label": "Dataset2",

              "borderWidth": 0,
      "pointRadius": 0,
        "fill": false,
        "data": [
'. implode(',', $b).'
        ]
      } , {
        "label": "Dataset",

              "borderWidth": 0,
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
        "time": {
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
 
 $ch = curl_init('https://quickchart.io/chart/create');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $chartConfig );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
$response = curl_exec($ch);
print_r($response);
 
echo $chartConfig ;
?> 
