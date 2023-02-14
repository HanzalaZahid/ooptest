<?php

class Database{

    private $pdo;
    private static $instance    =   null;

    private function __constructor(){
        $host   =   "localhost";
        $user   =   "root";
        $pwd    =   "";
        $dbname =   "ooptest";

        try{
            $this->pdo  =   new PDO("mysql:host   =   $host, dbname   =   $dbname", $user, $pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e)
        {
            echo "Connection to database failed: "  .   $e->getMessage();
            exit;
        }
    }

    public static function getInstance(){
        if (self::$instance === null)
        {
            self::$instance =   new Database();
        }

        return self::$instance->pdo;
    }
}