

//借款页面自动发ajax到后台的api获取当前用户的借款信息
$.get("./api/borrowList.php",function(data){
    //console.log(data)
    //渲染模板
    var htmlStr=$("#borrowTmpl").tmpl(data);
    //console.log(htmlStr)
    //更新页面
    $("#borrowData").html(htmlStr);
    },"json")