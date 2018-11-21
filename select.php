<?php 
// import connection via start.php

include "start.php";



$go= new Start;
$data = $go->select_from_guys();

print_r($data);


?>