<?php

class Redirect{

    public static function redirect($url){
        header("location:" . $url);
        exit();
    }
}


?>