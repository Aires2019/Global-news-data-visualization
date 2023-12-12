$(window).load(function(){$(".loading").fadeOut()})  
$(function () {
    echarts_1();
    echarts_2();
    echarts_3();
    echarts_4();
    echarts_5();
    echarts_6();
    // echarts_7();
    // echarts_8();
    // echarts_9();
    // echarts_15();

function echarts_1() //柱状图
{
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main1'));
    option = {
        tooltip: {
        trigger: 'axis',
        axisPointer: {type: 'shadow'},
        formatter:'{b}新闻数量:{c}' ,
        },
        legend: {
            x: 'center',
            y: '10',
            data:['每月有关新闻数量'],
            itemGap:8,
            textStyle: {color: 'rgba(255,255,255,1)'},
            itemWidth: 10,
            itemHeight: 10,},
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
                color: 'rgba(255,255,255,0.05)'}
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
                    barBorderRadius: 11,}    
                },
            data: [85854,286778,418088,213324,155830,108679,65203]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
    window.addEventListener("resize",function(){
    myChart.resize();});
}

function echarts_2() //折线
{ // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main2'));
    option = {
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
                    type: "solid"},
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
                    fontSize: '12',},
                },
            axisTick: {
                show: false,},
            axisLine: {
                show: true,
                lineStyle: {
                    color: "rgba(255,255,255,.1	)",
                    width: 1,
                    type: "solid"
                },},
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
            data: [69533,228888,324027,171553,124667,88014,53027],
            itemStyle: {
                normal: {
                    color:'#2f89cf',
                    opacity: 1,
                    barBorderRadius: 5,
                }
            }
        }, 
            {
            name: '中立',
            type: 'line',
            smooth: true,
            data: [751,2308,3479,1422,1007,841,528],
            barWidth:'15',
        // barGap: 1,
            itemStyle: {
                normal: {
                    color:'#62c98d',
                    opacity: 1,
                    barBorderRadius: 5,
                }}
            },
            {
            name: '积极',
            type: 'line',
            smooth: true,
            data: [2940,7363,16430,6458,5889,4605,2530],
            barWidth:'15',
            itemStyle: {
                normal: {
                    color:'#F3DB5D',
                    opacity: 1,
                    barBorderRadius: 5,
                    }
                }
            },]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
        myChart.resize();
        });
}

function echarts_3() //饼图 no
{
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main3'));
    // 指定图表的配置项和数据
    option = {
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
                data: ['消极','中立','积极']
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
                    data:[
                        { value: 0.9493, name: '消极' },
                        { value: 0.0093, name: '中立' },
                        { value: 0.0414, name: '积极' }],
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
        window.addEventListener("resize",function(){
        myChart.resize();
        });
    }

function echarts_4()//条形图
 {
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main4'));
    var option = {
        tooltip: {
          trigger: 'axis',
          axisPointer: {
            type: 'shadow'
          },
        //   formatter:function(params) {
        //     var str = params[0].name + '<br>'
        //     for(let item of params) {
        //       str += item.seriesName + ' : ' + item.value + '%<br>'
        //     }
        //     return str;
        //   }
        },
        legend: {
            data:['合作','冲突'],
            textStyle: {color: 'rgba(255,255,255,1)'},
        },
        grid: {
          left: '1%',
          right: '3%',
          bottom: '1%',
          top:'10%',
          containLabel: true
        },
        xAxis: {
          type: 'value',
          boundaryGap: [0, 0.01],
          axisLine: {show:false},
                  axisLabel: {
                      textStyle: {
                      color:'rgba(255,255,255,.5)',
                      }
                  },
                  splitLine: {
                    lineStyle: {
                    color: 'rgba(255,255,255,0.05)'}
                },
        },
        yAxis: {
          type: 'category',
          axisLine: { show: false },
                  axisTick: {show: false},
                  splitLine: {
                      show: false,
                      lineStyle: {
                      color: 'rgba(255,255,255,0.05)'}
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
            itemStyle:{
                  normal: {
                      color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                          offset: 0,
                          color: '#8bd46e'
                      }, {
                          offset: 1,
                          color: '#03b48e'
                      }]),
                    barBorderRadius:[5,5]
                  }
                  },
            name: '冲突',
            type: 'bar',
            data: [23388, 85144, 121046, 71675, 48782, 37261, 22584]
          },
          {
            itemStyle:{
                      normal: {
                              color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                                  offset: 0,
                                  color: '#3893e5'
                              }, {
                                  offset: 1,
                                  color: '#248ff7'
                              }]),
                        barBorderRadius:[5,5]
                      }
                  },
            name: '合作',
            type: 'bar',
            data: [49836, 153415, 222890, 107758, 82781, 56199, 33501]
          }
        ]
      };
    // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
        myChart.resize();
    });
    }

function echarts_5()//雷达图
 {
    var myChart = echarts.init(document.getElementById('main6'));
    var option = {
        color: ['#67F9D8', '#FFE434'],
        tooltip : {
            //雷达图的tooltip不会超出div，也可以设置position属性，position定位的tooltip
            confine: true,
            enterable: true, //鼠标是否可以移动到tooltip区域内
        },
        legend: {
            icon: 'rect',   // 图例项的 icon
            top: '30%',     // 图例距离顶部边距
            left: '4%',     // 图例距离左侧边距
            orient: 'vertical', 
            itemWidth: 15,
            textStyle: { // 图例的公用文本样式。
                fontSize: 11,
                color: '#fff'
            }
        },
        radar: [
            {
            indicator: [
                { text: '一月' },
                { text: '二月' },
                { text: '三月' },
                { text: '四月' },
                { text: '五月' },
                { text: '六月' },
                { text: '七月' }
            ],
            center: ['60%', '50%'],
            // radius: 120,
            startAngle: 90,
            splitNumber: 4,
            shape: 'circle',
            nameGap: 8,
            axisName: {
                formatter: '{value}',
                color: '#fff',
                fontSize: 11
            },
            splitArea: {
                areaStyle: {
                color: ['#77EADF', '#26C3BE', '#64AFE9', '#428BD4'],
                shadowColor: 'rgba(0, 0, 0, 0.2)',
                shadowBlur: 10
                }
            },
            axisLine: {
                lineStyle: {
                color: 'rgba(211, 253, 250, 0.8)'
                }
            },
            splitLine: {
                lineStyle: {
                color: 'rgba(211, 253, 250, 0.8)'
                }
            }
            },
        ],
        series: [
            {
                type: 'radar',
                symbol: 'circle', // 拐点的样式，还可以取值'rect','angle'等
                symbolSize: 5, // 拐点的大小
                emphasis: {
                    lineStyle: {
                    width: 4
                    }
                },
                data: [
                    {
                    value: [1203736, 1367434, 1747750, 1340500, 1422242, 1315055, 806541],
                    name: '合作',
                    label: { // 单个拐点文本的样式设置 
                        normal: {
                            show: false ,
                            position: 'top',
                            distance: 2,    // 距离图形元素的距离
                            color: 'auto',  // 文字的颜色
                            fontSize: 8,   // 文字的字体大小
                            formatter: function(params) {
                                return params.value;
                            }
                        }
                    }
                    },
                    {
                    value: [430159, 509387, 618791, 507907, 503434, 463675, 281955],
                    name: '冲突',
                    areaStyle: {
                        color: 'rgba(255, 228, 52, 0.6)'
                    },
                    label: { // 单个拐点文本的样式设置 
                        normal: {
                            show: false ,
                            position: 'top',
                            distance: 2,    // 距离图形元素的距离
                            color: 'auto',  // 文字的颜色
                            fontSize: 8,   // 文字的字体大小
                            formatter: function(params) {
                                return params.value;
                            }
                        }
                    }
                    }
                ]
            },
        ]
        };

    myChart.setOption(option);
    window.addEventListener("resize",function(){
        myChart.resize();
    });
    }

function echarts_6() //地图2
{
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
        option={
        // backgroundColor: "#02AFDB",
        title: {
        // text: '在线设备分布',
        left: '40%',
        top: '0px',
        textStyle: {
            color: '#fff',
            opacity: 0.7
        }
        },
        visualMap: {
            max:390000,
            min:100,
            type: 'continuous', // continuous 类型为连续型  piecewise 类型为分段型
            show: true, // 是否显示 visualMap-continuous 组件 如果设置为 false，不会显示，但是数据映射的功能还存在
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
        tooltip: {
        trigger: 'item',
        formatter: function (params) {
                            console.log(params)
                            if (params.name) {
                                return params.name + ' : ' + (isNaN(params.value) ? 0 : parseInt(params.value));
                            }
                        }
        },
        // geo: {//用于增加图层设置效果
        // map: 'world',
        // zoom: 1.2,
        // label: {
        //     emphasis: {
        //     show: false
        //     }
        // },
        // roam: true,
        // silent: true,
        // itemStyle: {
        //     normal: {
        //     areaColor: '#37376e',
        //     borderColor: '#000'
        //     },
        //     emphasis: {
        //     areaColor: '#2a333d'
        //     }
        // }
        // },
        series: [{
        type: 'map',
        roam: true,
        mapType: 'world',
        zoom: 1.2,
        mapLocation: {
            y: 100
        },
        data:[
            {name:'俄罗斯',value:388320},
            {name:'乌克兰',value:368971},
            {name:'美国',value:81713},
            {name:'英国',value:31238},
            {name:'德国',value:22838},
            {name:'波兰',value:14551},
            {name:'中国',value:14290},
            {name:'法国',value:14148},
            {name:'土耳其',value:14031},
            {name:'白俄罗斯',value:8713},
            {name:'加拿大',value:7761},
            {name:'以色列',value:7368},
            {name:'澳大利亚',value:4870},
            {name:'意大利',value:4345},
            {name:'比利时',value:4291},
            {name:'日本',value:4167},
            {name:'芬兰',value:3810},
            {name:'瑞士',value:3541},
            {name:'匈牙利',value:3498},
            {name:'立陶宛',value:3423},
            {name:'瑞典',value:3109},
            {name:'叙利亚',value:2938},
            {name:'伊朗',value:2894},
            {name:'爱沙尼亚',value:2546},
            {name:'摩尔多瓦',value:2399},
            {name:'拉脱维亚',value:2236},
            {name:'荷兰',value:2126},
            {name:'印度',value:1954},
            {name:'爱尔兰',value:1858},
            {name:'西班牙',value:1823},
            {name:'挪威',value:1718},
            {name:'奥地利',value:1697},
            {name:'斯洛伐克',value:1675},
            {name:'印度尼西亚',value:1513},
            {name:'捷克共和国',value:1494},
            {name:'葡萄牙',value:1433},
            {name:'尼日利亚',value:1306},
            {name:'巴基斯坦',value:1277},
            {name:'阿富汗',value:1241},
            {name:'丹麦',value:1218},
            {name:'希腊',value:1205},
            {name:'保加利亚',value:1165},
            {name:'新西兰',value:1112},
            {name:'卡塔尔',value:920},
            {name:'韩国',value:859},
            {name:'埃及',value:835},
            {name:'伊拉克',value:828},
            {name:'哈萨克斯坦',value:731},
            {name:'罗马教廷（梵蒂冈城）',value:725},
            {name:'南非',value:714},
            {name:'沙特阿拉伯',value:708},
            {name:'菲律宾',value:658},
            {name:'墨西哥',value:650},
            {name:'阿塞拜疆',value:582},
            {name:'朝鲜',value:573},
            {name:'巴西',value:567},
            {name:'阿拉伯联合酋长国',value:553},
            {name:'古巴',value:551},
            {name:'越南',value:522},
            {name:'亚美尼亚',value:518},
            {name:'孟加拉国',value:499},
            {name:'委内瑞拉',value:471},
            {name:'被占领巴勒斯坦领土',value:447},
            {name:'塞尔维亚',value:436},
            {name:'新加坡',value:427},
            {name:'摩洛哥',value:415},
            {name:'肯尼亚',value:399},
            {name:'马来西亚',value:378},
            {name:'阿尔巴尼亚',value:367},
            {name:'塔吉克斯坦',value:346},
            {name:'塞浦路斯',value:322},
            {name:'斐济',value:308},
            {name:'利比亚',value:291},
            {name:'黎巴嫩',value:283},
            {name:'也门',value:276},
            {name:'泰国',value:274},
            {name:'阿根廷',value:269},
            {name:'卢森堡',value:268},
            {name:'加纳',value:252},
            {name:'克罗地亚',value:249},
            {name:'乔丹',value:232},
            {name:'土库曼斯坦',value:216},
            {name:'乌兹别克斯坦',value:216},
            {name:'苏丹',value:212},
            {name:'塞内加尔',value:205},
            {name:'厄立特里亚',value:195},
            {name:'津巴布韦',value:190},
            {name:'智利',value:187},
            {name:'尼泊尔',value:180},
            {name:'冰岛',value:178},
            {name:'缅甸',value:176},
            {name:'阿尔及利亚',value:175},
            {name:'吉尔吉斯斯坦',value:157},
            {name:'尼加拉瓜',value:157},
            {name:'哥伦比亚',value:156},
            {name:'斯里兰卡',value:152},
            {name:'马耳他',value:142},
            {name:'卢旺达',value:138},
            {name:'埃塞俄比亚',value:113},
            {name:'索马里',value:110},
            {name:'柬埔寨',value:108},
            {name:'马里',value:105},
            {name:'科威特',value:99},
            {name:'秘鲁',value:83},
            {name:'蒙古',value:79},
            {name:'厄瓜多尔',value:77},
            {name:'阿曼',value:74},
            {name:'突尼斯',value:71},
            {name:'马其顿',value:68},
            {name:'乌干达',value:66},
            {name:'文莱达鲁萨兰国',value:61},
            {name:'马尔代夫',value:57},
            {name:'危地马拉',value:56},
            {name:'巴林',value:55},
            {name:'摩纳哥',value:55},
            {name:'坦桑尼亚',value:51},
            {name:'中非共和国',value:50},
            {name:'乌拉圭',value:50},
            {name:'莫桑比克',value:49},
            {name:'马拉维',value:48},
            {name:'巴拿马',value:48},
            {name:'乍得',value:45},
            {name:'多米尼加共和国',value:43},
            {name:'喀麦隆',value:40},
            {name:'伯利兹',value:35},
            {name:'加蓬',value:35},
            {name:'尼日尔',value:34},
            {name:'刚果',value:33},
            {name:'百慕大群岛',value:31},
            {name:'圭亚那',value:31},
            {name:'赞比亚',value:31},
            {name:'刚果',value:30},
            {name:'佐治亚州',value:29},
            {name:'洪都拉斯',value:29},
            {name:'利比里亚',value:29},
            {name:'塞舌尔',value:29},
            {name:'所罗门群岛',value:27},
            {name:'格林纳达',value:26},
            {name:'牙买加',value:26},
            {name:'巴拉圭',value:26},
            {name:'哥斯达黎加',value:25},
            {name:'圣基茨和尼维斯',value:24},
            {name:'纳米比亚',value:22},
            {name:'安哥拉',value:21},
            {name:'科特迪瓦（科特迪瓦）',value:21},
            {name:'老挝',value:20},
            {name:'博茨瓦纳',value:19},
            {name:'布基纳法索',value:18},
            {name:'玻利维亚',value:18},
            {name:'巴巴多斯',value:18},
            {name:'罗马尼亚',value:18},
            {name:'吉布提',value:17},
            {name:'塞拉利昂',value:17},
            {name:'不丹',value:16},
            {name:'萨尔瓦多',value:16},
            {name:'巴哈马',value:13},
            {name:'圣卢西亚',value:12},
            {name:'圣文森特和格林纳丁斯',value:12},
            {name:'密克罗尼西亚',value:9},
            {name:'特立尼达和多巴哥',value:9},
            {name:'赤道几内亚',value:8},
            {name:'海地',value:8},
            {name:'帕劳',value:8},
            {name:'毛里塔尼亚',value:7},
            {name:'布隆迪',value:6},
            {name:'科摩罗',value:6},
            {name:'开曼群岛',value:6},
            {name:'冈比亚',value:6},
            {name:'马达加斯加',value:6},
            {name:'毛里求斯',value:6},
            {name:'多米尼加',value:5},
            {name:'几尼',value:5},
            {name:'基里巴斯',value:5},
            {name:'汤加',value:5},
            {name:'列支敦士登',value:3},
            {name:'莱索托',value:3},
            {name:'多哥',value:3},
            {name:'瓦努阿图',value:3},
            {name:'安提瓜和巴布达',value:2},
            {name:'几内亚比绍',value:2},
            {name:'中国香港特别行政区',value:1},
            {name:'中国澳门特别行政区',value:1},
            {name:'巴布亚新几内亚',value:1},
            {name:'苏里南',value:1},
        ],
        nameMap: nameMap,
        symbolSize: 12,
        label: {
            normal: {
            show: false
            },
            emphasis: {
            show: true,
            textStyle:{color:'white'}
            }
        },
        itemStyle: {
            borderWidth: 0.5, // 描边线宽 为 0 时无描边
                        borderColor: 'rgba(112,187,252,.5)', // 图形的描边颜色 支持的颜色格式同 color，不支持回调函数
                        borderType: 'solid', // rgba(2,37,101,.5)描边类型，默认为实线，支持 'solid', 'dashed', 'dotted'
                        emphasis: {areaColor: 'rgba(2,37,101,.8)',
                                    lable:{color:"white"},
                                    textStyle:{color:"white"}}
        }
        }],
        };
        myChart.setOption(option);
        window.addEventListener("resize",function(){
        myChart.resize();
        });
    }
})



		
		
		


		









