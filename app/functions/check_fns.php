<?php

function getFromCookie(){
    return(empty(@$_COOKIE["result"])?NULL:@$_COOKIE["result"]);
}

function saveCookie($name,$value){
    setcookie($name,$value,NULL,"/");
}

function delFromCookie($name){
    setcookie($name,"",-1,"/");
}

