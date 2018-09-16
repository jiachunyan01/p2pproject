<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登陆界面</title>
    <!-- 引入bootstrap -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/reglogin.min.css">
</head>
<body>
<!-- 引入头部 -->
<?php require_once("TopNav.php");
?>
<nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="网站logo"/>
            </a>
            <span class="register">用户登录</span>
            </div>
        </div><!-- /.container-fluid -->
</nav>
<div class="container reLg">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户登录</h3>
            </div>
            <div class="panel-body">
                <form id="loginForm" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">用户名：</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                    </div>
                </div>
       <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">密&emsp;码：</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                    </div>
                </div>
           
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">立即登录</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

<!-- 引入尾部 -->
<?php require_once("footer.php");
?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">标题</h4>
      </div>
      <div class="modal-body" id="msgContent">
      内容
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭按钮</button>

      </div>
    </div>
  </div>
</div>
<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
<!-- 引入bootstrapValidator.js -->
<script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
<!-- 引入bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 引入自定义js -->
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/checkFrom.min.js"></script>
</body>
</html>