<?php 
    function gestor ($dir){
        if(is_dir($dir)){
            $array = [];
            if($db = opendir($dir)){
                while(($file = readdir($db)) !== false){
                    array_push($array,$file);
                }
                closedir($db);
                return $array;
            }
        }
    }
?>