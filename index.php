<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  
 
  foreach ($weather as $pc) { 
    $a[]= $pc["FECHA_HXH"]     ;
    $b[]= $pc["SUCCESS"]     ;
 
}
 $fecha= '['.implode(",", $a).']';
 $exitosas= '['.implode(",", $b).']';

$chartConfig = '{
  "type": "line",
  "data": {
    "labels":'.$fecha .',
    "datasets": [{
      "label": "Users",
      "data": '.$exitosas .'
    }]
  } , 
    "options": {
    "scales": {
      "xAxes": [{
        "type": "time",
        "time": {"displayFormats": { "minute": "YYYY-MM DD HH:MI","hour": "YYYY-MM DD HH:MI"  }   },
         
      }]
    }
  } 
            
            
   
  
}';
echo $chartUrl = 'https://quickchart.io/chart?w=500&h=300&c=' . urlencode($chartConfig);

?> 
