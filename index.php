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
<!-- 轮播图 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/banner01.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="images/banner02.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- 简介 -->
<div class="container feature">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
			</div>
		</div>
<!-- 投资信息 -->
<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix"> 
                <h1 class="pull-left">进行中借款</h1>
                <p><a class="pull-right" href="#">进入投资列表</a></P>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>						
                    <th>借款人</th>
                    <th class="hd">借款标题</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th class="hd">还款方式</th>
                    <th>进度</th>
                    <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>					
                    <td>张三</td>
                    <td class="hd">给我2000元度过难关</td>
                    <td>10.00%</td>
                    <td>2,000.00</td>
                    <td class="hd">按月分期还款</td>
                    <td>78.00%</td>
                    <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
                    </tr>
                    <tr>					
                    <td>张三</td>
                    <td class="hd">给我2000元度过难关</td>
                    <td>10.00%</td>
                    <td>2,000.00</td>
                    <td class="hd">按月分期还款</td>
                    <td>78.00%</td>
                    <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
                    </tr>
                </tbody>
                </table>
        </div>
    </div>
<!-- 新闻文章 -->
<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h1 class="pull-left">企业最新资讯</h1>
                    <p><a class="pull-right" href="#">更多咨询</a></p>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h1 class="pull-left">用户反馈</h1>
										<p><a class="pull-right" href="#">更多咨询</a></p>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h1 class="pull-left">理财经验</h1>
										<p><a class="pull-right" href="#">更多咨询</a></p>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h1 class="pull-left">活动分享</h1>
                   <p><a class="pull-right" href="#">更多咨询</a></p>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
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