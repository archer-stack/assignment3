<?php
    class Validator{

        private static $instance = null;

        public static function getInstance():Validator {
            if(!self::$instance) {
                self::$instance = new Validator();
            }

            return self::$instance;
        }
    }
    
?>