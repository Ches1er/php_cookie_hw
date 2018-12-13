<?php

function getControllerAction($contr_action){

    include FUNC."view_fns.php";
    include FUNC."check_fns.php";

    $contr_action_arr = explode("@",$contr_action);
    include CONTROLLERSPATH."controller_".$contr_action_arr[0].".php";
    call_user_func("action_".$contr_action_arr[1]);
}

function navigate(){
    $url = $_SERVER["REQUEST_URI"];
    $url = trim(explode("?",$url)[0],"/");
    $pathes = include "root_config.php";
    foreach ($pathes as $path=>$contr_action){
        if ($path===$url)return getControllerAction($contr_action);
    }
    return getControllerAction("error@404");
}