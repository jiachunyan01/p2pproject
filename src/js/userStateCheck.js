//发起ajax请求到后端验证是否登录
$.get("./api/checkState.php",function (data) {
    //console.log(data);
    //处理前端的业务逻辑
    if(!data.isSuccess){
        alert(data.message);
        location.href="login.php";
    }
},"json");