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
            <div class="col-md-3 col-sm-6" id="leftTreeMenu">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            借款项目
                            </a>
                        </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">已完成的借款</a></li>
                                <li><a href="#">还款明细</a></li>
                                <li><a href="#">进行中的借款</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            我的账户
                            </a>
                        </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">账户信息</a></li>
                                <li><a href="#">实名认证</a></li>
                                <li><a href="#">银行卡管理</a></li>
                                <li><a href="#">登录记录</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            资产详情
                            </a>
                        </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">资产流水</a></li>
                                <li><a href="#">充值明细</a></li>
                                <li><a href="#">提现记录</a></li>
                                <li><a href="#">收款明细</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
            <!-- 右侧的内容 -->
            <div class="col-md-9 col-sm-12" id="mainContent">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- 1 -->
                        <div class="row" id="userImg">
                            <div class="col-sm-2 col-xs-12" id="imgLeft">
                                <img src="./images/head_icon.jpg" class="img-thumbnail">
                            </div>
                            <div class="col-sm-10 col-xs-12">
                                <p>昵 称：源代码教育</p>
                                <p>用户名：小强</p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </div>
                        <div class="row" id="money">
                           <div class="col-md-4 col-sm-12">总金额：<span>10000元</span></div>
                           <div class="col-md-4 col-sm-12">可用金额：<span>8000元</span></div>
                           <div class="col-md-4 col-sm-12">冻结金额：<span>2000元</span></div>
                        </div>
                        <div id="but">
                            <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账户提现</button>
                        </div>
                        <div class="row" id="real">
						<div class="col-md-4 col-sm-12">
                                <div class="realContent">
                                        <div class="pull-left">
                                            <img src="images/shiming.png" />
                                        </div>
                                        <div class="pull-left marginLeft">
                                            <h5>实名认证</h5>
                                            <p>
                                                未认证
                                                    <a href="realAuth.html">马上认证</a>

                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p>实名认证之后才能在平台投资</p>
                                    </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                                <div class="realContent">
                                        <div class="pull-left">
                                        <img src="images/shouji.jpg" />
                                        </div>
                                        <div class="pull-left marginLeft">
                                        <h5>手机认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p>可以收到系统操作信息,并增加使用安全性</p>
                                    </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                                <div class="realContent">
                                        <div class="pull-left">
                                        <img src="images/youxiang.jpg" />
                                        </div>
                                        <div class="pull-left marginLeft">
                                            <h5>邮箱认证</h5>
                                            <p>
                                               已认证
                                                    <a href="#">查看</a>

                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p>实名认证之后才能在平台投资</p>
                                    </div>
                        </div>
                        <div class="col-sm-12">
                                <div class="realContent">
                                        <div class="pull-left">
                                        <img src="images/baozhan.jpg" />
                                        </div>
                                        <div class="pull-left marginLeft">
                                            <h5>VIP会员</h5>
												<p>
													普通用户
													<a href="#">查看</a>
												</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p>VIP会员，让你更快捷的投资</p>
                                    </div>
						</div>
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

    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- 引入自定义js -->
	<script src="./dist/js/index.min.js"></script>
</body>

</html>