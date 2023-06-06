<?php 

namespace SOURCE;

class Config{

    static public $driver  = "mysql";
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'campus_canteen';
    // public $user = 'root';
    // public $password = '';
    // public $database = 'products';
    // static public function connectdb()
    // {
    //     $pdo_conn = new \PDO( "mysql:host=localhost;dbname=$this->database", $this->user, $this->password );
    //     return $pdo_conn;
    // }

    static public function datasource()
    {
        return self::docroot()."admin".DIRECTORY_SEPARATOR."sources".DIRECTORY_SEPARATOR;
    }
    static public function docroot()
    {
        return $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
    }
}