<?php
//启动session
    session_start();
    //判断
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $result=["isSuccess"=>true,"message"=>"登陆成功","username"=>$username];
    echo json_encode($result);
} else {
    $result=["isSuccess"=>false,"message"=>"登陆失败"];
    echo json_encode($result);
}

?>