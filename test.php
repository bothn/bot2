<?
//Prevent caching and set content-type to json so app can display it correctly.
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/json');
//Pull address for latitude and longitude from Google API (max 25,000 calls per day for free)
function getaddress($lat,$lon) {
$url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lon).'&key=AIzaSyCGu-BLH2wBXSpfjPz_-i3fxXocFJOfRsQ';
$json = @file_get_contents($url);
$data=json_decode($json);
$status = $data->status;
if($status=="OK"){
return $data->results[0]->formatted_address;
} else {
return false;
}
}
//Set the response we want to display in the app
date_default_timezone_set('America/Los_Angeles');
$timestamp = date('Y-m-d h:i:s');
$success_response = "Successfully captured location @ $timestamp PST!";
//Connect to MySQL database
$conn = mysqli_connect("db4free.net", "coordenadashn", "Musica2021", "coordenadashn");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//Capture the latitude ($lat) and longitude ($lon) passed from the app
$lat=$_REQUEST['lat'];
$lon=$_REQUEST['lon'];
//Get the address from Google API
$address= getaddress($lat,$lon);
if(!$address){
$address= "Not found";
}
//Insert record into database
$sql = "INSERT INTO phone_location (lat, lon, time, address)
VALUES ('$lat', '$lon', '$timestamp', '$address')";
if (mysqli_query($conn, $sql)) {
echo json_encode($success_response);
} else {
echo json_encode("Error: Unable to create posting.");
}
mysqli_close($conn);
?>
