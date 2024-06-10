<?php

class Database{
    private $db_name = 'rogin';
    private $host = 'localhost';
    private $user_name = 'root';
    private $password = '';
    private $conn ;

    public function connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name.';charset=utf8,'.$this->user_name.','.$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            exit("DB-Connection-Error:".$e->getMessage());
        }
        return $this->conn;
    }
}
?>