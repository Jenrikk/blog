<?php

require 'admin/config.php';
require 'functions.php'; 

$conex = conexion($bd_config);
if (!$conex) {
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conex->prepare(
        'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
    );
    $statement->execute(array(':busqueda' => "%$busqueda%"));
    $resultados = $statement->fetchAll();

    if (empty($resultados)) {
        $titulo = 'No se encontraron resultados con: ' . $busqueda;
    }else {
        $titulo = 'Resultados con: ' . $busqueda;
    }
}else {
    header('Location: ' . RUTA . '/index.php' );
}


require 'views/buscar.view.php';


?>