<?php

function getFromCookie(){
    return(empty(@$_COOKIE["result"])?"Для того, чтоб загадать число, нажмите на кнопку":@$_COOKIE["result"]);
}

function saveCookie($name,$value){
    setcookie($name,$value,NULL,"/");
}

function delFromCookie($name){
    setcookie($name,"",-1,"/");
}

function check_number($number){
    if ((int)$number==$_COOKIE["num"])$result=1;
    elseif ((int)$number>$_COOKIE["num"])$result=2;
    else $result=3;
    saveCookie("result",$result);
    saveCookie("picked_number",$number);
}
