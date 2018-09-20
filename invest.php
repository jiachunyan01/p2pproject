<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!-- 引入bootstrap -->
<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
<!-- 引入jquerypagination.css-->
<link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
 <!-- 引入编译和压缩后的css文件 -->
 <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
 <style>
 .m-pagination-info{
     display:none !important;
 }
 </style>
</head>
<body>
<!-- 引入头部信息 -->
<?php require_once("header.php");
?>
	<div class="container">
		<h4 class="page-title">投资列表</h4>
		<form action="invest_list.html" id="searchForm">
			<div style="margin: 20px 0px;">
					<span class="text-muted">标的状态</span><div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
				  <label class="btn btn-default active">
				    <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
				  </label>
				  <label class="btn btn-default">
				    <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
				  </label>
				  <label class="btn btn-default">
				    <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
				  </label>
				</div>
			</div>
		</form>
		<table class="table el-table table-hover">
			<thead id="gridHead">
				<tr>
					<th>借款人</th>
					<th width="180px">借款标题</th>
					<th>年利率</th>
					<th>金额</th>
					<th>还款方式</th>
					<th>进度</th>
					<th width="80px">操作</th>
				</tr>
			</thead>
			<tbody id="gridBody">
		
            </tbody>
		</table>
        <!-- 分页 -->
		<div style="text-align: center;">
        <div id="page" class="m-pagination"></div>
		</div>
	</div>



<!-- 引入尾部信息 -->
<?php require_once("footer.php");
?>
<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
<!-- 引入jqueryTem -->
<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
<!-- JqueryPagination -->
<script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
<!-- 引入bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 引入自定义js -->
<script src="./dist/js/index.min.js"></script>
<!-- 定义模板 -->
<script id="borrowTmpl" type="text/html">
<tr>
            <td>zhangsan</td>
            <td>${borrowTitle}</td>
            <td class="text-info">${currentRate}%</td>
            <td class="text-info">${borrowAmount}</td>
            <td>${repayment}</td>
            <td>100.00%</td>
            <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
		</tr>


</script>
<script>

    //配置插件的参数
    $("#page").page({
            debug: true,
            showInfo: true,
            pageSize: 5,
            showJump: true,
            showPageSizes: true,
            remote: {
                url: './api/borrowAll.php',
                success: function (data) {
                   //console.log(data)
                    //$("#eventLog").append(' remote callback : ' + JSON.strin
                   var htmlStr=$("#borrowTmpl").tmpl(data.list);
                    //把渲染后的结果更新到页面
                    $("#gridBody").html(htmlStr);
                }
            }
        });

        $("#page").on("pageClicked", function (event, pageIndex) {
            //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
</script>
</body>
</html>