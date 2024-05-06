<?php

class conexionDB extends SQLite3 {

      function __construct(){
        $this->open('Datos.db');
    }   
}

$db = new conexionDB();

 
?>
