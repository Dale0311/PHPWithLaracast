<?php 
    class Blog{
        private $pdo;
        private $table;
        function __construct($pdo,$table)
        {
            $this->pdo = $pdo;
            $this->table = $table;
        }
        function getBlog($user_id=0)
        {
            // i can dynamically create the logic here, using anonymous fn
            $query = $user_id===0? "SELECT * FROM $this->table" : "SELECT * FROM $this->table WHERE user_id=?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$user_id]);
            return $stmt;
        }
    }
?>
