<?php
class User
{
    // Hold an instance of the class
    private static $instance;
  
    // The singleton method
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            self::$instance = new __CLASS__;
        }
        return self::$instance;
    }
}

$oUser1 = User::singleton();
$oUser2 = $oUser1;
$oUser3 = &$oUser1;
