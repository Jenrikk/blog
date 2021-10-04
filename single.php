<?php

require 'admin/config.php';
require 'functions.php'; 

$conex = conexion($bd_config);
if (!$conex) {
    header('Location: error.php');
}

$id_articulo = id_articulo($_GET['id']);
if (empty($id_articulo)) {
    header('Location: index.php');
}

$post = obtenerPostId($conex, $id_articulo);
if (!$post) {
    header('Location: index.php');
}

// de otra forma tendriamos que manipular este objeto 
// todo el rato como $post[0]['id'], $post[0]['titulo'], etc
$post = $post[0];

require 'views/single.view.php';


?>