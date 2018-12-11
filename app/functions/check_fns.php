<?php

function getFromCookie(){
    return(empty(@$_COOKIE["result"])?"Я загадал число, отгадай его":@$_COOKIE["result"]);
}

function saveCookie($result,$number){
    setcookie("result",$result,NULL,"/");
    setcookie("number",$number,NULL,"/");
}

function delFromCookie(){
    setcookie("result","",-1,"/");
    setcookie("number","",-1,"/");
}

function check_number($number){
    if ((int)$number===NUMBER)$result=1;
    elseif ((int)$number>NUMBER)$result=2;
    else $result=3;
    saveCookie($result,$number);
}
