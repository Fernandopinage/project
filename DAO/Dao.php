<?php 

require_once '../conection/conection.php';

abstract class Dao{


    public function __construct()
    {
        $this->con = ConnectFactory :: getConection();
    }


   


    }

?>