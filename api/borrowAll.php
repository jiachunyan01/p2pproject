<?php
   header("Content-type:text/html;charset=utf-8");
   //1. 连接数据库
   require_once("./conn.php");

   //2. 构造总记录数查询的sql语句
   $sql="select * from borrowinfo";

   //3. 执行sql查询
   $result=mysqli_query($link,$sql); 

   //获取总的记录数
   $total=mysqli_num_rows($result);  

   //接收分页参数
   $pageIndex=$_GET["pageIndex"];
   $pageSize=$_GET["pageSize"];

   //构造分页的sql语句

   $skipNum=$pageSize*$pageIndex; 
   $sql.=" limit $skipNum,$pageSize";
   $result=mysqli_query($link,$sql);

   //4. 遍历获取结果集
   $borrowData=[]; 
   while ($rs=mysqli_fetch_assoc($result)) {
      array_push($borrowData,$rs);
   }

   //把结果集转换为json发给前端
   //按照分页插件的要求封装结果
   $result=[
    "total"=>$total,
    "list"=>$borrowData
   ];
   echo json_encode($result);
  // echo "总记录数".$total;
   //var_dump($borrowData)
?>