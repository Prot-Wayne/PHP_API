<?php
    class Database{

        private $conn;
        private $db_host = 'localhost';
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "blog";

        public function __construct(){
            $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            return $this->conn;
        }

        public function consulta($sql){
            $r = $this->conn->query($sql);
            return $r;
        }

        public function simple($sql){
            $this->conn->query($sql);
        }
    }