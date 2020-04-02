<?php

namespace Classes;
class Config {
    public static function get($path = null) {
        if($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);
            foreach($path as $bit) {
               $config = $config[$bit] ?? false;
            }
            return $config;
        }
        return false;
    }
}