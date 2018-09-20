$(function(){
     //pc点击事件
     $("#clickBtn").on("click",function(){
        //单间按切换样式
        $("#personal").toggleClass("active");
        //如果有active说明已隐藏，文字改为显示
        if($("#personal").hasClass("active")){
                 $(this).text("显示");
              }
              else{
                 $(this).text("隐藏");
              }
      });
           //移动端滑动事件
           var x1,y1;
         $(window).on("touchstart",function (e) {
             x1=e.originalEvent.changedTouches[0].clientX;
             y1=e.originalEvent.changedTouches[0].clientY;
         });
           //离开屏幕
           $(window).on("touchend",function (e) {
             var x2=e.originalEvent.changedTouches[0].clientX;
             var y2=e.originalEvent.changedTouches[0].clientY;
              //计算滑动的距离
              var dx=x2-x1;
              //不管左滑动还是右滑动，横向距离都有一个值，有效的滑动100;
              if(Math.abs(dx)>=100){
                  //console,log("ok");
                  $("#clickBtn").trigger("click")
              }
         
      });
      
});