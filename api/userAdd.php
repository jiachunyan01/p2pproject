<?php
//接收所有数据
$username = $_POST["username"];
$password = md5($_POST["password"]);
$mobile = $_POST["mobile"];
$email = $_POST["email"];

//链接数据库
require_once("conn.php");

//构造sql语句
$sql = "insert into userinfo(username,pwd,mobile,email) values('" . $username . "','" . $password . "','" . $mobile . "','" . $email . "')";
//echo $sql;

//执行sql
$result = mysqli_query($link, $sql);

//根据执行结果返回json给前端
if ($result) {
    $rsArray = ["isSuccess" => true, "message" => "用户注册成功!"];
    echo json_encode($rsArray);
} else {
    $rsArray = ["isSuccess" => false, "message" => "用户注册失败!"];
    echo json_encode($rsArray);
}

?>