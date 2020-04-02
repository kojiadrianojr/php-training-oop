<?php

namespace Classes;
use Classes\Config;
use \PDO;
class DB{
    private static $instance = null;
    private $_conn,
            $_query,
            $_error = false,
            $_results,
            $_count = 0;

    private $host, $user, $pass, $name;

    private function define_database(){
        $this->host = Config::get('mysql/host');
        $this->user = Config::get('mysql/user');
        $this->pass = Config::get('mysql/pass');
        $this->name = Config::get('mysql/db');
    }

    private function __construct(){
        $this->define_database();
        $dsn = 'mysql:host='. $this->host . ';dbname=' . $this->name;
        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDEException $e) {
            die($e->getMessage());
        }
   
    }
    public static function getInstance(){
        if (!self::$instance)
        {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getConnect(){
        return $this->conn;
    }
}