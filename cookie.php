<?php



$response2 = file_get_contents('https://raw.githubusercontent.com/byte-capsule/Toffee-Channels-Link-Headers/main/toffee_channel_data.json');

$json_data2 = json_decode($response2, true);
$link2=$json_data2["channels"]["0"]["headers"]["cookie"];



$cookie2 = $link2;
header("location:$cookie2");
echo $cookie2;


?>
