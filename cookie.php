<?php

$response2 = file_get_contents('https://raw.githubusercontent.com/byte-capsule/Toffee-Channels-Link-Headers/main/toffee_channel_data.json');

if ($response2 === FALSE) {
    die('Error occurred while fetching JSON data.');
}

$json_data2 = json_decode($response2, true);

if ($json_data2 === NULL) {
    die('Error occurred while decoding JSON data.');
}

$link2 = $json_data2["channels"][0]["headers"]["cookie"];

if (empty($link2)) {
    die('Error: Cookie value not found.');
}

echo $link2;

?>
