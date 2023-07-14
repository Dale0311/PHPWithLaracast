<?php 
    class Database{
        // config
        private $dsn;
        private $username;
        private $password;
        function __construct($config, $username="root", $password = ""){
            $this->dsn = 'mysql:'.http_build_query($config, "", ";");
            $this->username = $username;
            $this->password = $password;
        }
        function con(){
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;

        }
    }
?>