<!-- 头部 -->
<nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="homepage"><a href="./index.php">首页</a></li>
                
                <li><a href="#">帮助</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='images/contract.png'/>">联系客服</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
<!-- 引入jquery -->
 <script src="./lib/jquery/jquery.min.js"></script> 
<!--  g根据当前状态显示不同菜单 -->
<script>
$.get("./api/checkState.php",function(data){
//console.log(data);
//处理前端逻辑
if(data.isSuccess){
    //显示登录后的菜单
    var htmlStr=`<li><a href="#">${data.username}</a></li>
                <li><a href="#">赶快充值</a></li>
                <li><a href="./api/loginOut.php">注销</a></li>
`;
$("#homepage").after(htmlStr);
}else{
  //显示登陆前的菜单
  var htmlStr=`<li><a href="./register.php">注册</a></li>
  <li><a href="./login.php">登录</a></li>`;
  $("#homepage").after(htmlStr);
}


},"json")

</script>

 