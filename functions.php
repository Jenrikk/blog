<?php
//conexion a la bdd
function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'],$bd_config['usuario'],$bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
    
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($post_por_paginas, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_paginas - $post_por_paginas : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_paginas");
    $sentencia->execute();
    return $sentencia->fetchAll();
}


?>