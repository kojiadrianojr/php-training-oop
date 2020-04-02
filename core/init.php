<?php
session_start();
require_once 'classes/bootstrap.php';
use Classes\Env;
$dotenv = new Env();
$dotenv->start_dotenv();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => getenv('DB_HOST'), 
        'user' => getenv('DB_USER'),
        'pass' => getenv('DB_PASS'),
        'db' => getenv('DB_NAME')
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expirty' =>  '604800'
    ),
    'session' => array(
        'session_name' => 'user'
    ),
);
require_once 'function/sanitize.php';