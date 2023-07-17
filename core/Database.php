<?php 
    class Database{
        // config
        private $dsn;
        private $username;
        private $password;
        private $stmt;

        // pdo instance
        private $pdo;
        function __construct($config, $username="root", $password = ""){
            $this->dsn = 'mysql:'.http_build_query($config, "", ";");
            $this->username = $username;
            $this->password = $password;
            
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        function get($query, $foo = []){
            $this->stmt = $this->pdo->prepare($query);
            $this->stmt->execute($foo);
            
            // return the instance of the object
            return $this;
        }

        function fetchRows(){
            $arrPost=[];
            if($this->stmt->rowCount() > 0){
                foreach ($this->stmt->fetchAll() as $key => $row) {
                    $arrPost[]=$row;
                }
            }
            return $arrPost;
        }

        function fetchRow(){
            $arrPost=[];
            if($this->stmt->rowCount() > 0){
                $arrPost = $this->stmt->fetch();
            }
            return $arrPost;
        }

        
    }
?>