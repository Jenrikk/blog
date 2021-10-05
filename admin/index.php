<?php session_start();
//Index del ADMIN
require './config.php';
require '../functions.php'; 

$nombreadmin = $_SESSION['admin']; 

$conex = conexion($bd_config);
if (!$conex) {
    header('Location: error.php');
}

$posts = obtener_post($blog_config['post_por_paginas'], $conex);
if (!$posts) {
    header('Location: ../error.php');
}


require '../views/admin-index.view.php';


?>