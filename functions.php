<?php
//conexion a la bdd
function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host:localhost;dbname=blogg', 'root', 'root');
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
    
}


?>