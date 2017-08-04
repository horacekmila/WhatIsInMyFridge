<?php
spl_autoload_register(function ($name) {
    if(file_exists("oop/".$name.".php")){
        require_once("oop/".$name.".php");
        return true;   
    }
    else{return false;}
});
