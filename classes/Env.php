<?php

namespace Classes;
use Dotenv\Dotenv; 

class Env {
    public $dotenv;
    public function start_dotenv(){
        $this->dotenv = Dotenv::createImmutable(__DIR__);
        $this->load();
    }

    public function load(){
        $this->dotenv->load();
    }
}