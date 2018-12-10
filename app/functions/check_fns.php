<?php

function getFromCookie(){
    $result = @$_COOKIE["result"];
    return(empty($result)?"Я загадал число, отгадай его":$result);
}

function saveCookie($result){
    setcookie("result",$result,NULL,"/");
}

function delFromCookie(){
    setcookie("result","",-1,"/");
}

function check_number($number){
    $result="";
    if ((int)$number===NUMBER)$result=1;
    elseif ((int)$number>NUMBER)$result=2;
    else $result=3;
    saveCookie($result);
}
