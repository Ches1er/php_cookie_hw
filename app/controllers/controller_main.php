<?php

function action_define_num(){
    $num = rand(1,100);
    saveCookie("num",$num);
    header("Location:/");
    return "";
}

function action_index(){
    $data=[
        "title"=>"Угадай число",
        "result"=>getFromCookie()
    ];
    delFromCookie("result");
    delFromCookie("number");
    echo getViewWTempate("template","main",$data);
}

function action_check(){
    $number = $_POST["number"];
    check_number($number);
    header("Location:/");
    return "";
}


