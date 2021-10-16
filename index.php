<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  
 
  foreach ($weather as $pc) { 
    $a[]= $pc["FECHA_HXH"]     ;
    $b[]= $pc["SUCCESS"]     ;
 
}
 $fecha= '['.implode(",", $a).']';
 $exitosas= '['.implode(",", $b).']';

 $dates= implode(',', $a);
 $ok= implode(",", $b);

$xc = $a;

$chartConfigArr = array(
  'type' => 'line',
  'data' => array(
    'labels' => $fecha,
    'datasets' => array(
      array(
        'label' => 'Users',
        'data' => array($ok),
      )
    )
  )
);
$chartConfig = json_encode($chartConfigArr);
 
echo 'https://quickchart.io/chart?w=500&h=300&c=' . urlencode($chartConfig);
?> 
