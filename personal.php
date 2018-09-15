<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- 引入bootstrap -->
	<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
	<!-- 引入编译和压缩后的css文件 -->
	<link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>

<body>
	<!-- 引入头部信息 -->
	<?php require_once("header.php");
?>

	<div class="container">
		<div class="row">
			<!--导航菜单-->
			<div class="col-sm-3">
				<ul id="menu" class="list-group">
					<li class="list-group-item ">
						<a href=""> <span>投资项目</span></a>
					</li>
					<li class="list-group-item">
						<a href=""><span>借款项目</span></a>

					</li>
					<li class="list-group-item">
						<a href="#"><span class="text-title">我的账户</span></a>

					</li>
					<li class="list-group-item">
						<a href="#"><span>资产详情</span></a>

					</li>
					<li class="list-group-item active">
						<a href=""> <span>个人资料</span></a>
					</li>
				</ul>
			</div>
			<!-- 功能页面 -->
			<div class="col-sm-9">
				<div class="panel panel-default">
					<div class="panel-body el-account">
						<div class="el-account-info">
							<div class="pull-left el-head-img">
								<img class="icon" src="images/head_icon.jpg" />
							</div>
							<div class="pull-left el-head">
								<p>昵&emsp;称：源代码教育</p>
								<p>用户名：小强</p>
								<p>最后登录时间：2016-10-25 15:30:10</p>
							</div>
							<div class="clearfix"></div>
						</div>

						<div style="margin: 10px 2px;" class="row h4">
							<div class="col-sm-4">
								总金额：<span class="text-primary">10000元</span>
							</div>
							<div class="col-sm-4">
								可用金额：<span class="text-primary">8000元</span>
							</div>
							<div class="col-sm-4">
								冻结金额：<span class="text-primary">2000元</span>
							</div>
						</div>

						<div style="text-align: center;width: 400px;margin:30px auto 0px auto;">
							<a class="btn btn-primary btn-lg" href="">账户充值</a>
							<a class="btn btn-danger btn-lg" href="">账户提现</a>
						</div>

						<div class="el-account-info">
							<div class="row">
								<div class="col-sm-4">
									<div class="el-accoun-auth">
										<div class="el-accoun-auth-left">
											<img src="images/shiming.png" />
										</div>
										<div class="el-accoun-auth-right">
											<h5>实名认证</h5>
											<p>
										
												未认证
												<a href="">马上认证</a>

											</p>
										</div>
										<div class="clearfix"></div>
										<p class="info">实名认证之后才能在平台投资</p>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="el-accoun-auth">
										<div class="el-accoun-auth-left">
											<img src="images/shouji.jpg" />
										</div>
										<div class="el-accoun-auth-right">
											<h5>手机认证</h5>
											<p>
												已认证
												<a href="#">查看</a>
											</p>
										</div>
										<div class="clearfix"></div>
										<p class="info">可以收到系统操作信息,并增加使用安全性</p>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="el-accoun-auth">
										<div class="el-accoun-auth-left">
											<img src="images/youxiang.jpg" />
										</div>
										<div class="el-accoun-auth-right">
											<h5>邮箱认证</h5>
											<p>
												已认证
												<a href="#">查看</a>
											</p>
										</div>
										<div class="clearfix"></div>
										<p class="info">您可以设置邮箱来接收重要信息</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="el-accoun-auth">
										<div class="el-accoun-auth-left">
											<img src="images/baozhan.jpg" />
										</div>
										<div class="el-accoun-auth-right">
											<h5>VIP会员</h5>
											<p>
												普通用户
												<a href="#">查看</a>
											</p>
										</div>
										<div class="clearfix"></div>
										<p class="info">VIP会员，让你更快捷的投资</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 引入尾部信息 -->
	<?php require_once("footer.php");
?>
	<!-- 引入jquery -->
	<script src="./lib/jquery/jquery.min.js"></script>
	<!-- 引入bootstrap.js -->
	<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- 引入自定义js -->
	<script src="./dist/js/index.min.js"></script>
</body>

</html>