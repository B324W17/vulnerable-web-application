<?php


$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, "http://localhost/lumino/login.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

$data=curl_exec($ch);

if(curl_errno($ch)){
	print curl_error($ch);
} 
else {
	echo "Response: ".$data;
}

curl_close($ch);
?>