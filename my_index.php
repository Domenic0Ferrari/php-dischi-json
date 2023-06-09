<?php
$disco = file_get_contents('api.json');
header('Content-Type: application/json');
// echo json_encode($disco);
echo $disco;
