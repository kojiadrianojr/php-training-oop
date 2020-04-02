<?php 
require_once 'core/init.php';

$user = Classes\DB::getInstance()->get('users', array('username', '=', 'admin'));

if (!$user->count()){
    echo 'No user';
}else {
    echo 'OK!';
}

include 'includes/layout/HTML.php';
