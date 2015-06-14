<?php

require('Twitter.php');
require('MulticraftAPI.php');

$api = new MulticraftAPI('http://example.com/api.php', 'USERNAME', 'API-CODE');
$twtr = new Twitter;

$serverid = 1;
$data = $api->getServerStatus($serverid, true)['data']['status'];

echo $data;

if ($data = "online") {
	$twtr->tweet('Server is Online');
}else {
	$twtr->tweet('Server is offline');
}	

?>
