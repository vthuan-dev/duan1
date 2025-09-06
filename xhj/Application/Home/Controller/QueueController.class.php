<?php
namespace Home\Controller;

class QueueController  extends \Think\Controller
{

	// 更新市场价格
    public function houprice()
    {
        foreach (C('market') as $k => $v) {
            if (!$v['hou_price'] || (date('H', time()) == '0')) {
                $t = time();
                $start = mktime(0, 0, 0, date('m', $t), date('d', $t), date('Y', $t));
                $hou_price = M('TradeLog')->where(array(
                    'market' => $v['name'],
                    'addtime' => array('lt', $start)
                ))->order('id desc')->getField('price');

                if (!$hou_price) {
                    $hou_price = M('TradeLog')->where(array('market' => $v['name']))->order('id asc')->getField('price');
                }

                M('Market')->where(array('name' => $v['name']))->setField('hou_price', $hou_price);
                S('home_market', null);
            }
            echo $hou_price;
        }
    }

	/** 计算趋势,每天运行一次即可 **/
	public function tendency()
	{
		foreach (C("market") as $k => $v) {
			echo "----计算趋势----" . $v["name"] . "------------<br>";
			$tendency_time = 4; //间隔时间4小时
			$t = time();
			$tendency_str = $t - (24 * 60 * 60 * 3); //当前时间的3天前

			for ($x = 0; $x <= 18; $x++) { //18次,72个小时
				$na = $tendency_str + (60 * 60 * $tendency_time * $x);
				$nb = $tendency_str + (60 * 60 * $tendency_time * ($x + 1));
				$b = M("TradeLog")->where("addtime >=" . $na . " and addtime <" . $nb . " and market ='" . $v["name"] . "'")->max("price");

				if (!$b) { $b = 0; }
				$rs[] = array($na, $b);
			}

			M("Market")->where(array("name" => $v["name"]))->setField("tendency", json_encode($rs));
			unset($rs);
			echo "计算成功!";
			echo "\n";
		}
		echo "趋势计算0k " . "\n";
	}
	
	/** 计算行情 **/
    public function chart()
    {
        $list = M("market")->select();
		foreach ($list as $k => $v) {
			$this->setTradeJson($v["name"]);
		}
		echo "图形数据生成OK " . "\n";
    }
    
    
    //生成交易K线图数据
    public function setTradeJson___(){
        $timearr = array(1, 5, 15, 30, 60, 240,1440);
        
    }
    
    //生成交易日志
	public function setTradeJson($market)
	{
		$timearr = array(1, 5, 15, 30, 60, 240,1440);
		foreach ($timearr as $k => $v) {
		    //如果在该时间类型有数据
			$tradeJson = M("TradeJson")->where(array("market" => $market, "type" => $v))->order("id desc")->find();
			if ($tradeJson) {
				$addtime = $tradeJson["addtime"];
			} else {
				$addtime = M("TradeLog")->where(array("market" => $market))->order("id asc")->getField("addtime");
			}
			
			if ($addtime) {
				$youtradelog = M("TradeLog")->where("addtime >=" . $addtime . "  and market ='" . $market . "'")->sum("num");
			}
			
			
			if ($youtradelog) {
				if ($v == 1) {
					$start_time = $addtime;
				} else {
					$start_time = mktime(date("H", $addtime), floor(date("i", $addtime) / $v) * $v, 0, date("m", $addtime), date("d", $addtime), date("Y", $addtime));
				}
				
				for ($x = 0; $x <= 20; $x++) {
					$na = $start_time + (60 * $v * $x);
					$nb = $start_time + (60 * $v * ($x + 1));

					if (time() < $na) {
						break;
					}

					$sum = M("TradeLog")->where("addtime >=" . $na . " and addtime <" . $nb . " and market ='" . $market . "'")->sum("num");

					if ($sum) {
						$sta = M("TradeLog")->where("addtime >=" . $na . " and addtime <" . $nb . " and market ='" . $market . "'")->order("id asc")->getField("price");
						$max = M("TradeLog")->where("addtime >=" . $na . " and addtime <" . $nb . " and market ='" . $market . "'")->max("price");
						$min = M("TradeLog")->where("addtime >=" . $na . " and addtime <" . $nb . " and market ='" . $market . "'")->min("price");
						$end = M("TradeLog")->where("addtime >=" . $na . " and addtime <" . $nb . " and market ='" . $market . "'")->order("id desc")->getField("price");
						
						$d = array($na, $sum, $sta, $max, $min, $end);//时间，成交量,成交价,最高价,最低价,收盘价
				        
				        if($v == 1){
				            $newd['new_price'] = $sta;
						    $newd['min_price'] = $min;
				        }
				        
				        if($v == 1440){
				            $newd['volume'] = $sum;
				        }
					    
						// 判断是否有最新成交记录
						$jiansuotime = M("TradeLog")->where(array("market" => $market))->order("id desc")->find();
						$times = floor((time()-$jiansuotime['addtime'])%86400/60);
						if ($times >= 1){
							$jiansuo = M("TradeJson")->where(array("market" => $market, "data" => json_encode($d), "addtime" => $na, "type" => $v))->find();
							if ($jiansuo) {
								$sdfds = array();
								$sdfds['market'] = $market;
								$sdfds['price'] = $sta;
								$sdfds['num'] = 0;
								$sdfds['mum'] = 0;
								$sdfds['type'] = 1;
								$sdfds['addtime'] = time();
								$sdfds['status'] = 0;

								$aa = M("TradeLog")->add($sdfds);
								M("TradeJson")->execute("commit");
								sleep(1);
							}
						}
						
						if (M("TradeJson")->where(array("market" => $market, "addtime" => $na, "type" => $v))->find()) {
							M("TradeJson")->where(array("market" => $market, "addtime" => $na, "type" => $v))->save(array("data" => json_encode($d)));
							
					        $marketlist = M("market")->where(array('name'=>$market))->save($newd);
							
						} else {
						    
					        $marketlist = M("market")->where(array('name'=>$market))->save($newd);
					        
							$aa = M("TradeJson")->add(array("market" => $market, "data" => json_encode($d), "addtime" => $na, "type" => $v));
							M("TradeJson")->execute("commit");
							M("TradeJson")->where(array("market" => $market, "data" => "", "type" => $v))->delete();
							M("TradeJson")->execute("commit");
						}

					} else {
						M("TradeJson")->add(array("market" => $market, "data" => "", "addtime" => $na, "type" => $v));
						M("TradeJson")->execute("commit");
					}
				}
			}
		}
		return "计算成功!";
	}
	
	
	/** 机器人交易刷单 **/  //每次需要刷单几次，但单价需要不一致
    public function autotrade____(){
        $list = M("market")->select();
        if(!empty($list)){
            foreach($list as $k=>$v){
                //买的价格低，卖的价格高 ，1买2卖
                $type = rand(1, 2);
                $market = $v['name'];
                
                $wei = 1;
			    $min_price = $v['sdlow'] * $wei; //最低价格
			    $max_price = $v['sdhigh'] * $wei; //最高价格
			    $min_x_num = $v['sdlow_num'] * $wei; //最低数量
			    $max_x_num = $v['sdhigh_num'] * $wei; //最高数量
			    
			    $marketround = $v['round']; //获取交易价小数点
			    $marketmum = $v['round_mum']; //获取交易数量小数点
			    
                if ($max_price < $min_price) {
                    $min_price = $max_price;
                    $max_price = $min_price;
                }
                
                //如果设置了最高,最低刷单上下线,则价格按照此区域运行
                if ($v['sdhigh'] > 0 && !$v['zhang']) {
                    $max_price = $v['sdhigh'] * $wei;
                }
                if ($v['sdlow'] > 0 && !$v['die']) {
                    $min_price = $v['sdlow'] * $wei;
                }
                if ($v['zhang'] > 0) {
                    $max_price = $v['hou_price'] * (1 + $v['zhang']) * $wei;
                }
                if ($v['die'] > 0) {
                    $min_price = $v['hou_price'] * (1 + $v['die']) * $wei;
                }
			    
			    if (strlen($min_price) > 3||strlen($max_price) > 3) {
			    	$tbsss = str_pad(1,$marketround+2,"0",STR_PAD_RIGHT);
			    } else {
			    	$tbsss = 1000;
			    }
			    $min_price = $min_price * $tbsss;
			    $max_price = $max_price * $tbsss;
			    
                $price = round((rand($min_price, $max_price) / $tbsss) / $wei, $marketround);//随机价
  
			    // 刷单数量
			    if ($max_x_num >0 && $min_x_num >0) {
			    	if ($max_x_num > 99999) {$muls = 1;} else {$muls = 10000;}
			    	if ($min_x_num > 99999) {$muns = 1;} else {$muns = 10000;}
			    	
                    $max_num = round($max_x_num * $muls, $marketmum);
                    $min_num = round($min_x_num * $muns, $marketmum);
			    	
			    	
			    	$num = round(rand($min_num, $max_num) / $muns, $marketmum);
			    	
			    } else {
                    $max_num = round(9.9999 * 10000, $marketmum);
                    $min_num = round(0.0001 * 10000, $marketmum);
                    $num = round(rand($min_num, $max_num) / 10000, $marketmum);
                }
			    
			    $data['userid'] = 0;
			    $data['market'] = $market;
			    $data['price'] =$price;
			    $data['num'] =$num;
			    $data['mum'] =$num;
			    $data['fee'] =0;
			    $data['type'] =$type;
			    $data['addtime'] = time();
			    $data['status'] = 1;
			    M("trade")->add($data);
			    
			    $re = M("trade_log")->where(array('market'=>$market,'type'=>$type,"addtime"=>$data['addtime']))->count();
			    if($re < 1){
			        $dlog['market'] = $market;
			        $dlog['price'] = $price;
			        $dlog['num'] = $num;
			        $dlog['mum'] = $num;
			        $dlog['type'] = $type;
			        $dlog['addtime'] = time();
			        $dlog['status'] = 1;
			        M("trade_log")->add($dlog);
			    } 
			    
            }
            
            echo "=".$market."==交易OK==";
        }

    }
   
    
    
    //生成交易记录和交易记录 
    public function fortrade(){
        for($i=1; $i<=3; $i++){
            $this->autotrade();
        }
    }
	
	/** 机器人交易刷单 **/  //每次需要刷单几次，但单价需要不一致
    public function autotrade(){
        $list = M("market")->select();
        if(!empty($list)){
            foreach($list as $k=>$v){
                //买的价格低，卖的价格高 ，1买2卖
                $type = rand(1, 2);
                $market = $v['name'];
                
                $wei = 1;
			    $min_price = $v['sdlow'] * $wei; //最低价格
			    $max_price = $v['sdhigh'] * $wei; //最高价格
			    $min_x_num = $v['sdlow_num'] * $wei; //最低数量
			    $max_x_num = $v['sdhigh_num'] * $wei; //最高数量
			    
			    $marketround = $v['round']; //获取交易价小数点
			    $marketmum = $v['round_mum']; //获取交易数量小数点
			    
                if ($max_price < $min_price) {
                    $min_price = $max_price;
                    $max_price = $min_price;
                }
                
                //如果设置了最高,最低刷单上下线,则价格按照此区域运行
                if ($v['sdhigh'] > 0 && !$v['zhang']) {
                    $max_price = $v['sdhigh'] * $wei;
                }
                if ($v['sdlow'] > 0 && !$v['die']) {
                    $min_price = $v['sdlow'] * $wei;
                }
                if ($v['zhang'] > 0) {
                    $max_price = $v['hou_price'] * (1 + $v['zhang']) * $wei;
                }
                if ($v['die'] > 0) {
                    $min_price = $v['hou_price'] * (1 + $v['die']) * $wei;
                }
			    
			    if (strlen($min_price) > 3||strlen($max_price) > 3) {
			    	$tbsss = str_pad(1,$marketround+2,"0",STR_PAD_RIGHT);
			    } else {
			    	$tbsss = 1000;
			    }
			    $min_price = $min_price * $tbsss;
			    $max_price = $max_price * $tbsss;
			    
                $price = round((rand($min_price, $max_price) / $tbsss) / $wei, $marketround);//随机价
                			    // 刷单数量
			    if ($max_x_num >0 && $min_x_num >0) {
			    	if ($max_x_num > 99999) {$muls = 1;} else {$muls = 10000;}
			    	if ($min_x_num > 99999) {$muns = 1;} else {$muns = 10000;}
			    	
                    $max_num = round($max_x_num * $muls, $marketmum);
                    $min_num = round($min_x_num * $muns, $marketmum);
			    	
			    	
			    	$num = round(rand($min_num, $max_num) / $muns, $marketmum);
			    	
			    } else {
                    $max_num = round(9.9999 * 10000, $marketmum);
                    $min_num = round(0.0001 * 10000, $marketmum);
                    $num = round(rand($min_num, $max_num) / 10000, $marketmum);
                }
                
                
			    
			    $data['userid'] = 0;
			    $data['market'] = $market;
			    $data['price'] =$price;
			    $data['num'] =$num;
			    $data['mum'] =$num;
			    $data['fee'] =0;
			    $data['type'] =$type;
			    $data['addtime'] = time();
			    $data['status'] = 1;
                M("trade")->add($data);
			    //$re = M("trade_log")->where(array('market'=>$market,'type'=>$type,"addtime"=>$data['addtime']))->count();
			    //if($re < 1){
			    $dlog['market'] = $market;
			    $dlog['price'] = $price;
			    $dlog['num'] = $num;
			    $dlog['mum'] = $num;
			    $dlog['type'] = $type;
			    $dlog['addtime'] = time();
			    $dlog['status'] = 1;
			    M("trade_log")->add($dlog);
			    //} 
			    
            }
            
            echo "=".$market."==交易OK==";
        }

    }


}
?>