<?php

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: Application/Json');

  //include_once '../../config/Database.php';
  include_once '../../models/Posts.php';

  //$database = new Database();
  //$db = $database->connect();

  $posts = new Posts();
  $post = $posts->read();
  $num = mysqli_num_rows($post);

  if($num > 0){
    $array = array();
    $array['data'] = array();

    while($row = $post->fetch_array()){
      extract($row);

      $post_item = array(
        "id" => $id,
        "titulo"=> $titulo,
        "cuerpo" => $cuerpo,
        "fecha" => $fecha,
      );

      array_push($array['data'],$post_item);
    }

    echo json_encode($array);
  }else{
    echo json_encode(
      array("message"=>"Sin Datos para mostrar")
    );
  }
 ?>
