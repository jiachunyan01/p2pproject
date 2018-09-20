//初始化echarts
var mycharts = echarts.init(document.getElementById('mybox'));

//配置报表的选项和数据
var optionObj = {
    title: {
        text: '借款类型的金额统计',
        subtext: '2018-09统计',
        x: 'center'
    },
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        //图例
        data: []
    },
    toolbox: {
        show: true,
        feature: {
            mark: { show: true },
            dataView: { show: true,readOnly: false },
            magicType: {
                show: true,
                type: ['pie','funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore: { show: true },
            saveAsImage: { show: true }
        }
    },
    //是否可以重新计算
    calculable: true,
    series: [
        {
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%','60%'],
            //数据
            data: []
        }
    ]
};;

//为echarts对象加载数据 
mycharts.setOption(optionObj);

//发ajax请求数据
$.get("./api/borrowCharts.php",function(result){
console.log(result);
optionObj.legend.data=result.title;
optionObj.series[0].data=result.data;
mycharts.hideLoading();
mycharts.setOption(optionObj);
},"json")