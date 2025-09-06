

const wssUrl = "wss://api.huobi.pro/ws"
// const wssUrl = 'wss://api-aws.huobi.pro/ws';  // 实时币种价格
const pako = window.pako
// 'm1','h1', 'd1', 'w1', 'M1'
// 1min, 5min, 15min, 30min, 60min, 4hour, 1day, 1mon, 1week, 1year

// 取消订阅
// { "unsub": "topic to unsub", "id": "id generate by client" }

// 单位映射
const unitMap = {
  m: 'min',
  h: 'hour',
  d: 'day',
  w: 'week',
  M: 'mon',
}
// 初始化图表
const chart = klinecharts.init('chart_container')
let chart_type=0;

function loading(type){
//   let type= $('.loding').data('type')
   console.info(type)
   if(type==0){
       $('.loding').css('display','flex');
       $('.loding').data('type','1');
   }else{
       $('.loding').css('display','none');
       $('.loding').data('type','0');
   }
}
function changInterval(interval,th){
    loading(0)
    console.info(VyKline)
    window.deedfeeds.intervalChanged({interval:interval,setHistoryData: VyKline.initHistoryData,subscribeData: VyKline.getRealTimeData})
    console.info(th)
    $(th).addClass('active');
    $(th).siblings().removeClass('active')
    
    
}

function initOnReady1(kLineDataList){
    // 创建一个主图技术指标
    chart.createTechnicalIndicator('MA', false, { id: 'candle_pane' })
    // 创建一个副图技术指标VOL
    chart.createTechnicalIndicator('VOL')
    // 创建一个副图技术指标MACD
    // chart.createTechnicalIndicator('MACD')
    // 加载数据
    kLineDataList.reverse()
    // console.info(kLineDataList)
    var chartDataList = kLineDataList.map(function (data) {
        return {
            timestamp: data.time,
            open: data.open,
            high: data.high,
            low: data.low,
            close: data.close,
            volume:data.volume,
        }
    })
    
    chart.applyNewData(chartDataList)
    chart.setOffsetRightSpace(2)
    chart_type=1;
    // chart.subscribeAction('drawCandle',function(res){
    //     console.info(res)
    // })
    // chart.createAnnotation({
    //   point: { timestamp: 1626937081, price: 0.054050 },
    //   styles: {
    //     symbol: {
    //       type: 'diamond',
    //       position: 'top',
    //       size: 8,
    //       color: '#1e88e5',
    //       activeSize: 10,
    //       activeColor: '#FF9600',
    //       offset: [0, 20]
    //     }
    //   },
    //   checkPointInCustomSymbol: function ({ point, coordinate, size }) {
    //     console.log(point, coordinate, size)
    //     return true
    //   },
    //   drawCustomSymbol: function ({ ctx, point, coordinate, viewport, isActive, styles }) {
    //     console.log(point, coordinate, viewport, isActive, styles)
    //   },
    //   drawExtend: function ({ ctx, point, coordinate, viewport, isActive, styles }) {
    //     console.log(point, coordinate, viewport, isActive, styles)
    //   },
    //   onClick: function ({ id, points, event }) { console.log(id, points, event) },
    //   onRightClick: function ({ id, points, event }) { console.log(id, points, event) },
    //   onMouseEnter: function ({ id, points, event }) { console.log(id, points, event) },
    //   onMouseLeave: function ({ id, points, event }) { console.log(id, points, event) },
    // })
    // chart.setDataSpace(15)
}

// 格式化时间粒度
function formatPeriod(str) {
  const reg = /([A-z]+)([0-9]+)/
  const matchedArr = str.match(reg)
  if (matchedArr) {
    return matchedArr[2] + unitMap[matchedArr[1]]
  } else {
    console.error("格式化时间粒度出错！");
  }
}
// ajax
//   function   ajaxaitc(){
//          const historyData = []
//         var ajax = new XMLHttpRequest();
//         //步骤二:设置请求的url参数,参数一是请求的类型,参数二是请求的url,可以带参数,动态的传递参数starName到服务端
//         ajax.open('get','/Chart/getMarketSpecialtyJsonAitc.html?market=aitc_usdt&step=900');
//         //步骤三:发送请求
//         ajax.send();
//         //步骤四:注册事件 onreadystatechange 状态改变就会调用
//         ajax.onreadystatechange = function () {
//           if (ajax.readyState==4 &&ajax.status==200) {
//               if(ajax.responseText){
//                 //步骤五 如果能够进到这个判断 说明 数据 完美的回来了,并且请求的页面是存在的
//         　　　    　  let data = JSON.parse(ajax.responseText)
//         　　　　//   console.log(data);//输入相应的内容
//                   data && data.forEach(item => {
//                      historyData.unshift({
//                       time: item.id * 1000, // 时间
//                       open: item.open, // 开
//                       high: item.high, // 高
//                       low: item.low, // 低
//                       close: item.close, // 收
//                       volume: item.vol // 交易量
//                      })
//                   })
//                     // return historyData
//           　　 }
//           　　//  console.log(ajax.responseText)
//           　　//  return 111111111111;

//                 callback(historyData);
//           }

//         }
//     }

// 币种
const SYMBOL =window.SYMBOL;

// 固定为 300 条数据

const dataNum = 900 // 数据条数
const historyK = (interval) => {
    
  const reg1 = /([A-z]+)([0-9]+)/
  let matchedArr = interval.match(reg1)

//   console.log(interval,11111111111)
  const reg = /[0-9]+/
  let shijian = interval.match(reg)[0]
  if(matchedArr[1] == 'h'){

    shijian =  matchedArr[2] * 60
  }
  if(matchedArr[1] == 'd'){
    shijian =  matchedArr[2] * 60*24
  }
  if(matchedArr[1] == 'w'){
    shijian =  matchedArr[2] * 60*24*3.5
  }


  let form1 =  Math.trunc(Date.now() / 1000) - 60 * dataNum * shijian

  // if(`${formatPeriod(interval)}` == '4hour'){
  //     form1 = Math.trunc(Date.now() / 1000)- (4*60*60*dataNum*1.5)
  // }
  // if(`${formatPeriod(interval)}` == '1day'){
  //     form1 = Math.trunc(Date.now() / 1000)- (24*60*60*dataNum)
  // }
  // if(`${formatPeriod(interval)}` == '1week'){
  //     form1 = Math.trunc(Date.now() / 1000)- (24*60*60*dataNum*7)
  // }


//   console.log(form1)
  let str = {
    req: `market.${SYMBOL}.kline.${formatPeriod(interval)}`,
    id: SYMBOL,
    from:form1, // 1min 对应一条数据 最小粒度为 1 min
    to: Math.trunc(Date.now() / 1000)
  }
  return str
}

const subK = (interval) => ({ // 订阅数据
  sub: `market.${SYMBOL}.kline.${formatPeriod(interval)}`,
  id: SYMBOL
})

const unsubK = (interval) => ({ // 取消订阅数据
  unsub: `market.${SYMBOL}.kline.${formatPeriod(interval)}`,
  id: SYMBOL
})

class Deedfeeds {


  getMarketSpecialtyJsonAitclast(interval){
    const reg1 = /([A-z]+)([0-9]+)/
    let matchedArr = interval.match(reg1)
    // console.log(1111111)
    let shijian = matchedArr[2]
    if(matchedArr[1] == 'h'){

      shijian =  matchedArr[2] * 60
    }
    if(matchedArr[1] == 'd'){
      shijian =  matchedArr[2] * 60*24
    }
    if(matchedArr[1] == 'w'){
      shijian =  matchedArr[2] * 60*24*3.5
    }
    let _this= this
    // console.log(interval,'时间')
    $.ajax({
      //请求方式
      type : "GET",
      //请求的媒体类型
      contentType: "application/json;charset=UTF-8",
      //请求地址
      url : "/Home/Chart/getMarketSpecialtyJsonAitclast.html?step="+shijian*60,
      //请求成功
      success : function(result) {
        var historyData = []
        console.log(result)
        var item = result[0]
         console.log(historyData)
        _this.subscribeDataParam.subscribeData({
          time:  parseInt(item.time) * 1000, // 时间
          open: parseFloat(item.open), // 开
          high:  parseFloat(item.high), // 高
          low:  parseFloat(item.low), // 低
          close:  parseFloat(item.close), // 收
          volume:  parseFloat(item.volume) // 交易量
        })
        chart.updateData(
            {
              // 开盘价，必要字段
              open: parseFloat(item.open),
              // 收盘价，必要字段
              close: parseFloat(item.close),
              // 最高价，必要字段
              high: parseFloat(item.high),
              // 最低价，必要字段
              low: parseFloat(item.low),
              // 成交量，非必须字段
              volume: parseFloat(item.volume),
              // 时间戳，毫秒级别，必要字段
              timestamp: parseInt(item.time) * 1000
            }
        );
        // if(matchedArr[0] == 'm1'){
        //   localStorage.setItem('closeshijian'+SYMBOL,item.close)
        // }else{
        //   localStorage.removeItem('closeshijian'+SYMBOL)
        // }
          localStorage.setItem('closeshijian'+SYMBOL,item.close)


        //  console.log(historyData)
      },
      //请求失败，包含具体的错误信息
      error : function(e){
        console.log(e.status);
        console.log(e.responseText);
      }
    });



  }
  
  ajaxaitc(interval){
    

    let _this= this
    const reg1 = /([A-z]+)([0-9]+)/
    let matchedArr = interval.match(reg1)

    let shijian = matchedArr[2]
    if(matchedArr[1] == 'h'){

      shijian =  matchedArr[2] * 60
    }
    if(matchedArr[1] == 'd'){
      shijian =  matchedArr[2] * 60*24
    }
    if(matchedArr[1] == 'w'){
      shijian =  matchedArr[2] * 60*24*3.5
    }

    // console.log(interval,'时间')
    $.ajax({
      //请求方式
      type : "GET",
      //请求的媒体类型
      contentType: "application/json;charset=UTF-8",
      //请求地址
      url : "/Home/Chart/getMarketSpecialtyJsonAitc.html?market=usdz_usdt&step="+shijian*60,
      //请求成功
      success : function(result) {
          console.info(result)
          
        var historyData = []

        result && result.forEach(item => {
          historyData.unshift({
            time:  parseInt(item.time) * 1000, // 时间
            open: parseFloat(item.open), // 开
            high:  parseFloat(item.high), // 高
            low:  parseFloat(item.low), // 低
            close:  parseFloat(item.close), // 收
            volume:  parseFloat(item.volume) // 交易量
          })
        })
        
        _this.subscribeDataParam.setHistoryData(historyData)
        if(matchedArr[0] == 'm1'){
          localStorage.setItem('closeshijian'+SYMBOL,historyData[0].close)
        }else{
          localStorage.removeItem('closeshijian'+SYMBOL)
        }
        console.info(chart_type)
        if(chart_type==0){
            loading(1)
            chart.setPriceVolumePrecision(6,6)
            initOnReady1(historyData)
        }else{
            let historyData1=[]
            result && result.forEach(item => {
              historyData1.unshift({
                timestamp:  parseInt(item.time) * 1000, // 时间
                open: parseFloat(item.open), // 开
                high:  parseFloat(item.high), // 高
                low:  parseFloat(item.low), // 低
                close:  parseFloat(item.close), // 收
                volume:  parseFloat(item.volume) // 交易量
              })
            })
            loading(1)
            chart.applyNewData(historyData1.reverse())
        }
        
        //  console.log(historyData)
      },
      //请求失败，包含具体的错误信息
      error : function(e){
        console.log(e.status);
        console.log(e.responseText);
      }
    });



  }
  constructor() {

    this.ws = new WebSocket(wssUrl)

    this.currentInterval = null
    this.subscribeDataParam = {
      interval: null,
      setHistoryData: null,
      subscribeData: null
    } // 再次订阅时需要的数据
  }

//______________________________
  handleData(msg) { // 处理数据
    
    if (!this.subscribeDataParam.interval) {
      console.error("订阅数据参数错误！");
      return
    }
    
    let data = JSON.parse(msg)

    //   console.log("响应数据", data);
    //   console.log(this.subscribeDataParam)
    if (data.ping) {
        
        //这里写平台币
        
      // console.log(JSON.stringify({ pong: data.ping }));
      this.ws.send(JSON.stringify({ pong: data.ping }));
    } else if (data.status === "ok") { // 响应数据 历史数据 | 常规回调
      // this.getResData(data)
      //   console.log("响应数据", data);
      // 注意倒序
      if (data.data) {
        const historyData = []
        // console.log(data.data)
        data.data && data.data.forEach(item => {
          historyData.unshift({
            time: item.id * 1000, // 时间
            open: item.open, // 开
            high: item.high, // 高
            low: item.low, // 低
            close: item.close, // 收
            volume: item.vol // 交易量
          })
        })
        console.log(historyData)
        loading(1)
        if(chart_type==0){
            chart.setPriceVolumePrecision(2,2)
            initOnReady1(historyData)
            
        }else{
            let historyData1=[]
            data.data && data.data.forEach(item => {
              historyData1.unshift({
                timestamp: item.id * 1000, // 时间
                open: item.open, // 开
                high: item.high, // 高
                low: item.low, // 低
                close: item.close, // 收
                volume: item.vol // 交易量
              })
            })
            historyData1.reverse()
            chart.applyNewData(historyData1)
        }
        
        this.subscribeDataParam.setHistoryData(historyData)
      } else if (data.unsubbed) { // 取消订阅成功
        this.ws.send(JSON.stringify(historyK(this.subscribeDataParam.interval)));
        this.ws.send(JSON.stringify(subK(this.subscribeDataParam.interval)));
      }
    } else { // 实时数据
      // this.getResData(data)
      console.log(data);
       
      if (data.tick) {
        const perData = data.tick
        const perData1={
          // 开盘价，必要字段
          open: perData.open,
          // 收盘价，必要字段
          close: perData.close,
          // 最高价，必要字段
          high: perData.high,
          // 最低价，必要字段
          low: perData.low,
          // 成交量，非必须字段
          volume: perData.vol,
          // 时间戳，毫秒级别，必要字段
        //   timestamp: perData.id * 1000
        timestamp:perData.id * 1000, 
        }
        console.info(perData1)
        chart.updateData(perData1);
        localStorage.setItem('closeshijian'+SYMBOL,perData.close)
        this.subscribeDataParam.subscribeData({
          time: perData.id * 1000, // 时间
          open: perData.open, // 开
          high: perData.high, // 高
          low: perData.low, // 低
          close: perData.close, // 收
          volume: perData.vol // 交易量
        })
        
      }
    }

  }
  
  //————————————————————————————————————————————————————————————————

  setHistoryData({ interval, setHistoryData, subscribeData }) {
      
    
    this.currentInterval = interval
    this.ws.onopen = () => {
        
      if(SYMBOL == 'usdzusdt'){
        
        this.ajaxaitc(interval)
        
        let _this = this
        
        window.a = setInterval(function(){
            
          _this.getMarketSpecialtyJsonAitclast(interval)
		}, 2000);

      }else{
        this.ws.send(JSON.stringify(historyK(interval)));
        this.ws.send(JSON.stringify(subK(interval)));
      }
    }

    this.subscribeDataParam = {
      interval,
      setHistoryData,
      subscribeData
    }

    this.ws.onmessage = event => {
      let blob = event.data;
      const fileReader = new FileReader();

      fileReader.onload = e => {
        let ploydata = new Uint8Array(e.target.result);
        let msg = pako.inflate(ploydata, { to: 'string' });
        
        this.handleData(msg);
      };
      fileReader.readAsArrayBuffer(blob, "utf-8")
    }
  }

  intervalChanged({ interval, setHistoryData, subscribeData }) {
    this.subscribeDataParam = {
      interval,
      setHistoryData,
      subscribeData
    }
    console.log('重新请求')
    if(SYMBOL == 'usdzusdt'){
      // console.log(77777)
      clearInterval(window.a);
      clearInterval(window.b);

      let _this=this
      window.b= setInterval(function (){
        _this.getMarketSpecialtyJsonAitclast(interval)
      },2000)


      this.ajaxaitc(interval)
    }else{
      this.ws.send(JSON.stringify(unsubK(this.currentInterval)))
    }

    //   console.log($('#market_new_price'),'html')

    this.currentInterval = interval
  }
}

window.deedfeeds = new Deedfeeds();