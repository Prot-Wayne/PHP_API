<?php

  include('../../config/Database.php');

  class Posts{

    public $con;
    public $id;
    public $titulo;
    public $cuerpo;
    public $fecha;

    public function __construct(){
      $this->con = new Database();
    }

    public function read(){
      $sql = "select * from posts";
      $result = $this->con->consulta($sql);
      return $result;
    }

    public function readOne(){
      $sql = "select * from posts where id=$this->id";
      $result = $this->con->consulta($sql);
      $r = $result->fetch_object();

      $this->id = $r->id;
      $this->titulo = $r->titulo;
      $this->cuerpo = $r->cuerpo;
      $this->fecha = $r->fecha;
    }

    public function create(){

    }
  }
 ?>
