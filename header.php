<!-- 头部 -->
<?php require_once("TopNav.php")
?>
        <!-- 主导航 -->
        <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt=""/>
            </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav" id="mainMenu">
            <li class="active"><a href="./index.php?menuid=1">首页</a></li>
            <li><a href="./invest.php?menuid=2">我要投资</a></li>
            <li><a href="./borrow.php?menuid=3">我要借款</a></li>
            <li><a href="./personal.php?menuid=4">个人中心</a></li>
            <li><a href="#">新手指引</a></li>
            <li><a href="#">关于我们</a></li>
        </ul>
            
        </div><!-- /.container-fluid -->
        </nav>
<script>
//点击当前栏目就让当前栏目显示高亮
var reqUrl=location.href;
//console.log(reqUrl)
var menuid=reqUrl.split("=")[1];
//console.log(menuid);
$("#mainMenu li").eq(menuid-1).addClass("active").siblings("li").removeClass("active");
</script>
