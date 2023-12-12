<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/3.4.0/echarts.min.js"></script>
<script type="text/javascript" src="js/china.js"></script>
<script type="text/javascript" src="js/echarts.min.js"></script>
<script type="text/javascript" src="js/world.js"></script>
<script type="text/javascript" src="js/myecharts.js"></script>
<script src="http://echarts.baidu.com/resource/echarts-liquidfill-1.0.4/dist/echarts-liquidfill.js"></script>
<!-- <script type="text/javascript" src="js/echarts-liquidfill.js"></script> -->
<link rel="stylesheet" href="css/style.css">
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
		<div class="home"><a href="#"><img src="images/Home.png" width="28"> <i> 首页</i></a></div>
	<div class="menu menu1 pulll_left">
		<ul>
			<li><a href="sql/link.php">新闻相关链接 </a></li>
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
			<div class="tit">全球新闻冲突合作情况</div>
			<div class="boxnav" id="main6" style="height: 200px;">
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
                    <li><div><span>新闻总数量</span><p>21504131</p></div></li>
                        <li><div><span>俄乌冲突数量</span><p>1333756</p></div></li>
                        <li><div><span>根节点新闻数</span><p>19532</p></div></li>
                        <!-- <li><div><span>亚洲国家</span><p>521711</p></div></li>
                        <li><div><span>欧洲国家</span><p>13552</p></div></li> -->
                    </ul>		
				</div>
			    <div class="map" id="map"><!--地图-->
			    </div>
			</div>
		</li>
		<li style="width: 22%">
		
		<div class="box">
			<div class="tit">俄乌冲突每月提及次数</div>
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

<script>
    var myChart = echarts.init(document.getElementById('main5'));
    var option = {
        series: [{
            radius:'80%',
            type: 'liquidFill',
            data: [0.94,0.05,0.04,0.03,0.02,0.01],
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
