<?php

class Config{
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "elecronic";

    public function connect(){
        $res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $res->con_res;
    }

    public function insert($Name,$price){
        $this->connect();
        $quert = "INSERT INTO elecronic(Name,price) VALUES('$Name','$price');";

        $res = mysqli_query($this->con_res,$query);
        return $res;
    }


    }

    public function delete($id){
        $this->connect();
        $query = "DELET FROM std WHERE ID=$id;";

        $res = mysqli_query($this->con_res, $query);
        return $res;
    }
}

?>