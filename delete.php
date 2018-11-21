<?php
include "start.php";


$go= new Start;
// $popostdata= file_get_contents("php://input");
// $request =json_decode($popostdata);
// print_r();
// $io =$go->insert_into_guys($request->name);
$io =$go->delete_from_guys($_GET['id']);
print_r($io);

?>