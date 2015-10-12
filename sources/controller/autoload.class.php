<?php

class Autoloader{

    /**
     * Save the autoaload
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Files to load for the class
     * @param $class string name of the loading class
     */
    static function autoload($class){
        require 'sources/dao/' . $class . '.class.php';
        require 'sources/dao/' . $class . '.model.class.php';
        require 'sources/controller/' . $class . '.controller.class.php';
        require 'sources/template/' . $class . '.template.php';
    }

}