<?php
$weather  = json_decode(file_get_contents ("http://190.4.63.192/reportes/wcdma/reports_kpis_h/test3json.php"),true);
  


  foreach ($weather as $pc) { 
    
    $a[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["SUCCESS"].'}'      ;
    $b[]= '{"x":'.'"'.$pc["FECHA_HXH"].'",'.'"y":'.$pc["INTENTOS"].'}'      ;
 
}
 
 
$chartConfig = '{"chart":{
  "type": "line",
 
  "data": {
 
    "datasets": [
 
 
 {
        "label": "Dataset",
        "backgroundColor": "rgba(123, 22, 1, 0.5)",
        "borderColor": "rgb(75, 192, 192)",
        "fill": false,
        "data": [
{"x":"10/19/2021 01:41","y":0},{"x":"10/19/2021 01:43","y":0},{"x":"10/19/2021 01:45","y":0},{"x":"10/19/2021 01:47","y":0},{"x":"10/19/2021 05:30","y":1},{"x":"10/19/2021 05:32","y":1},{"x":"10/19/2021 05:33","y":0},{"x":"10/19/2021 05:35","y":1},{"x":"10/19/2021 05:36","y":0},{"x":"10/19/2021 05:37","y":1},{"x":"10/19/2021 05:40","y":1},{"x":"10/19/2021 05:41","y":1},{"x":"10/19/2021 05:42","y":0},{"x":"10/19/2021 05:53","y":1},{"x":"10/19/2021 05:54","y":0},{"x":"10/19/2021 05:56","y":1},{"x":"10/19/2021 05:57","y":0},{"x":"10/19/2021 06:00","y":1},{"x":"10/19/2021 06:01","y":1},{"x":"10/19/2021 06:02","y":0},{"x":"10/19/2021 06:11","y":1},{"x":"10/19/2021 06:21","y":2},{"x":"10/19/2021 06:22","y":0},{"x":"10/19/2021 06:27","y":1},{"x":"10/19/2021 06:29","y":3},{"x":"10/19/2021 06:30","y":1},{"x":"10/19/2021 06:31","y":0},{"x":"10/19/2021 06:32","y":1},{"x":"10/19/2021 06:33","y":1},{"x":"10/19/2021 06:35","y":2},{"x":"10/19/2021 06:36","y":3},{"x":"10/19/2021 06:37","y":1},{"x":"10/19/2021 06:38","y":2},{"x":"10/19/2021 06:39","y":1},{"x":"10/19/2021 06:40","y":3},{"x":"10/19/2021 06:41","y":0},{"x":"10/19/2021 06:42","y":1},{"x":"10/19/2021 06:43","y":2},{"x":"10/19/2021 06:44","y":1},{"x":"10/19/2021 06:46","y":0},{"x":"10/19/2021 06:47","y":1},{"x":"10/19/2021 06:48","y":0},{"x":"10/19/2021 06:54","y":1},{"x":"10/19/2021 06:56","y":1},{"x":"10/19/2021 06:57","y":2},{"x":"10/19/2021 06:58","y":1},{"x":"10/19/2021 06:59","y":0},{"x":"10/19/2021 07:00","y":2},{"x":"10/19/2021 07:01","y":2},{"x":"10/19/2021 07:03","y":1},{"x":"10/19/2021 07:04","y":1},{"x":"10/19/2021 07:05","y":0},{"x":"10/19/2021 07:06","y":1},{"x":"10/19/2021 07:07","y":1},{"x":"10/19/2021 07:08","y":1},{"x":"10/19/2021 07:09","y":2},{"x":"10/19/2021 07:10","y":1},{"x":"10/19/2021 07:11","y":0},{"x":"10/19/2021 07:12","y":4},{"x":"10/19/2021 07:13","y":0},{"x":"10/19/2021 07:16","y":1},{"x":"10/19/2021 07:17","y":1},{"x":"10/19/2021 07:18","y":1},{"x":"10/19/2021 07:19","y":1},{"x":"10/19/2021 07:20","y":1},{"x":"10/19/2021 07:21","y":1},{"x":"10/19/2021 07:22","y":2},{"x":"10/19/2021 07:23","y":0},{"x":"10/19/2021 07:25","y":2},{"x":"10/19/2021 07:26","y":2},{"x":"10/19/2021 07:27","y":3},{"x":"10/19/2021 07:28","y":0},{"x":"10/19/2021 07:29","y":1},{"x":"10/19/2021 07:30","y":1},{"x":"10/19/2021 07:31","y":1},{"x":"10/19/2021 07:32","y":1},{"x":"10/19/2021 07:33","y":0},{"x":"10/19/2021 07:34","y":0},{"x":"10/19/2021 07:35","y":2},{"x":"10/19/2021 07:36","y":6},{"x":"10/19/2021 07:37","y":5},{"x":"10/19/2021 07:38","y":0},{"x":"10/19/2021 07:39","y":2},{"x":"10/19/2021 07:40","y":1},{"x":"10/19/2021 07:41","y":1},{"x":"10/19/2021 07:42","y":3},{"x":"10/19/2021 07:43","y":3},{"x":"10/19/2021 07:44","y":7},{"x":"10/19/2021 07:45","y":2},{"x":"10/19/2021 07:46","y":2},{"x":"10/19/2021 07:47","y":4},{"x":"10/19/2021 07:48","y":5},{"x":"10/19/2021 07:49","y":3},{"x":"10/19/2021 07:50","y":1},{"x":"10/19/2021 07:51","y":1},{"x":"10/19/2021 07:52","y":3},{"x":"10/19/2021 07:53","y":1},{"x":"10/19/2021 07:54","y":5},{"x":"10/19/2021 07:55","y":3},{"x":"10/19/2021 07:56","y":2},{"x":"10/19/2021 07:57","y":2},{"x":"10/19/2021 07:58","y":8},{"x":"10/19/2021 07:59","y":2},{"x":"10/19/2021 08:00","y":2},{"x":"10/19/2021 08:01","y":3},{"x":"10/19/2021 08:02","y":6},{"x":"10/19/2021 08:03","y":3},{"x":"10/19/2021 08:04","y":6},{"x":"10/19/2021 08:05","y":5},{"x":"10/19/2021 08:06","y":14},{"x":"10/19/2021 08:07","y":5},{"x":"10/19/2021 08:08","y":2},{"x":"10/19/2021 08:09","y":5},{"x":"10/19/2021 08:10","y":6},{"x":"10/19/2021 08:11","y":3},{"x":"10/19/2021 08:12","y":10},{"x":"10/19/2021 08:13","y":4},{"x":"10/19/2021 08:14","y":12},{"x":"10/19/2021 08:15","y":4},{"x":"10/19/2021 08:16","y":7},{"x":"10/19/2021 08:17","y":11},{"x":"10/19/2021 08:18","y":4},{"x":"10/19/2021 08:19","y":9},{"x":"10/19/2021 08:20","y":6},{"x":"10/19/2021 08:21","y":7},{"x":"10/19/2021 08:22","y":5},{"x":"10/19/2021 08:23","y":7},{"x":"10/19/2021 08:24","y":6},{"x":"10/19/2021 08:25","y":4},{"x":"10/19/2021 08:26","y":4},{"x":"10/19/2021 08:27","y":2},{"x":"10/19/2021 08:28","y":10},{"x":"10/19/2021 08:29","y":3},{"x":"10/19/2021 08:30","y":11},{"x":"10/19/2021 08:31","y":2},{"x":"10/19/2021 08:32","y":2},{"x":"10/19/2021 08:33","y":12},{"x":"10/19/2021 08:34","y":6},{"x":"10/19/2021 08:35","y":13},{"x":"10/19/2021 08:36","y":7},{"x":"10/19/2021 08:37","y":7},{"x":"10/19/2021 08:38","y":10},{"x":"10/19/2021 08:39","y":10},{"x":"10/19/2021 08:40","y":11},{"x":"10/19/2021 08:41","y":11},{"x":"10/19/2021 08:42","y":13},{"x":"10/19/2021 08:43","y":9},{"x":"10/19/2021 08:44","y":13},{"x":"10/19/2021 08:45","y":8},{"x":"10/19/2021 08:46","y":6},{"x":"10/19/2021 08:47","y":7},{"x":"10/19/2021 08:48","y":12},{"x":"10/19/2021 08:49","y":12},{"x":"10/19/2021 08:50","y":9},{"x":"10/19/2021 08:51","y":8},{"x":"10/19/2021 08:52","y":14},{"x":"10/19/2021 08:53","y":11},{"x":"10/19/2021 08:54","y":13},{"x":"10/19/2021 08:55","y":19},{"x":"10/19/2021 08:56","y":10},{"x":"10/19/2021 08:57","y":12},{"x":"10/19/2021 08:58","y":17},{"x":"10/19/2021 08:59","y":21},{"x":"10/19/2021 09:00","y":14},{"x":"10/19/2021 09:01","y":9},{"x":"10/19/2021 09:02","y":13},{"x":"10/19/2021 09:03","y":17},{"x":"10/19/2021 09:04","y":14},{"x":"10/19/2021 09:05","y":15},{"x":"10/19/2021 09:06","y":10},{"x":"10/19/2021 09:07","y":12},{"x":"10/19/2021 09:08","y":19},{"x":"10/19/2021 09:09","y":21},{"x":"10/19/2021 09:10","y":18},{"x":"10/19/2021 09:11","y":21},{"x":"10/19/2021 09:12","y":20},{"x":"10/19/2021 09:13","y":16},{"x":"10/19/2021 09:14","y":25},{"x":"10/19/2021 09:15","y":14},{"x":"10/19/2021 09:16","y":23},{"x":"10/19/2021 09:17","y":12},{"x":"10/19/2021 09:18","y":12},{"x":"10/19/2021 09:19","y":20},{"x":"10/19/2021 09:20","y":11},{"x":"10/19/2021 09:21","y":19},{"x":"10/19/2021 09:22","y":12},{"x":"10/19/2021 09:23","y":23},{"x":"10/19/2021 09:24","y":14},{"x":"10/19/2021 09:25","y":22},{"x":"10/19/2021 09:26","y":15},{"x":"10/19/2021 09:27","y":21},{"x":"10/19/2021 09:28","y":22},{"x":"10/19/2021 09:29","y":18},{"x":"10/19/2021 09:30","y":19},{"x":"10/19/2021 09:31","y":20},{"x":"10/19/2021 09:32","y":18},{"x":"10/19/2021 09:33","y":22},{"x":"10/19/2021 09:34","y":9},{"x":"10/19/2021 09:35","y":14},{"x":"10/19/2021 09:36","y":18},{"x":"10/19/2021 09:37","y":18},{"x":"10/19/2021 09:38","y":15},{"x":"10/19/2021 09:39","y":20},{"x":"10/19/2021 09:40","y":14},{"x":"10/19/2021 09:41","y":15},{"x":"10/19/2021 09:42","y":15},{"x":"10/19/2021 09:43","y":14},{"x":"10/19/2021 09:44","y":12},{"x":"10/19/2021 09:45","y":13},{"x":"10/19/2021 09:46","y":20},{"x":"10/19/2021 09:47","y":19},{"x":"10/19/2021 09:48","y":16},{"x":"10/19/2021 09:49","y":22},{"x":"10/19/2021 09:50","y":13},{"x":"10/19/2021 09:51","y":22},{"x":"10/19/2021 09:52","y":20},{"x":"10/19/2021 09:53","y":18},{"x":"10/19/2021 09:54","y":18},{"x":"10/19/2021 09:55","y":15},{"x":"10/19/2021 09:56","y":17},{"x":"10/19/2021 09:57","y":21},{"x":"10/19/2021 09:58","y":24},{"x":"10/19/2021 09:59","y":21},{"x":"10/19/2021 10:00","y":21},{"x":"10/19/2021 10:01","y":19},{"x":"10/19/2021 10:02","y":19},{"x":"10/19/2021 10:03","y":19},{"x":"10/19/2021 10:04","y":16},{"x":"10/19/2021 10:05","y":14},{"x":"10/19/2021 10:06","y":14},{"x":"10/19/2021 10:07","y":9},{"x":"10/19/2021 10:08","y":15},{"x":"10/19/2021 10:09","y":22},{"x":"10/19/2021 10:10","y":16},{"x":"10/19/2021 10:11","y":16},{"x":"10/19/2021 10:12","y":19},{"x":"10/19/2021 10:13","y":18},{"x":"10/19/2021 10:14","y":13},{"x":"10/19/2021 10:15","y":18},{"x":"10/19/2021 10:16","y":20},{"x":"10/19/2021 10:17","y":16},{"x":"10/19/2021 10:18","y":18},{"x":"10/19/2021 10:19","y":18},{"x":"10/19/2021 10:20","y":17},{"x":"10/19/2021 10:21","y":19},{"x":"10/19/2021 10:22","y":10},{"x":"10/19/2021 10:23","y":19},{"x":"10/19/2021 10:24","y":12},{"x":"10/19/2021 10:25","y":19},{"x":"10/19/2021 10:26","y":13},{"x":"10/19/2021 10:27","y":17},{"x":"10/19/2021 10:28","y":12},{"x":"10/19/2021 10:29","y":18},{"x":"10/19/2021 10:30","y":21},{"x":"10/19/2021 10:31","y":19},{"x":"10/19/2021 10:32","y":18},{"x":"10/19/2021 10:33","y":15},{"x":"10/19/2021 10:34","y":15},{"x":"10/19/2021 10:35","y":16},{"x":"10/19/2021 10:36","y":12},{"x":"10/19/2021 10:37","y":17},{"x":"10/19/2021 10:38","y":26},{"x":"10/19/2021 10:39","y":21},{"x":"10/19/2021 10:40","y":17},{"x":"10/19/2021 10:41","y":18},{"x":"10/19/2021 10:42","y":17},{"x":"10/19/2021 10:43","y":22},{"x":"10/19/2021 10:44","y":15},{"x":"10/19/2021 10:45","y":29},{"x":"10/19/2021 10:46","y":18},{"x":"10/19/2021 10:47","y":22},{"x":"10/19/2021 10:48","y":23},{"x":"10/19/2021 10:49","y":21},{"x":"10/19/2021 10:50","y":28},{"x":"10/19/2021 10:51","y":26},{"x":"10/19/2021 10:52","y":26},{"x":"10/19/2021 10:53","y":20},{"x":"10/19/2021 10:54","y":25},{"x":"10/19/2021 10:55","y":25},{"x":"10/19/2021 10:56","y":17},{"x":"10/19/2021 10:57","y":20},{"x":"10/19/2021 10:58","y":22},{"x":"10/19/2021 10:59","y":22},{"x":"10/19/2021 11:00","y":20},{"x":"10/19/2021 11:01","y":24},{"x":"10/19/2021 11:02","y":29},{"x":"10/19/2021 11:03","y":23},{"x":"10/19/2021 11:04","y":25},{"x":"10/19/2021 11:05","y":27},{"x":"10/19/2021 11:06","y":24},{"x":"10/19/2021 11:07","y":14},{"x":"10/19/2021 11:08","y":18},{"x":"10/19/2021 11:09","y":24},{"x":"10/19/2021 11:10","y":18},{"x":"10/19/2021 11:11","y":15},{"x":"10/19/2021 11:12","y":20},{"x":"10/19/2021 11:13","y":24},{"x":"10/19/2021 11:14","y":20},{"x":"10/19/2021 11:15","y":21},{"x":"10/19/2021 11:16","y":26},{"x":"10/19/2021 11:17","y":21},{"x":"10/19/2021 11:18","y":25},{"x":"10/19/2021 11:19","y":19},{"x":"10/19/2021 11:20","y":11},{"x":"10/19/2021 11:21","y":26},{"x":"10/19/2021 11:22","y":21},{"x":"10/19/2021 11:23","y":27},{"x":"10/19/2021 11:24","y":18},{"x":"10/19/2021 11:25","y":18},{"x":"10/19/2021 11:26","y":18},{"x":"10/19/2021 11:27","y":15},{"x":"10/19/2021 11:28","y":9},{"x":"10/19/2021 11:29","y":20},{"x":"10/19/2021 11:30","y":19},{"x":"10/19/2021 11:31","y":22},{"x":"10/19/2021 11:32","y":15},{"x":"10/19/2021 11:33","y":18},{"x":"10/19/2021 11:34","y":19},{"x":"10/19/2021 11:35","y":27},{"x":"10/19/2021 11:36","y":28},{"x":"10/19/2021 11:37","y":27},{"x":"10/19/2021 11:38","y":15},{"x":"10/19/2021 11:39","y":20},{"x":"10/19/2021 11:40","y":12},{"x":"10/19/2021 11:41","y":20},{"x":"10/19/2021 11:42","y":22},{"x":"10/19/2021 11:43","y":19},{"x":"10/19/2021 11:44","y":29},{"x":"10/19/2021 11:45","y":25},{"x":"10/19/2021 11:46","y":20},{"x":"10/19/2021 11:47","y":20},{"x":"10/19/2021 11:48","y":17},{"x":"10/19/2021 11:49","y":12},{"x":"10/19/2021 11:50","y":28},{"x":"10/19/2021 11:51","y":15},{"x":"10/19/2021 11:52","y":19},{"x":"10/19/2021 11:53","y":12},{"x":"10/19/2021 11:54","y":16},{"x":"10/19/2021 11:55","y":17},{"x":"10/19/2021 11:56","y":12},{"x":"10/19/2021 11:57","y":15},{"x":"10/19/2021 11:58","y":15},{"x":"10/19/2021 11:59","y":18},{"x":"10/19/2021 12:00","y":14},{"x":"10/19/2021 12:01","y":19},{"x":"10/19/2021 12:02","y":18},{"x":"10/19/2021 12:03","y":21},{"x":"10/19/2021 12:04","y":18},{"x":"10/19/2021 12:05","y":17},{"x":"10/19/2021 12:06","y":14},{"x":"10/19/2021 12:07","y":17},{"x":"10/19/2021 12:08","y":17},{"x":"10/19/2021 12:09","y":12},{"x":"10/19/2021 12:10","y":12},{"x":"10/19/2021 12:11","y":22},{"x":"10/19/2021 12:12","y":12},{"x":"10/19/2021 12:13","y":17},{"x":"10/19/2021 12:14","y":13},{"x":"10/19/2021 12:15","y":18},{"x":"10/19/2021 12:16","y":23},{"x":"10/19/2021 12:17","y":14},{"x":"10/19/2021 12:18","y":12},{"x":"10/19/2021 12:19","y":15},{"x":"10/19/2021 12:20","y":18},{"x":"10/19/2021 12:21","y":13},{"x":"10/19/2021 12:22","y":21},{"x":"10/19/2021 12:23","y":12},{"x":"10/19/2021 12:24","y":14},{"x":"10/19/2021 12:25","y":8},{"x":"10/19/2021 12:26","y":17},{"x":"10/19/2021 12:27","y":18},{"x":"10/19/2021 12:28","y":16},{"x":"10/19/2021 12:29","y":27},{"x":"10/19/2021 12:30","y":16},{"x":"10/19/2021 12:31","y":15},{"x":"10/19/2021 12:32","y":15},{"x":"10/19/2021 12:33","y":16},{"x":"10/19/2021 12:34","y":15},{"x":"10/19/2021 12:35","y":15},{"x":"10/19/2021 12:36","y":15},{"x":"10/19/2021 12:37","y":15},{"x":"10/19/2021 12:38","y":14},{"x":"10/19/2021 12:39","y":13},{"x":"10/19/2021 12:40","y":11},{"x":"10/19/2021 12:41","y":9},{"x":"10/19/2021 12:42","y":10},{"x":"10/19/2021 12:43","y":13},{"x":"10/19/2021 12:44","y":7},{"x":"10/19/2021 12:45","y":11},{"x":"10/19/2021 12:46","y":15},{"x":"10/19/2021 12:47","y":9},{"x":"10/19/2021 12:48","y":18},{"x":"10/19/2021 12:49","y":12},{"x":"10/19/2021 12:50","y":11},{"x":"10/19/2021 12:51","y":22},{"x":"10/19/2021 12:52","y":14},{"x":"10/19/2021 12:53","y":11},{"x":"10/19/2021 12:54","y":8},{"x":"10/19/2021 12:55","y":12},{"x":"10/19/2021 12:56","y":16},{"x":"10/19/2021 12:57","y":12},{"x":"10/19/2021 12:58","y":9},{"x":"10/19/2021 12:59","y":14},{"x":"10/19/2021 13:00","y":12},{"x":"10/19/2021 13:01","y":18},{"x":"10/19/2021 13:02","y":15},{"x":"10/19/2021 13:03","y":21},{"x":"10/19/2021 13:04","y":17},{"x":"10/19/2021 13:05","y":19},{"x":"10/19/2021 13:06","y":12},{"x":"10/19/2021 13:07","y":20},{"x":"10/19/2021 13:08","y":18},{"x":"10/19/2021 13:09","y":15},{"x":"10/19/2021 13:10","y":10},{"x":"10/19/2021 13:11","y":12},{"x":"10/19/2021 13:12","y":18},{"x":"10/19/2021 13:13","y":9},{"x":"10/19/2021 13:14","y":13},{"x":"10/19/2021 13:15","y":16},{"x":"10/19/2021 13:16","y":14},{"x":"10/19/2021 13:17","y":13},{"x":"10/19/2021 13:18","y":14},{"x":"10/19/2021 13:19","y":18},{"x":"10/19/2021 13:20","y":11},{"x":"10/19/2021 13:21","y":12},{"x":"10/19/2021 13:22","y":13},{"x":"10/19/2021 13:23","y":13},{"x":"10/19/2021 13:24","y":7},{"x":"10/19/2021 13:25","y":22},{"x":"10/19/2021 13:26","y":18},{"x":"10/19/2021 13:27","y":15},{"x":"10/19/2021 13:28","y":10},{"x":"10/19/2021 13:29","y":21},{"x":"10/19/2021 13:30","y":12},{"x":"10/19/2021 13:31","y":16},{"x":"10/19/2021 13:32","y":12},{"x":"10/19/2021 13:33","y":21},{"x":"10/19/2021 13:34","y":15},{"x":"10/19/2021 13:35","y":15},{"x":"10/19/2021 13:36","y":13},{"x":"10/19/2021 13:37","y":19},{"x":"10/19/2021 13:38","y":21},{"x":"10/19/2021 13:39","y":15},{"x":"10/19/2021 13:40","y":13},{"x":"10/19/2021 13:41","y":16},{"x":"10/19/2021 13:42","y":15},{"x":"10/19/2021 13:43","y":12},{"x":"10/19/2021 13:44","y":16},{"x":"10/19/2021 13:45","y":13},{"x":"10/19/2021 13:46","y":12},{"x":"10/19/2021 13:47","y":15},{"x":"10/19/2021 13:48","y":17},{"x":"10/19/2021 13:49","y":14},{"x":"10/19/2021 13:50","y":15},{"x":"10/19/2021 13:51","y":15},{"x":"10/19/2021 13:52","y":14},{"x":"10/19/2021 13:53","y":8},{"x":"10/19/2021 13:54","y":13},{"x":"10/19/2021 13:55","y":8},{"x":"10/19/2021 13:56","y":10},{"x":"10/19/2021 13:57","y":8},{"x":"10/19/2021 13:58","y":16},{"x":"10/19/2021 13:59","y":20},{"x":"10/19/2021 14:00","y":16},{"x":"10/19/2021 14:01","y":13},{"x":"10/19/2021 14:02","y":11},{"x":"10/19/2021 14:03","y":11},{"x":"10/19/2021 14:04","y":13},{"x":"10/19/2021 14:05","y":19},{"x":"10/19/2021 14:06","y":20},{"x":"10/19/2021 14:07","y":13},{"x":"10/19/2021 14:08","y":22},{"x":"10/19/2021 14:09","y":19},{"x":"10/19/2021 14:10","y":12},{"x":"10/19/2021 14:11","y":15},{"x":"10/19/2021 14:12","y":10},{"x":"10/19/2021 14:13","y":10},{"x":"10/19/2021 14:14","y":19},{"x":"10/19/2021 14:15","y":16},{"x":"10/19/2021 14:16","y":11},{"x":"10/19/2021 14:17","y":7},{"x":"10/19/2021 14:18","y":13},{"x":"10/19/2021 14:19","y":14},{"x":"10/19/2021 14:20","y":18},{"x":"10/19/2021 14:21","y":14},{"x":"10/19/2021 14:22","y":15},{"x":"10/19/2021 14:23","y":20},{"x":"10/19/2021 14:24","y":24},{"x":"10/19/2021 14:25","y":13},{"x":"10/19/2021 14:26","y":14},{"x":"10/19/2021 14:27","y":25},{"x":"10/19/2021 14:28","y":13},{"x":"10/19/2021 14:29","y":13},{"x":"10/19/2021 14:30","y":16},{"x":"10/19/2021 14:31","y":18},{"x":"10/19/2021 14:32","y":14},{"x":"10/19/2021 14:33","y":15},{"x":"10/19/2021 14:34","y":17},{"x":"10/19/2021 14:35","y":8},{"x":"10/19/2021 14:36","y":15},{"x":"10/19/2021 14:37","y":10},{"x":"10/19/2021 14:38","y":18},{"x":"10/19/2021 14:39","y":17},{"x":"10/19/2021 14:40","y":15},{"x":"10/19/2021 14:41","y":16},{"x":"10/19/2021 14:42","y":16},{"x":"10/19/2021 14:43","y":11},{"x":"10/19/2021 14:44","y":14},{"x":"10/19/2021 14:45","y":11},{"x":"10/19/2021 14:46","y":17},{"x":"10/19/2021 14:47","y":14},{"x":"10/19/2021 14:48","y":17},{"x":"10/19/2021 14:49","y":20},{"x":"10/19/2021 14:50","y":12},{"x":"10/19/2021 14:51","y":15},{"x":"10/19/2021 14:52","y":15},{"x":"10/19/2021 14:53","y":14},{"x":"10/19/2021 14:54","y":15},{"x":"10/19/2021 14:55","y":19},{"x":"10/19/2021 14:56","y":16},{"x":"10/19/2021 14:57","y":19},{"x":"10/19/2021 14:58","y":11},{"x":"10/19/2021 14:59","y":14},{"x":"10/19/2021 15:00","y":11},{"x":"10/19/2021 15:01","y":17},{"x":"10/19/2021 15:02","y":13},{"x":"10/19/2021 15:03","y":9},{"x":"10/19/2021 15:04","y":20},{"x":"10/19/2021 15:05","y":12},{"x":"10/19/2021 15:06","y":16},{"x":"10/19/2021 15:07","y":9},{"x":"10/19/2021 15:08","y":18},{"x":"10/19/2021 15:09","y":19},{"x":"10/19/2021 15:10","y":11},{"x":"10/19/2021 15:11","y":19},{"x":"10/19/2021 15:12","y":16},{"x":"10/19/2021 15:13","y":17},{"x":"10/19/2021 15:14","y":14},{"x":"10/19/2021 15:15","y":13},{"x":"10/19/2021 15:16","y":17},{"x":"10/19/2021 15:17","y":14},{"x":"10/19/2021 15:18","y":13},{"x":"10/19/2021 15:19","y":15},{"x":"10/19/2021 15:20","y":12},{"x":"10/19/2021 15:21","y":18},{"x":"10/19/2021 15:22","y":19},{"x":"10/19/2021 15:23","y":18},{"x":"10/19/2021 15:24","y":12},{"x":"10/19/2021 15:25","y":16},{"x":"10/19/2021 15:26","y":23},{"x":"10/19/2021 15:27","y":15},{"x":"10/19/2021 15:28","y":24},{"x":"10/19/2021 15:29","y":18},{"x":"10/19/2021 15:30","y":14},{"x":"10/19/2021 15:31","y":15},{"x":"10/19/2021 15:32","y":17},{"x":"10/19/2021 15:33","y":15},{"x":"10/19/2021 15:34","y":12},{"x":"10/19/2021 15:35","y":9},{"x":"10/19/2021 15:36","y":8},{"x":"10/19/2021 15:37","y":14},{"x":"10/19/2021 15:38","y":16},{"x":"10/19/2021 15:39","y":11},{"x":"10/19/2021 15:40","y":19},{"x":"10/19/2021 15:41","y":10},{"x":"10/19/2021 15:42","y":19},{"x":"10/19/2021 15:43","y":12},{"x":"10/19/2021 15:44","y":15},{"x":"10/19/2021 15:45","y":14},{"x":"10/19/2021 15:46","y":6},{"x":"10/19/2021 15:47","y":15},{"x":"10/19/2021 15:48","y":11},{"x":"10/19/2021 15:49","y":13},{"x":"10/19/2021 15:50","y":13},{"x":"10/19/2021 15:51","y":15},{"x":"10/19/2021 15:52","y":14},{"x":"10/19/2021 15:53","y":16},{"x":"10/19/2021 15:54","y":10},{"x":"10/19/2021 15:55","y":11},{"x":"10/19/2021 15:56","y":12},{"x":"10/19/2021 15:57","y":9},{"x":"10/19/2021 15:58","y":8},{"x":"10/19/2021 15:59","y":10},{"x":"10/19/2021 16:00","y":11},{"x":"10/19/2021 16:01","y":16},{"x":"10/19/2021 16:02","y":12},{"x":"10/19/2021 16:03","y":9},{"x":"10/19/2021 16:04","y":12},{"x":"10/19/2021 16:05","y":11},{"x":"10/19/2021 16:06","y":3} 
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
          "parser": "MM/DD/YYYY HH:mm" 
          
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
