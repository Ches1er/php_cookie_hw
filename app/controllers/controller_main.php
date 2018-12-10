<?php

include FUNC."view_fns.php";
include FUNC."check_fns.php";

function action_index(){
    $data=[
        "title"=>"Угадай число",
        "result"=>getFromCookie()
    ];
    delFromCookie();
    echo getViewWTempate("template","main",$data);
}

function action_check(){
    $number = $_POST["number"];
    check_number($number);
    header("Location:/");
    return "";
}


