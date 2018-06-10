<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: Application/Json');

include_once '../../models/Posts.php';


$posts = new Posts();
$posts->id = $_GET['id'];
$posts->readOne();

if($posts){
    
    $array = array(
        "id" => $posts->id,
        "titulo" => $posts->titulo,
        "cuerpo" => $posts->cuerpo,
        "fecha" => $posts->fecha
    );

    echo json_encode($array);
}else{
    echo json_encode(
        array("message"=>"Sin Datos para mostrar")
      );
}


