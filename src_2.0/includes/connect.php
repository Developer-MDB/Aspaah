<?php
    
    class ConnectionDB {

        public function iniciarDB(){
            $link = new mysqli('127.0.0.1', 'root', '', 'db_aspaah');
            if (mysqli_connect_error()) {
                printf("Fallo en la conexión: %\n", $link->connect_error);
                exit();
            }
            return $link;
        }
    }