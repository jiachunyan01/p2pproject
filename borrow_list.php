<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 验证用户身份是否合法 -->
    <script src="./dist/js/userStateCheck.min.js"></script>
</head>

<body>
    <!-- 引入头部信息 -->
    <?php
    require_once("header.php");
    ?>
    <div class="container" id="personal">
        <div class="row">
            <!-- 左侧的菜单 -->
            <?php
           require_once("leftMenu.php")
           ?>
            <!-- 右侧的内容 -->
            <div class="col-sm-9 col-xs-12" id="mainContent">
                <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">我的借款信息列表</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        <table class="table table-striped __web-inspector-hide-shortcut__">
                        <thead>
                        <tr>
                            <th>标题</th>
                            <th>时间</th>
                            <th>借款金额(元)</th>
                            <th>期限</th>
                            <th>利率</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody id="borrowData">
                        
                        </tbody>
                    </table>

                     
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 引入页脚 -->
    <?php
    require_once("footer.php");
    ?>
<!-- 引入jqueryTem -->
<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义js -->
    <script src="./dist/js/index.min.js"></script>
    <!--交互特效 -->
    <script src="./dist/js/personal.min.js"></script>
    <!--借款信息的交互 -->
     
     <script src="./dist/js/borrowList.min.js"></script>
<!-- 定义模板 -->
<script id="borrowTmpl" type="text/html">
<tr>
            <td>${borrowTitle}</td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}</td>
            <td>${monthes2Return}</td>
            <td>${currentRate}%</td>
            <td>
                <label class="text-muted">待发布</label>
            </td>
        </tr>
</script>


</body>

</html>