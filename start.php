<?php 
// ALl methods contained here

// ======= import connection ================
include "connect.php";

class Start extends Init{

    // read method
    function select_from_guys(){
        $query = "SELECT * FROM guys";
        $result = mysqli_query($this->connection, $query);
        while($res= mysqli_fetch_array($result)){
            $resp[]=array('name' => $res['name'], 'id' => $res['id']);

        }
        $data=array(
            "data" => $resp
        );

        $json_data= json_encode($data);        
        return $json_data;

    }

    // insert function

    function insert_into_guys($name){
        $query = "INSERT INTO guys(name) value('".$name."')";

        mysqli_query($this->connection, $query);
        return $this->select_from_guys();

    }



    // delete function

    function delete_from_guys($id){
        $query= "DELETE FROM guys WHERE id=$id";

        mysqli_query($this->connection, $query);
        return $this->select_from_guys();
    }
}




?>