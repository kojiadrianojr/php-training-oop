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
            $this->_conn = new PDO($dsn, $this->user, $this->pass);
            $this->_conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
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

    public function query($sql, $params = array()) {
        $this->_error = false;
        if($this->_query = $this->_conn->prepare($sql)) {
            if(count($params)) {
                foreach($params as $key => $param) {
                    $this->_query->bindValue($key+1, $param);
                    
                }
            }

            if($this->_query->execute()) {
                $this->_results = $this->_query->fetch();
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }
        return $this;
    }

    private function action($action, $table, $where = array()){
        if (count($where) === 3) {
            $operators = array('=', '>', '<', '>=', '<=');
            $field      = $where[0];
            $operator   = $where[1];
            $value      = $where[2];

            if (in_array($operator, $operators)){
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                if(!$this->query($sql, array($value))->error()){
                    return $this;
                }
            }
        }
        return false;
    }

    public function get($table, $where) {
        return $this->action('SELECT *', $table, $where);
    }
    public function delete($table, $where) {
        return $this->action('DELETE', $table, $where);
    }

    public function error() {
        return $this->_error;
    }

    public function count(){
        return $this->_count;
    }

}