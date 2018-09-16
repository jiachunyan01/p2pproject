<?php
//接收所有数据
$username=$_POST["username"];
$password=md5($_POST["password"]);

//链接数据库
require_once("conn.php");

//构造sql语句

$sql="select * from userinfo where username='".$username."' and pwd='".$password."'";

//echo $sql;

//执行sql
$result=mysqli_query($link,$sql);


//查询获取到的结果集
$rs=mysqli_fetch_assoc($result);
//var_dump($rs);


//根据执行结果返回json给前端
if($rs!=null){
    $rsArray=["isSuccess"=>true,"message"=>"用户登录成功!"];
    echo json_encode($rsArray);
}
else{
    $rsArray=["isSuccess"=>false,"message"=>"用户登录失败!"];
    echo json_encode($rsArray);
}
//释放内存
mysqli_free_result($result);
require_once("freeClose.php");
?>