<?php
    // namespace Api;
    require_once '../Models/User.php';

    class Login {
        public function doLogin($user, $pass) {
           // if ($user == 'kobe' && $pass== '123') {

               // GOTO SQL and bring User - if no rows - return false
                $usr = new User(1, 'kobe', 'hatam', 1);
            
                    //$_SESSION['user'] = $usr;
                   // $_SESSION['user']->getUsername();
                
                return json_encode($usr, JSON_PRETTY_PRINT);
           // }    
        }
    }