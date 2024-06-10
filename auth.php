<?php
session_start();
require_once "database.php";
require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Guid\Guid;

class Auth {
    private $db;
    

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function register($name,$rogin_id,$email,$password,$use_email_as_rogin_rogin_id) {
        $user_id = Uuid::uuid4()->toString();
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if($use_email_as_rogin_rogin_id == "1"){
            $rogin_id = $email;
        }
        $sql = "INSERT INTO Users (user_id, rogin_id, name, email, password) VALUES(:user_id,:rogin_id,:name,:email,:password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':user_id',$user_id);
        $stmt->bindParam(':rogin_id', $rogin_id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);

        return $stmt->execute();
    }
}
