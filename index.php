<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  
 
  foreach ($weather as $pc) { 
    $a[]= $pc["FECHA_HXH"]     ;
    $b[]= $pc["SUCCESS"]     ;
 
}
 $fecha= implode(",", $a);
 $exitosas= implode(",", $b);

$chartConfig = '{
  "type": "line",
  "data": {
    "labels":'. $fecha.',
    "datasets": [{
      "label": "Users",
      "data": '.$exitosas.'
    }]
  },"options" : {
 
 
 
	scales: {
		type: 'time',
		xAxes: [  {
            type: 'time', 
			time: {
                displayFormats: {
					'millisecond': 'YYYY-MM DD HH',
					'second': 'YYYY-MM DD HH',
					'minute': 'YYYY-MM DD HH',
					'hour': 'YYYY-MM DD HH',
					'day': 'YYYY-MM DD HH',
					'week': 'YYYY-MM DD HH',
					'month': 'YYYY-MM DD HH',
					'quarter': 'YYYY-MM DD HH',
					'year': 'YYYY-MM DD HH',
								 }
                    
                } 
            }] 
			  
	}

	
	}
  
}';

echo $chartUrl = 'https://quickchart.io/chart?w=500&h=300&c=' . urlencode($chartConfig);
?>
