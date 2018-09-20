<?php
//连接数据库
require_once("./conn.php");

//构造查询的sql语句
session_start();
$userid=$_SESSION["userid"];
$sql="select * from borrowinfo where userid=$userid";

// 执行sql查询
$result=mysqli_query($link,$sql); 

//数据
$data=[
    ["value"=> 0,"name"=>'房易贷'],
    ["value"=> 0,"name"=>'车易贷'],
    ["value"=> 0,"name"=>'信用贷']
   ];
//获取结果集

while($rs=mysqli_fetch_assoc($result)){
    if($rs["borrowType"]=="t1"){
      $data[2]["value"]+=$rs["borrowAmount"];
    }
    else if($rs["borrowType"]=="t2"){
        $data[1]["value"]+=$rs["borrowAmount"];
      }
     else if($rs["borrowType"]=="t3"){
        $data[0]["value"]+=$rs["borrowAmount"];
      }
}
//var_dump($data)
//返回的结果
$result=[
    "title"=>['房易贷','车易贷','信用贷'],
    "data"=>$data
];
echo json_encode($result)
?>