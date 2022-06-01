<?php
$xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<login>
	<user>hackhappy</user>
	<pass>password</pass>
</login>
XML;

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, "http://localhost/lumino/xxe 2.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

$data = curl_exec($ch);

if(curl_errno($ch))
{
	print curl_error($ch);
}
else
{
	echo "Response: <br>".$data;
}
curl_close($ch);
?>