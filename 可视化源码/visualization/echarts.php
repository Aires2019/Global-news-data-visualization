<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/3.4.0/echarts.min.js"></script>
<script type="text/javascript" src="../js/china.js"></script>
<script src="http://echarts.baidu.com/resource/echarts-liquidfill-1.0.4/dist/echarts-liquidfill.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/map/js/world.js"></script>
<link rel="stylesheet" href="../css/style.css">
<style>
    .table1 table {
	border-collapse: collapse;
	margin: 0px auto;
	/*background: black;*/
	/*color: white;*/
    }
    .table1 th{ 
        border-bottom: 1px solid #407abd; 
        font-size: 14px; 
        text-align: center; 
        padding: 6px 0; 
        color: rgba(255,255,255,.8)}

    .table2 table {
        border-collapse: collapse;
        margin: 0px auto;
        text-align: center;
        animation: mymove 8s linear infinite;
        border-spacing: 0;
    }
    .table2 tr:last-child td{border: none;}
    .table2 tr,.table2 td {
        border-bottom: 1px dotted#407abd;
        font-size: 12px; 
        padding:6px 0;
        text-align: center; 
        color: rgba(255,255,255,.6);
        margin-left: 0px auto;
    }
    .table2 tr:last-child td{border: none;}
    .table2{
        overflow: hidden;
        height: 130px;}
        @Keyframes mymove {
            0% {
                transform: translateY(0%);
            }
            to {
                transform: translateY(-100%);
            }
        }
</style>
</head>
<body>
	<div class="head clearfix">
		<div class="home"><a href="#"><img src="../images/Home.png" width="28"> <i> 首页</i></a></div>
	<div class="menu menu1 pulll_left">
		<ul>
			<li><a href="../sql/link.php">新闻相关链接 </a></li>
			<li><a href="https://www.bilibili.com/video/BV1WZ4y1k7aZ?spm_id_from=333.337.search-card.all.click">俄乌冲突相关解读</a></li>

		</ul>
		</div>
	<h1 class="pulll_left">全球新闻大数据监控平台</h1>
		<div class="menu menu2 pulll_left">
		<ul>
			<li><a href="#">功能菜单一 </a></li>
			<li><a href="#">功能菜单二</a></li>
		</ul>
		</div>
		
		<div class="time" id="showTime">2022/8/29 17:00:12</div>
		<script>
var t = null;
    t = setTimeout(time,1000);//開始运行
    function time()
    {
       clearTimeout(t);//清除定时器
       dt = new Date();
		var y=dt.getFullYear();
		var mt=dt.getMonth()+1;
		var day=dt.getDate();
       var h=dt.getHours();//获取时
       var m=dt.getMinutes();//获取分
       var s=dt.getSeconds();//获取秒
       document.getElementById("showTime").innerHTML = y+"/"+mt+"/"+day+" "+h+":"+m+":"+s+"";
       t = setTimeout(time,1000); //设定定时器，循环运行     
    } 

</script>
</div>

<div class="mainbox">
	<ul class="clearfix nav1">
		<li style="width: 22%">
		<div class="box">
			<div class="tit">1</div>
			<div class="boxnav" style="height: 200px;">

            </div>
        </div>
<div class="box">
    <div class="tit">俄乌每月冲突与合作的占比</div><!--仪表盘-->
        <div class="boxnav" id="main4" style="height: 250px;">
        </div>
    </div>
    <li style="width: 56%">
		<div class="box">
			<div class="boxnav mapc" style="height: 550px; position: relative">
				<div class="mapnav"><!--地图上方文字-->
                    <ul>
                        <li><div><span>新闻总数</span><p>21504131</p></div></li>
                        <li><div><span>俄乌冲突</span><p>1333756</p></div></li>
                        <li><div><span>最少国家</span><p>19532</p></div></li>
                        <li><div><span>亚洲国家</span><p>521711</p></div></li>
                        <li><div><span>欧洲国家</span><p>13552</p></div></li>
                    </ul>		
				</div>
			    <div class="map" id="map"><!--地图-->
			    </div>
			</div>
		</li>
		<li style="width: 22%">
		
		<div class="box">
			<div class="tit">3</div>
			<div class="boxnav" style="height: 200px;">
            <div class="table1">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                <th>月份</th>
                <th>提及次数</th>
                <th>数据源数值</th>
                <th>提及文章数</th>
                </tr>
            </thead>
            </table>
            </div>

        <div class="table2">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                <td>一月</td>
                <td>84021</td>
                <td>24521</td>
                <td>83003</td>
                </tr>
                
                <tr>
                <td>二月</td>
                <td>283057</td>
                <td>85902</td>
                <td>279020</td>
                </tr> <tr>
                <td>三月</td>
                <td>474538</td>
                <td>146808</td>
                <td>467772</td>
                </tr> <tr>
                <td>四月</td>
                <td>297497</td>
                <td>94006</td>
                <td>293730</td>
                </tr> <tr>
                <td>五月</td>
                <td>207943</td>
                <td>66450</td>
                <td>205487</td>
                </tr>
                <tr>
                <td>六月</td>
                <td>149372</td>
                <td>46111</td>
                <td>147325</td>
                </tr>
                
                <tr>
                <td>七月</td>
                <td>92784</td>
                <td>29375</td>
                <td>91309</td>
                </tr>
            </tbody>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                <td>一月</td>
                <td>84021</td>
                <td>24521</td>
                <td>83003</td>
                </tr>
                
                <tr>
                <td>二月</td>
                <td>283057</td>
                <td>85902</td>
                <td>279020</td>
                </tr> <tr>
                <td>三月</td>
                <td>474538</td>
                <td>146808</td>
                <td>467772</td>
                </tr> <tr>
                <td>四月</td>
                <td>297497</td>
                <td>94006</td>
                <td>293730</td>
                </tr> <tr>
                <td>五月</td>
                <td>207943</td>
                <td>66450</td>
                <td>205487</td>
                </tr>
                <tr>
                <td>六月</td>
                <td>149372</td>
                <td>46111</td>
                <td>147325</td>
                </tr>
                
                <tr>
                <td>七月</td>
                <td>92784</td>
                <td>29375</td>
                <td>91309</td>
                </tr>
            </tbody>
            </table>
            </div>
            </div>
			</div>

			<div class="box">
			<div class="tit">俄乌冲突新闻占总新闻比例</div>
			<div class="boxnav" style="height: 250px;">
			<div class="" style="height: 190px" id="main5"></div>
				<div class="leidanav">
				<ul class="clearfix">
					<li><span>文本1</span><p>43</p></li>
					<li><span>文本2</span><p>100</p></li>
					<li><span>文本3</span><p>28</p></li>
					<li><span>文本4</span><p>3</p></li>
					<li><span>文本5</span><p>150</p></li>
					</ul>
				</div>
			</div>
			</div>
		
		</li>
		</ul>
		
		<div class="box" style="padding: 20px 0;">
		<ul class="clearfix nav2 ">
		<li style="width:35%"><div class="tit01">俄乌冲突每月有关新闻数量</div>
			<div class="ftechart" id="main1">
            </div>
			</li>
		<li style="width:35%">
			<div class="tit01">俄乌冲突不同情绪占比折线图</div>
			<div class="ftechart" id="main2">
			</div>
			</li>
		<li style="width:25%"><div class="tit01">俄乌冲突不同情绪占比饼图</div>
        <div class="ftechart" id="main3"></div></li>
		</div>
	</div>

<script type="text/javascript">
    var arr = new Array();//数字
    var res = new Array();//名字
    var option;

    function getNumber() {
        $.ajax({
            type: "post",
            async: false, //异步执行
            url: "../sql/totalnews.php", //SQL数据库文件
            data: {}, //发送给数据库的数据
            dataType: "json", //json类型

            success: function(result) {
                if (result) {
                    for (var i = 0; i < result.length; i++) {
                        res.push(result[i].monthyear);
                        arr.push(result[i].num);
                    }
                }
            },
            error: function() {
                alert('Ajax request 发生错误');
            }
        })
        return res, arr;
    }
    //执行异步请求
    getNumber();
    var myChart = echarts.init(document.getElementById('main1'));
    var option = {
        tooltip: {
        trigger: 'axis',
        axisPointer: {type: 'shadow'},
        formatter:'{b}新闻数量' ,
    },
    legend: {
            x: 'center',
            y: '10',
            icon: 'circle',
            itemGap:8,
            textStyle: {color: 'rgba(255,255,255,1)'},
            itemWidth: 10,
            itemHeight: 10,
        },
    grid: {
        left: '0',
            top: '40',
        right: '15',
        bottom: '0',
        containLabel: true
    },
    xAxis: {
        type: 'category',
        data: ['一月', '二月', '三月', '四月', '五月', '六月', '七月'],
        axisLine: {show:false},
        
        axisLabel: {
            textStyle: {
            color:'rgba(255,255,255,.5)',

            }
        },
        },

        yAxis: {
        type: 'value',
        splitNumber:4,
        axisLine: { show: false },
        axisTick: {show: false},
        splitLine: {
            show: true,
            lineStyle: {
            color: 'rgba(255,255,255,0.05)'
            }
        },
        axisLabel:  {
            textStyle: {
                    color: "rgba(255,255,255,.5)",
                        },
                    },
        },
    series: [ {
        name: '每月有关新闻数量',
        type: 'bar',
        barWidth: '55%',
        itemStyle: {
            normal: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                    offset: 0,
                    color: '#8bd46e'
                }, {
                    offset: 1,
                    color: '#03b48e'
                }]),
                barBorderRadius: 11,
            }
            
            },
        data: arr
    
    }]
    };
    myChart.setOption(option);
</script>

<script type="text/javascript">
    var arr = new Array();//数字
    var res = new Array();//名字
    var ses=[];
    function getNumber() {
        $.ajax({
            type: "post",
            async: false, //异步执行
            url: "../sql/countries.php", //SQL数据库文件
            data: {}, //发送给数据库的数据
            dataType: "json", //json类型

            success: function(result) {
                if (result) {
                    for (var i = 0; i < result.length; i++) {
                        ses.push({
                        name: result[i].Countrychn,
                        value: result[i].count_country});
                    }
                }
            },
            error: function() {
                alert('Ajax request 发生错误');
            }
        })
        //return res, arr;
        return ses;
    }
    //执行异步请求
    getNumber();
    var myChart = echarts.init(document.getElementById('map'));
            let nameMap = {
                Afghanistan: '阿富汗',
                Singapore: '新加坡',
                Angola: '安哥拉',
                Albania: '阿尔巴尼亚',
                'United Arab Emirates': '阿联酋',
                Argentina: '阿根廷',
                Armenia: '亚美尼亚',
                'French Southern and Antarctic Lands':
                    '法属南半球和南极领地',
                Australia: '澳大利亚',
                Austria: '奥地利',
                Azerbaijan: '阿塞拜疆',
                Burundi: '布隆迪',
                Belgium: '比利时',
                Benin: '贝宁',
                'Burkina Faso': '布基纳法索',
                Bangladesh: '孟加拉国',
                Bulgaria: '保加利亚',
                'The Bahamas': '巴哈马',
                'Bosnia and Herzegovina': '波斯尼亚和黑塞哥维那',
                Belarus: '白俄罗斯',
                Belize: '伯利兹',
                Bermuda: '百慕大',
                Bolivia: '玻利维亚',
                Brazil: '巴西',
                Brunei: '文莱',
                Bhutan: '不丹',
                Botswana: '博茨瓦纳',
                'Central African Republic': '中非共和国',
                Canada: '加拿大',
                Switzerland: '瑞士',
                Chile: '智利',
                China: '中国',
                'Ivory Coast': '象牙海岸',
                Cameroon: '喀麦隆',
                'Democratic Republic of the Congo': '刚果民主共和国',
                'Republic of the Congo': '刚果共和国',
                Colombia: '哥伦比亚',
                'Costa Rica': '哥斯达黎加',
                Cuba: '古巴',
                'Northern Cyprus': '北塞浦路斯',
                Cyprus: '塞浦路斯',
                'Czech Republic': '捷克共和国',
                Germany: '德国',
                Djibouti: '吉布提',
                Denmark: '丹麦',
                'Dominican Republic': '多明尼加共和国',
                Algeria: '阿尔及利亚',
                Ecuador: '厄瓜多尔',
                Egypt: '埃及',
                Eritrea: '厄立特里亚',
                Spain: '西班牙',
                Estonia: '爱沙尼亚',
                Ethiopia: '埃塞俄比亚',
                Finland: '芬兰',
                Fiji: '斐',
                'Falkland Islands': '福克兰群岛',
                France: '法国',
                Gabon: '加蓬',
                'United Kingdom': '英国',
                Georgia: '格鲁吉亚',
                Ghana: '加纳',
                Guinea: '几内亚',
                Gambia: '冈比亚',
                'Guinea Bissau': '几内亚比绍',
                Greece: '希腊',
                Greenland: '格陵兰',
                Guatemala: '危地马拉',
                'French Guiana': '法属圭亚那',
                Guyana: '圭亚那',
                Honduras: '洪都拉斯',
                Croatia: '克罗地亚',
                Haiti: '海地',
                Hungary: '匈牙利',
                Indonesia: '印度尼西亚',
                India: '印度',
                Ireland: '爱尔兰',
                Iran: '伊朗',
                Iraq: '伊拉克',
                Iceland: '冰岛',
                Israel: '以色列',
                Italy: '意大利',
                Jamaica: '牙买加',
                Jordan: '约旦',
                Japan: '日本',
                Kazakhstan: '哈萨克斯坦',
                Kenya: '肯尼亚',
                Kyrgyzstan: '吉尔吉斯斯坦',
                Cambodia: '柬埔寨',
                Kosovo: '科索沃',
                Kuwait: '科威特',
                Laos: '老挝',
                Lebanon: '黎巴嫩',
                Liberia: '利比里亚',
                Libya: '利比亚',
                'Sri Lanka': '斯里兰卡',
                Lesotho: '莱索托',
                Lithuania: '立陶宛',
                Luxembourg: '卢森堡',
                Latvia: '拉脱维亚',
                Morocco: '摩洛哥',
                Moldova: '摩尔多瓦',
                Madagascar: '马达加斯加',
                Mexico: '墨西哥',
                Macedonia: '马其顿',
                Mali: '马里',
                Myanmar: '缅甸',
                Montenegro: '黑山',
                Mongolia: '蒙古',
                Mozambique: '莫桑比克',
                Mauritania: '毛里塔尼亚',
                Malawi: '马拉维',
                Malaysia: '马来西亚',
                Namibia: '纳米比亚',
                'New Caledonia': '新喀里多尼亚',
                Niger: '尼日尔',
                Nigeria: '尼日利亚',
                Nicaragua: '尼加拉瓜',
                Netherlands: '荷兰',
                Norway: '挪威',
                Nepal: '尼泊尔',
                'New Zealand': '新西兰',
                Oman: '阿曼',
                Pakistan: '巴基斯坦',
                Panama: '巴拿马',
                Peru: '秘鲁',
                Philippines: '菲律宾',
                'Papua New Guinea': '巴布亚新几内亚',
                Poland: '波兰',
                'Puerto Rico': '波多黎各',
                'North Korea': '北朝鲜',
                Portugal: '葡萄牙',
                Paraguay: '巴拉圭',
                Qatar: '卡塔尔',
                Romania: '罗马尼亚',
                Russia: '俄罗斯',
                Rwanda: '卢旺达',
                'Western Sahara': '西撒哈拉',
                'Saudi Arabia': '沙特阿拉伯',
                Sudan: '苏丹',
                'South Sudan': '南苏丹',
                Senegal: '塞内加尔',
                'Solomon Islands': '所罗门群岛',
                'Sierra Leone': '塞拉利昂',
                'El Salvador': '萨尔瓦多',
                Somaliland: '索马里兰',
                Somalia: '索马里',
                'Republic of Serbia': '塞尔维亚',
                Suriname: '苏里南',
                Slovakia: '斯洛伐克',
                Slovenia: '斯洛文尼亚',
                Sweden: '瑞典',
                Swaziland: '斯威士兰',
                Syria: '叙利亚',
                Chad: '乍得',
                Togo: '多哥',
                Thailand: '泰国',
                Tajikistan: '塔吉克斯坦',
                Turkmenistan: '土库曼斯坦',
                'East Timor': '东帝汶',
                'Trinidad and Tobago': '特里尼达和多巴哥',
                Tunisia: '突尼斯',
                Turkey: '土耳其',
                'United Republic of Tanzania': '坦桑尼亚',
                Uganda: '乌干达',
                Ukraine: '乌克兰',
                Uruguay: '乌拉圭',
                'United States': '美国',
                Uzbekistan: '乌兹别克斯坦',
                Venezuela: '委内瑞拉',
                Vietnam: '越南',
                Vanuatu: '瓦努阿图',
                'West Bank': '西岸',
                Yemen: '也门',
                'South Africa': '南非',
                Zambia: '赞比亚',
                Korea: '韩国',
                Tanzania: '坦桑尼亚',
                Zimbabwe: '津巴布韦',
                Congo: '刚果',
                'Central African Rep.': '中非',
                Serbia: '塞尔维亚',
                'Bosnia and Herz.': '波黑',
                'Czech Rep.': '捷克',
                'W. Sahara': '西撒哈拉',
                'Lao PDR': '老挝',
                'Dem.Rep.Korea': '朝鲜',
                'Falkland Is.': '福克兰群岛',
                'Timor-Leste': '东帝汶',
                'Solomon Is.': '所罗门群岛',
                Palestine: '巴勒斯坦',
                'N. Cyprus': '北塞浦路斯',
                Aland: '奥兰群岛',
                'Fr. S. Antarctic Lands': '法属南半球和南极陆地',
                Mauritius: '毛里求斯',
                Comoros: '科摩罗',
                'Eq. Guinea': '赤道几内亚',
                'Guinea-Bissau': '几内亚比绍',
                'Dominican Rep.': '多米尼加',
                'Saint Lucia': '圣卢西亚',
                Dominica: '多米尼克',
                'Antigua and Barb.': '安提瓜和巴布达',
                'U.S. Virgin Is.': '美国原始岛屿',
                Montserrat: '蒙塞拉特',
                Grenada: '格林纳达',
                Barbados: '巴巴多斯',
                Samoa: '萨摩亚',
                Bahamas: '巴哈马',
                'Cayman Is.': '开曼群岛',
                'Faeroe Is.': '法罗群岛',
                'IsIe of Man': '马恩岛',
                Malta: '马耳他共和国',
                Jersey: '泽西',
                'Cape Verde': '佛得角共和国',
                'Turks and Caicos Is.': '特克斯和凯科斯群岛',
                'St. Vin. and Gren.': '圣文森特和格林纳丁斯'
            }
            option = {
                tooltip: {
                    trigger: 'item',
                    formatter: function (params) {
                        console.log(params)
                        if (params.name) {
                            return params.name + ' : ' + (isNaN(params.value) ? 0 : parseInt(params.value));
                        }
                    }
                },
                // 视觉映射组件
                visualMap: {
                max:534505,
                min:100,
                type: 'continuous', // continuous 类型为连续型  piecewise 类型为分段型
                show: true, // 是否显示 visualMap-continuous 组件 如果设置为 false，不会显示，但是数据映射的功能还存在
                // 指定 visualMapContinuous 组件的允许的最小/大值。'min'/'max' 必须用户指定。
                // [visualMap.min, visualMax.max] 形成了视觉映射的『定义域』

                // 文本样式
                textStyle: {
                    fontSize: 14,
                    color: 'white'
                },
                realtime: false, // 拖拽时，是否实时更新
                calculable: true, // 是否显示拖拽用的手柄
                // 定义 在选中范围中 的视觉元素
                inRange: {
                    color: ['#5bc2e7', '#6980c5', '#70dfdf', '#f7f1ee', '#3390FF'] // 图元的颜色
                }
            },
                series: [
                    {
                        name: 'World Population (2010)',
                        type: 'map',
                        mapType: 'world',
                        zoom: 1.2,//放大
                        roam: true,
                        itemStyle: {
                            //areaColor: 'rgba(2,37,101,.5)', // 地图区域的颜色 如果设置了visualMap，areaColor属性将不起作用
                            borderWidth: 0.5, // 描边线宽 为 0 时无描边
                            borderColor: 'rgba(112,187,252,.5)', // 图形的描边颜色 支持的颜色格式同 color，不支持回调函数
                            borderType: 'solid', // rgba(2,37,101,.5)描边类型，默认为实线，支持 'solid', 'dashed', 'dotted'
                            emphasis: {areaColor: 'rgba(2,37,101,.8)',
                            lable:{color:"white"}}
                        },
                        label: {
                            show: false // 是否显示对应地名
                        },
                        emphasis: {
                        label: {
                            show: true, // 是否显示标签
                            color: '#fff' // 文字的颜色 如果设置为 'auto'，则为视觉映射得到的颜色，如系列色
                        }},
                        data: ses,
                        nameMap: nameMap
                    }
                ]
            };
            myChart.setOption(option);
</script>


<!-- <script type="text/javascript">
    var arr = new Array();//数字
    var res = new Array();//名字
    var emotion=new Array("中立","积极","消极");
    var ses=[];
    function getNumber() {
        $.ajax({
            type: "post",
            async: false, //异步执行
            url: "../sql/emotionpie.php", //SQL数据库文件
            data: {}, //发送给数据库的数据
            dataType: "json", //json类型

            success: function(result) {
                if (result) {
                    for (var i = 0; i < result.length; i++) {
                        if(result[i].avgtone==-1){
                            ses.push({
                       
                       name: emotion[2],
                       value: result[i].per});
                    }else{
                        ses.push({
                       
                       name: emotion[result[i].avgtone],
                       value: result[i].per});
                    }
                       
                    }
                }
            },
            error: function() {
                alert('Ajax request 发生错误');
            }
        })
        return ses;
    }
    //执行异步请求
    getNumber();
    var myChart = echarts.init(document.getElementById('main3'));

    // 指定图表的配置项和数据
    var option = {
            legend: {
                type: 'scroll',
                orient: 'vertical',
                show: true,
                right: 0,
                top: 20,
                bottom: 20,
                textStyle: {
                fontSize: 10,
                color:"white"
                },
                data: ses.name
            },
            tooltip: {//提示框组件
                trigger: 'item', //item数据项图形触发，主要在散点图，饼图等无类目轴的图表中使用。
                axisPointer: {
                // 坐标轴指示器，坐标轴触发有效
                type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
                },
                formatter: '{a} <br/>{b} : {c} <br/>百分比 : {d}%' //{a}（系列名称），{b}（数据项名称），{c}（数值）, {d}（百分比）
            },
            series : [
                {
                    name: '俄乌冲突不同情绪占比饼图',
                    type: 'pie',
                    radius: '70%',
                    //roseType: 'raduis',
                    data:ses,
                    label:{
                        normal:{
                            show:true,
                            formatter:'{b}:{d}%'
                        }
                    },
                    itemStyle: {
                        normal: {
                            color:function(params){
                                    var colorList=[
                                        '#F3DB5D','#009AFF','#F77474','#28DCCF','#FF5937'
                                ];
                            return colorList[params.dataIndex]
                            },
                            }
                        }
                }
            ]
        };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script> -->

<!-- <script type="text/javascript">
    var arr = new Array();//数字
    var res1 = new Array();//消极
    var res2 = new Array();//中立
    var res3 = new Array();//积极
    var option;
    function getNumber() {
        $.ajax({
            type: "post",
            async: false, //异步执行
            url: "../sql/emotionline.php", //SQL数据库文件
            data: {}, //发送给数据库的数据
            dataType: "json", //json类型

            success: function(result) {
                if (result) {
                    for (var i = 0; i < result.length; i++) {
                        if(result[i].avgtone==-1)
                        res1.push(result[i].per);
                        else if(result[i].avgtone==0)
                        res2.push(result[i].per);
                        else
                        res3.push(result[i].per);
                    }
                }
            },
            error: function() {
                alert('Ajax request 发生错误');
            }
        })
        return res, arr;
    }
    //执行异步请求
    getNumber();
    var myChart = echarts.init(document.getElementById('main2'));
    var option = {
        //  backgroundColor: '#00265f',
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            }
            },
        legend: {
            data: ['消极', '中立','积极'],
            top:'5%',
            textStyle: {
                color: "#fff",
                fontSize: '12',},
            itemGap: 35
            },
        grid: {
            left: '0%',
            top:'40px',
            right: '0%',
            bottom: '0',
        containLabel: true
        },
    xAxis: [{
        type: 'category',
      		data: ['1月', '2月', '3月', '4月', '5月', '6月','7月'],
        axisLine: {
            show: true,
         lineStyle: {
                color: "rgba(255,255,255,.1)",
                width: 1,
                type: "solid"
            },
        },
        axisTick: {
            show: false,
        },
		axisLabel:  {
                interval: 0,
               // rotate:50,
                show: true,
                splitNumber: 5,
                textStyle: {
 					color: "rgba(255,255,255,.6)",
                    fontSize: '12',
                },
            },
    }],
    yAxis: [{
        type: 'value',
        axisLabel: {
           //formatter: '{value} %'
			show:true,
			 textStyle: {
 					color: "rgba(255,255,255,.6)",
                    fontSize: '12',
                },
        },
        axisTick: {
            show: false,
        },
        axisLine: {
            show: true,
            lineStyle: {
                color: "rgba(255,255,255,.1	)",
                width: 1,
                type: "solid"
            },
        },
        splitLine: {
            lineStyle: {
               color: "rgba(255,255,255,.1)",
            }
        }
    }],
    series: [{
        name: '消极',
        type: 'line',
        smooth: true,
        data: res1,

        itemStyle: {
            normal: {
                color:'#2f89cf',
                opacity: 1,
				
				barBorderRadius: 5,
            }
        }
    }, {
        name: '中立',
        type: 'line',
		 smooth: true,
        data: res2,
		barWidth:'15',
       // barGap: 1,
        itemStyle: {
            normal: {
                color:'#62c98d',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    },
    {
        name: '积极',
        type: 'line',
		 smooth: true,
        data: res3,
		barWidth:'15',
       // barGap: 1,
        itemStyle: {
            normal: {
                color:'#F3DB5D',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    },
	]
    };
    myChart.setOption(option);
</script> -->

<!-- <script type="text/javascript">
    var res1 = new Array();//合作
    var res2 = new Array();//冲突
    var option;
    function getNumber() {
        $.ajax({
            type: "post",
            async: false, //异步执行
            url: "../sql/collision_cooperation.php", //SQL数据库文件
            data: {}, //发送给数据库的数据
            dataType: "json", //json类型

            success: function(result) {
                if (result) {
                    for (var i = 0; i < result.length; i++) {
                        if(result[i].quadclass==0)
                        res1.push(result[i].per);
                        else
                        res2.push(result[i].per);
                    }
                }
            },
            error: function() {
                alert('Ajax request 发生错误');
            }
        })
        return res1, res2;
    }
    //执行异步请求
    getNumber();
    var myChart = echarts.init(document.getElementById('main4'));
    var option = {
        tooltip: {
        trigger: 'axis',
        axisPointer: {
        // Use axis to trigger tooltip
        type: 'shadow' // 'shadow' as default; can also be 'line' or 'shadow'
        },
        },
        legend: {textStyle: {color: 'rgba(255,255,255,1)'},},
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: {
            type: 'value',
            axisLine: {show:false},
            splitLine:{show:false},
            axisLabel: {
                textStyle: {
                color:'rgba(255,255,255,.5)',

                }
            },
        },
        yAxis: {
            type: 'category',
            axisLine: { show: false },
        axisTick: {show: false},
        splitLine: {
            show: true,
            lineStyle: {
            color: 'rgba(255,255,255,0.05)'
            }
        },
        axisLabel:  {
            textStyle: {
                    color: "rgba(255,255,255,.5)",
                        },
                    },
            data: ['一月', '二月', '三月', '四月', '五月', '六月', '七月']
        },
        series: [
            {
            name: '合作',
            type: 'bar',
            stack: 'total',
            label:{
                    normal:{
                        show:true,
                        formatter:'{c}%',
                        color:'white'
                    }
                },
            emphasis: {
                focus: 'series'
            },
            itemStyle:{
            normal: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                    offset: 0,
                    color: '#8bd46e'
                }, {
                    offset: 1,
                    color: '#03b48e'
                }]),}
            },
            data: res1
            },
            {
            name: '冲突',
            type: 'bar',
            stack: 'total',
            label:{
                    normal:{
                        show:true,
                        formatter:'{c}%',
                        color:'white'
                    }
                },
            emphasis: {
                focus: 'series'
            },
            itemStyle:{
                normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: '#3893e5'
                        }, {
                            offset: 1,
                            color: '#248ff7'
                        }]),}
            },
            data: res2
            },
        ]
        };
        myChart.setOption(option);
</script> -->

<script>
    var myChart = echarts.init(document.getElementById('main5'));
    var option = {
        series: [{
            radius:'80%',
            type: 'liquidFill',
            data: [0.06,0.05,0.04,0.03,0.02,0.01],
            label: {
            normal:{
                textStyle:{
                    fontSize:30,
                    fontWeight: 'normal',

                }}
            },
        }]
    };
    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>

</body>
</html>
