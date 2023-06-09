<?php
$disco = file_get_contents('api.json');
header('content-type: application/json');
// echo json_encode($cards);
echo $disco;
