<?php
include "start.php";


$go= new Start;
//  Get Posted data

$popstdata= file_get_contents("php://input");


// Extract the data
$request = json_decode($popstdata);



// reference global $ name  below cos its declared as global variable in start.php
$go->name=$request->name;



//  passed id in template, admin comp.html 'id'
$io= $go->update_into_guys($request->id);
print_r($io);



?>