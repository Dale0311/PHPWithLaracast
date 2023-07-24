<?php 
namespace core;
use core\App;
use core\Database;
class Authenticator{
    protected $data;
    function attempt($attributes){
        extract($attributes);

        // login logic here
        $db = App::resolver(Database::class);

        $q = "SELECT * FROM users WHERE email = ? AND password = ?";
        $record = $db->get($q, [$email, md5($password)]);

        $this->data = $record->fetchRow();
        return $this->data();
    }

    function data(){
        return $this->data;
    }
}