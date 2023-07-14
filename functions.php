<?php 
    function navActive($val){
        return $_SERVER['REQUEST_URI'] === $val;
    }

    function dd($var){
        echo "<pre>";
            var_dump($var);
        echo "<pre>";
        die();
    }

    function fetchRows($obj){
        $arrPost=[];
        
        if($obj->rowCount() > 1){
            foreach ($obj->fetchAll() as $key => $row) {
                $arrPost[]=$row;
            }
        }
        else{
            $arrPost['message'] = "No record Found";
        }
        return $arrPost;
    }

    function fetchRow($obj){
        return $obj->fetch();
    }

    