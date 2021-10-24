<?php

namespace App\Models;



class Login 
{
    private static $login = [
        [
            "title" => "Login",
            "body" => "Username:",
            "body2" => "Password:"
        ]
        ];
        public static function all()
        {
            return self::$login;
        }

        public static function find($slug)
        {
           $logins = self::$login;
           $login = [];
           foreach ($logins as $l) {
               if ($l["slug"] === $slug) {
                   $login = $l;
               }
           }

           return $login;
            
        }
}