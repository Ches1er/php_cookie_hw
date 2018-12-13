<?php

function _redirect_($url){
    header("Location:{$url}");
    return "";
}

function action_define_num(){
    $num = rand(1,100);
    saveCookie("num",$num);
    _redirect_("/");
}

function action_index(){
    $data=[
        "title"=>"Угадай число",
        "result"=>getFromCookie(),
        "picked_num"=>@$_COOKIE["num"],
        "button"=>empty($_COOKIE["num"])?true:false
    ];
    delFromCookie("result");
    echo getViewWTempate("template","main",$data);
}

function action_check(){
    $number = $_POST["number"];
    saveCookie("result",$number);
    _redirect_("/");
}

function action_new_game(){
    delFromCookie("num");
    _redirect_("/");
}


