<?php
$path="https://api.telegram.org/bot2069143370:AAGiUdwcQETanfLBHtZ32S621Hpqwp8sT8E";
$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["2069143370"];
$message = $update["message"]["text"];

 if (strpos($message, '/n') === 0) {
 
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  



  foreach ($weather as $pc) { 
    
    $a[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["SUCCESS"].'}'      ;
    $b[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["INTENTOS"].'}'      ;
 
}
 
 
$chartConfig = '{"width":900,"height":250, "chart":{
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
     "title": {
      "display": true,
      "text": "Activaciones prepago"
    },
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
  
$grafica = json_decode($response);
  $xc=$grafica->url;
$currentsr = json_decode(file_get_contents ("http://190.4.63.192/reportes/bot/activaciones/Successrate.php"),true);
  foreach ($currentsr as $dc) { 
    $Su=$dc["SR"];
 
}
 $test=urlencode("<b><pre>Activaciones prepago</pre></b>").urlencode("\n").
  urlencode("<pre>Current Success Rate(%): "  .$Su."%</pre>").urlencode("\n");
 



file_get_contents($path."/sendPhoto?chat_id=-599009724&photo=".$xc."&caption=".$test.'&parse_mode=html' );
 
  
  
  
  
  
   }
 
?> 
