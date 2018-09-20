<?php
//接收前端传的值
$borrowType=$_POST["borrowType"];
$borrowAmount=$_POST["borrowAmount"];
$currentRate=$_POST["currentRate"];
$monthes2Return=$_POST["monthes2Return"];
$repayment=$_POST["repayment"];
$minAmount=$_POST["minAmount"];
$maxAmount=$_POST["maxAmount"];
$rewardAmount=$_POST["rewardAmount"];
$disableDays=$_POST["disableDays"];
$borrowTitle=$_POST["borrowTitle"];
$description=$_POST["description"];
session_start();
$userid=$_SESSION["userid"];
//构造sql语句
$sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";
//链接数据库
require_once("./conn.php");
//执行sql语句
$result=mysqli_query($link,$sql);
//根据执行结果返回数据给前端
if($result){
    //成功
    $rs=["isSuccess"=>true,"message"=>"借款信息提交成功"];
    echo json_encode($rs);
    //失败
}else{
    $rs=["isSuccess"=>false,"message"=>"借款信息提交失败"];
    echo json_encode($rs);

}
//关闭数据库链接
require_once("./freeClose.php")
?>