<?php
$url = 'http://api.jakarta.go.id/v1/rumahsakitumum';
$requestUrl = $url;
$curl = curl_init($requestUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Authorization: LdT23Q9rv8g9bVf8v/fQYsyIcuD14svaYL6Bi8f9uGhLBVlHA3ybTFjjqe+cQO8k',
  'Content-Type: application/json'
]);
$response = curl_exec($curl);
curl_close($curl);
$arrResponse = json_decode( $response, true );

if($arrResponse['status']=='success'){
	foreach($arrResponse['data'] as $value){
		print_r($value);
	}

}
else{
	echo 'service is unavailable';
}
