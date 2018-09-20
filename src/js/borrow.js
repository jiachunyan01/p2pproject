//获取借款类型

var reqUrl=location.href;
var borrowType=reqUrl.split("=")[1];
$("#borrowType").val(borrowType);


//借款信息前端业务的处理
$("#btnSubmit").on("click",function(){
    //获取表单的值
    var formData=$("#borrowForm").serialize();
    //发送ajax请求
    $.post("./api/borrowAdd.php",formData,function(result){
        //根据结果处理前端业务
        if(result.isSuccess){
            alert(result.message);
            location.href="borrow_list.php"
        }else{
            alert(result.message);
        }
    },"json")
})

