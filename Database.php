<?php 
    class Database{
        // config
        private $dsn;
        private $username;
        private $password;
        
        // pdo instance
        private $pdo;
        function __construct($config, $username="root", $password = ""){
            $this->dsn = 'mysql:'.http_build_query($config, "", ";");
            $this->username = $username;
            $this->password = $password;
            
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        function get($query, $foo = [], $table="post"){
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($foo);
            return $stmt;
        }
    }
?>