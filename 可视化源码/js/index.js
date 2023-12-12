
$(function () {
    echart_1();
    echart_2();
    echart_3();
    echart_4();

    function echart_1() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('chart_1'));
        var option = {
        
        tooltip: {
            trigger: 'axis',
          },

        grid: {

            right: '15%',
            bottom:'10%'
        },
          
        legend: {
          data: ['事件发生次数', '潜在影响指数'],
          textStyle:{
            color:"white"
          }
        },

        xAxis: [
          {
            type: 'category',
            axisTick: {
              alignWithLabel: true
            },
            axisLine: {
              show: true,
              lineStyle: {
                color: 'white'
              }
            },
            data: ['磋商', '公开声明', '战斗', '反对', '表达合作意愿', '呼吁', '外交合作', '屈服', '威胁', '援助']
          }
        ],
          
        yAxis: [
          {
            type: 'value',
            name: '事件发生次数',
            position: 'right',
            splitLine:false,
            alignTicks: false,
            axisLine: {
              show: true,
              lineStyle: {
                color: 'white'
              }
            },
            axisLabel: {
              formatter: '{value}'
            }
          },
          {
            type: 'value',
            name: '潜在影响指数',
            position: 'left',
            alignTicks: true,
            // offset: 80,
            axisLine: {
              show: true,
              lineStyle: {
                  color: 'white'
              }
            },
            axisLabel: {
              formatter: '{value}'
            }
          },
        ],
          
        series: [
          {
            name: '事件发生次数',
            type: 'bar',
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
            data: [
              286712, 167442, 136851, 99587, 92532, 83354, 82151, 53225, 48502, 43006 ]
          },
          {
            name: '潜在影响指数',
            type: 'line',
            yAxisIndex: 1,
            itemStyle:{
                normal:{
                  color:'#5EBEFC'
                }
            },
            data: [
              2.95, -0.02, -9.93, -2, 4.34, 2.86, 4.12, 7.10, -5.28, 7.61
            ],
            markLine: {
              data: [{ type: 'average', name: 'Avg' }]
            },
            markPoint: {
              data: [
                { type: 'max', name: 'Max' },
                { type: 'min', name: 'Min' }
              ]
            },
          },
          ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function () {
            myChart.resize();
        });
    }


    function echart_2() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('chart_2'));  

        // var giftImageUrl = "data:image/png;base64,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";
        var option = {
        
            title: [
              {
                subtext: '磋商',
                left: '20%',
                top: '85%',
                textAlign: 'center',
                textStyle: {
                  color: "white",
                },
              },
              {
                subtext: '公开声明',
                left: '50%',
                top: '85%',
                textAlign: 'center',
                textStyle: {
                  color: "white",
                },
              },
              {
                subtext: '战斗',
                left: '80%',
                top: '85%',
                textAlign: 'center',
                textStyle: {
                  color: "white",
                },
              }
            ],

            color: ['#fc8251', '#5470c6', '#91cd77', '#ef6567', '#f9c956', '#75bedc'],
            
            tooltip: {
              trigger: 'item',
              formatter: '{a} <br/>{b} : {c} ({d}%)'
            },

            series: [
              {
                name: 'Radius Mode',
                type: 'pie',
                radius: [50, 80],
                center: ['20%', '50%'],
                itemStyle: {
                  borderRadius: 5
                },
                label: {
                  show: false
                },
                emphasis: {
                  label: {
                    show: true
                  }
                },
                data: [
                  { value: 89238, name: '磋商' },
                  { value: 64652, name: '出访' },
                  { value: 62657, name: '参与谈判' },
                  { value: 58948, name: '来访' },
                  { value: 4288, name: '第三方地点会见' },
                  { value: 3683, name: '电话' },
                  { value: 3246, name: '参与调解' }
                ]
              },
              
          
              {
                name: 'Area Mode',
                type: 'pie',
                radius: [50, 80],
                center: ['50%', '50%'],
                itemStyle: {
                  borderRadius: 5
                },
                label: {
                  show: false
                },
                data: [
                  { value: 88275, name: '声明' },
                  { value: 25539, name: '悲观评论' },
                  { value: 25197, name: '乐观评论' },
                  { value: 12184, name: '考虑政治选择' },
                  { value: 5349, name: '拒绝指控、否认责任' },
                  { value: 3219, name: '承认或声称责任' },
                  { value: 2762, name: '拒绝评论' },
                  { value: 2704, name: '参与象征性活动' },
                  { value: 1737, name: '善意评论' },
                  { value: 476, name: '表示一致性' }
                ]
              },
                {
                name: 'Area Mode',
                type: 'pie',
                radius: [50, 80],
                center: ['80%', '50%'],
                itemStyle: {
                  borderRadius: 5
                },
                label: {
                  show: false
                },
                data: [
                  { value: 77265, name: '常规军事力量' },
                  { value: 17765, name: '小型和轻型武器作战' },
                  { value: 17661, name: '大炮和坦克作战' },
                  { value: 17206, name: '占领领土' },
                  { value: 6101, name: '航空武器作战' },
                  { value: 612, name: '军事封锁' },
                  { value: 241, name: '违反停火' }
                ]
              }
              
            ]
          };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function () {
            myChart.resize();
        });
    }

    function echart_3() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('chart_3'));  
        option = {
            // backgroundColor: "#404A59",
            color: ["#036BC8", "#5EBEFC", "#2EF7F3"],

            tooltip: {
                trigger: 'axis'
            },
            
            legend: {
                x: 500,
                top: '7%',
                textStyle: {
                    color: '#fff',
                    fontSize:12,
                },
                data: ['磋商', '公开声明', '战斗']
            },
            
            grid: {
                left: '5%',
                right: '8%',
                top: '10%',
                bottom: '6%',
                containLabel: true
            },
            toolbox: {
                "show": false,
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                "axisLine": {
                    lineStyle: {
                        color: '#fff',
                    }
                },
                "axisTick": {
                    "show": false
                },
                axisLabel: {
                    textStyle: {
                        color: '#fff'
                    }
                },
                boundaryGap: false,
                data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月']
            },
            yAxis: {
                "axisLine": {
                    lineStyle: {
                        color: '#fff'
                    }
                },
                splitLine: {
                    show: false,
                    lineStyle: {
                        color: '#fff'
                    }
                },
                "axisTick": {
                    "show": false
                },
                axisLabel: {
                    textStyle: {
                        color: '#fff'
                    }
                },
                type: 'value'
            },

            series: [{
                name: '4-磋商',
                smooth: true,
                type: 'line',
                symbolSize: 9,
                  symbol: 'circle',
                data: [22698, 63063 ,92909 ,41500 ,31067 ,21681 ,13794]
            }, {
                name: '1-公开声明',
                smooth: true,
                type: 'line',
                symbolSize: 9,
                  symbol: 'circle',
                data: [11418,36490 ,51633 ,26370 ,20508 ,13126 ,7897]
            }, {
                name: '19-战斗',
                smooth: true,
                type: 'line',
                symbolSize: 9,
                  symbol: 'circle',
                data: [3553, 20945, 41914, 25878, 18893, 15361, 10307]
            }, 
            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function () {
            myChart.resize();
        });
    }

    function echart_4() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('chart_4'));

        option = {
          title: {
            // text: 'World Population'
          },
          
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'shadow'
            }
          },
          
          legend: {
            textStyle:{
              color:"white"
            }
          },
          
          grid: {
            top: "10%",
            left: '3%',
            right: '8%',
            bottom: '1%',
            containLabel: true
          },
          
          xAxis: {
            type: 'value',
            boundaryGap: [0, 0.01],
            axisLine: {
              show: true,
              lineStyle: {
                color: 'white'
              }
            },
          },
          
          yAxis: {
            type: 'category',
            axisLine: {
              show: true,
              lineStyle: {
                color: 'white'
              }
            },
            data: ['磋商', '公开声明', '战斗', '反对', '表达合作意愿', '呼吁', '外交合作', '屈服', '威胁', '援助']
          },
          
          series: [
            {
              name: '俄罗斯',
              type: 'bar',
              barGap: 0,
              data: [65578, 46162, 57400, 29053, 21882,19357, 21730, 18935, 16338, 10782],
              itemStyle:{
                normal:{
                  color:'#8bd46e'
                }
              },
            },
            {
              name: '乌克兰',
              type: 'bar',
              data: [72731, 46596, 45971, 31395, 21163, 24607, 20333, 16819, 13643, 10101],
              itemStyle:{
                normal:{
                  color:'#5EBEFC'
                }
              }
            }
          ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function () {
            myChart.resize();
        });
    }
});