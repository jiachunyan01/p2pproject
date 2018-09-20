<?php
//链接数据库
require_once("./conn.php");
//构造sql语句
//根据用户id查询
session_start();
$userid=$_SESSION["userid"];
$sql="select * from borrowinfo where userid=$userid";


//执行sql查询
$result=mysqli_query($link,$sql);
//获取结果集
$borrowData=[];
while($rs=mysqli_fetch_assoc($result)){
array_push($borrowData,$rs);
}
//结果集发给前端

echo json_encode($borrowData)
?>