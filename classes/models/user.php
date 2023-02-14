<?php
include_once "database.php";
class User{
    private $name;
    private $username;
    private $password;
    private $pdo;

    public function __construct()
    {
        $this->pdo  =  Database::getInstance();
    }
    public function signup(){
        
    }
    public function getUser($username){
        $query  =   "SELECT * FROM users WHERE username=?";
        $stmt   =   $this->pdo->prepare($query);
        $stmt->execute([$username]);
        echo "THIS IS GET USER";
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}