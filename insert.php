<?php
//  import connection
include "start.php";

$go = new Start;
$popostdata= file_get_contents("php://input");
$request =json_decode($popostdata);
$io =$go->insert_into_guys($request->name);
print_r($io);

?>