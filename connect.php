<?php

class Init {
 public $connection;
 
 function __construct()
 {
     $this-> connection = mysqli_connect("localhost", "root", "", "test");
    //  if($this->connection){
    //      echo "connection successful";

    //  }else{ 
    //      echo("Unable to connect");
    //  }

 }
}

$con= new Init;

?>