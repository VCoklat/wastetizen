<?php
    $con = mysqli_connect('localhost', 'u6428362_pasar', 'u6428362_pasar','u6428362_pasar');
    header('Content-type: application/json');
    
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString; 
    }
    
    function verify($name){
        if (!preg_match("/^[a-zA-Z0-9. ]*$/",$name)) {
            //$nameErr = "Only letters and white space allowed";
            $name = trim($name);
            $name = stripslashes($name);
            $name = htmlspecialchars($name);
        } else {
            return $name;
        }
    }