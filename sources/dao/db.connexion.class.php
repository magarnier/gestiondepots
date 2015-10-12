<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "enalean");

class Database{

   private static $instance = null;
 
   public static function getInstance() {
 
        if (!self::$instance) {
            self::$instance = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
 
  public static function __callStatic ($method, $args) {
    if (!is_callable(self::getInstance(), $method))
      throw new BadMethodCallException("No such method $method for DB");
 
    return call_user_func_array(array(self::getInstance(), $method), $args);
  }
   
 }