<?php
require_once 'coins.php';
$wallet = new jsonRPCClient('http://' . $coin['user'] . ':' . $coin['pass'] . '@'.$coin['ip'].':' . $coin['port'].'/');
if (isset($wallet)) {
	$process = $wallet->masternodelist('full');
	echo json_encode($process);
}