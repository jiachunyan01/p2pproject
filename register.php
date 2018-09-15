<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!-- 引入bootstrap -->
<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
<!-- 引入bootstrapValidator -->
<link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
 <!-- 引入编译和压缩后的css文件 -->
 <link rel="stylesheet" href="./dist/css/minCss/reglogin.min.css">
</head>
<body>
<!-- 引入头部样式 -->
<?php require_once("TopNav.php")
?>
<nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="网站logo"/>
            </a>
            <span class="register">用户注册</span>
            </div>
        </div><!-- /.container-fluid -->
</nav>
<div class="container reLg">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户注册</h3>
            </div>
            <div class="panel-body">
                <form id="regForm" class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">用&nbsp;户&nbsp;&nbsp;名：</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                    </div>
                </div>
       <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">密&emsp;&emsp;码：</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">确认密码：</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="checkPwd" placeholder="请再次输入密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">手机号码：</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" placeholder="请输入手机号">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">电子邮件：</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" placeholder="请输入电子邮件">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">立即注册</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

<!-- 引入尾部信息 -->
<?php require_once("footer.php");
?>
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