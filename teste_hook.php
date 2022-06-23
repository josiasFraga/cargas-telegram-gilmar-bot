<?php
$update = json_decode(file_get_contents("php://input"), TRUE);
$req_dump = print_r($_REQUEST, TRUE);
$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);

$fp = fopen('update.log', 'a');
fwrite($fp, $update);
fclose($fp);