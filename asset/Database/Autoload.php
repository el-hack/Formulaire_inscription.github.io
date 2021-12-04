<?php 
namespace Autoloade;
class Autoload{

        static function autoloader($class){

        $class = str_replace('\\', '', $class);
        require $class.".php";
    }
    static function register(){
        spl_autoload_register(array(__CLASS__,"autoloader"));
    }

}

?>