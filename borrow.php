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
 <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
</head>
<body>
<!-- 引入头部信息 -->
<?php require_once("header.php");
?>


<div class="container" id="borrow">
		<div class="row">
			<div class="borrowLeft col-sm-4">
				<div class="borrowTitle backColor1">
					信用贷</div>
				<div class="borrowContent">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#">申请条件</a>
					<p class="colorFont">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
                    </ul>
                    <a href="borrow_apply.php?id=t1">
					<button type="button" class="btn btn-primary btn-info">立即申请</button></a>
				</div>
			</div>
			<div class="borrowLeft col-sm-4">
				<div class="borrowTitle backColor2">车易贷</div>
				<div class="borrowContent">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#">申请条件</a>
					<p class="colorFont">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
                    <a href="borrow_apply.php?id=t2">
				 <button type="button" class="btn btn-primary btn-info">立即申请</button></a>  
				</div>
			</div>
			<div class="borrowLeft col-sm-4">
				<div class="borrowTitle backColor3">
					房易贷</div>
				<div class="borrowContent">
					<p>
						可借金额 <i>¥ 12,000.00</i>
					</p>
					<a href="#">申请条件</a>
					<p class="colorFont">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
                    </ul>
                    <a href="borrow_apply.php?id=t3">
                    <button type="button" class="btn btn-primary btn-info">立即申请</button></a>
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