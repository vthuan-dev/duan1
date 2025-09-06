<?php
namespace Admin\Controller;

class OrepoolController extends AdminController
{
	private $Model;

	public function __construct()
	{
		parent::__construct();
	}
	
	//矿池管理列表
	public function index(){


		$this->display();
	}
	
	//添加矿池项目页面
	public function addorepool(){
	    
		$this->display();
	}
	
	//修改矿池项目处理
	public function orepoolesave(){
		if($_POST){			
			//ID号
			$id = htmlspecialchars(trim(I('post.oid')));
			$info = M("orepool")->where(array('id'=>$id))->find();
			if(empty($info)){
				$this->error("记录不存在");
			}
			$oretitle = htmlspecialchars(trim(I('post.oretitle')));//矿池名称
			if($oretitle == ''){
				$this->error("请输入矿池名称");
			}
			$oreimg = htmlspecialchars(trim(I('post.idimg1'))); //项目图片
			if($oreimg == ''){
				$this->error("请上传项目图片");
			}
			$coinname = htmlspecialchars(trim(I('post.coinname'))); //参与币种
			if($coinname == ''){
				$this->error("请选择参与矿池的币种");
			}
			$cc_coin = htmlspecialchars(trim(I('post.cc_coin'))); //产出币种
			if($cc_coin == ''){
				$this->error("请选择矿池产出的币种");
			}			
			$summoney = htmlspecialchars(trim(I('post.summoney')));//矿矿总价值
			if($summoney == ''){
				$this->error("请输入矿池总价值");
			}			
			$fmoney = htmlspecialchars(trim(I('post.fmoney'))); //模拟进度
			if($fmoney == ''){
				$this->error("请输入矿池模拟投入金额");
			}
			$minmoney = htmlspecialchars(trim(I('post.minmoney'))); // 最低投资额度
			if($minmoney == ''){
				$this->error("请输入单笔最低投资额度");
			}
			$maxmoney = htmlspecialchars(trim(I('post.maxmoney'))); //最高投资额度
			if($maxmoney == ''){
				$this->error("请输入单笔最大投资额度");
			}
			$rtype = htmlspecialchars(trim(I('post.rtype'))); //币释放规则
			if($rtype == ''){
				$this->error("请选择币释放规则");
			}
			$sfbl = htmlspecialchars(trim(I('post.sfbl'))); //固定释放比例
			if($sfbl == ''){
				$this->error("请输入固定释放比例");
			}
			$gdnum = htmlspecialchars(trim(I('post.gdnum'))); //固定释放额度
			if($gdnum == ''){
				$this->error("请输入固定释放额度");
			}
			$gdbl = htmlspecialchars(trim(I('post.gdbl'))); //固定额度比例
			if($gdbl == ''){
				$this->error("请输入固定额度比例");
			}
			$rway = htmlspecialchars(trim(I('post.rway'))); //释放方式
			if($rway == ''){
				$this->error("请选择释放方式");
			}
			$buytype = htmlspecialchars(trim(I('post.buytype'))); //购买方式
			if($buytype == ''){
				$this->error("请选择购买方式");
			}
			$arrmoney = htmlspecialchars(trim(I('post.arrmoney'))); 
			
			if($arrmoney == ''){
				$arrmoney = 0;
			}
			
			$buynum = htmlspecialchars(trim(I('post.buynum'))); //单用户购买次数
			if($buynum == ''){
				$this->error("请输入单用户购买次数");
			}
			
			$sort = htmlspecialchars(trim(I('post.sort')));//排序
			if($sort == ''){
				$this->error("请输入排序编号");
			}
			$status = htmlspecialchars(trim(I('post.status'))); // 状态
			if($status == ''){
				$this->error("请输入矿池开放状态");
			}
			

			$save['oretitle'] = $oretitle;
			$save['oreimg'] = $oreimg;
			$save['summoney'] = $summoney;
			$save['fmoney'] = $fmoney;
			$save['minmoney'] = $minmoney;
			$save['maxmoney'] = $maxmoney;
			$save['coinname'] = $coinname;
			$save['cc_coin'] = $cc_coin;
			$save['rtype'] = $rtype;
			$save['status'] = $status;
			$save['addtime'] = date("Y-m-d H:i:s",time());
			$save['buytype'] = $buytype;
			$save['arrmoney'] = $arrmoney;
			$save['buynum'] = $buynum;
			$save['rway'] = $rway;
			$save['sfbl'] = $sfbl;
			$save['gdnum'] = $gdnum;
			$save['gdbl'] = $gdbl;
			$save['sort'] = $sort;

			$re = M("orepool")->where(array('id'=>$id))->save($save);
			
			if($re){
				$this->success("修改成功");exit();
			}else{
				$this->error("修改失败");exit();
			}
			
		}else{
			$this->error("网络错误");exit();
		}
		
	}
	
	//添加矿池项目处理
	public function orepoolsave(){
		if($_POST){			
			$oretitle = htmlspecialchars(trim(I('post.oretitle')));//矿池名称
			if($oretitle == ''){
				$this->error("请输入矿池名称");
			}
			$oreimg = htmlspecialchars(trim(I('post.idimg1'))); //项目图片
			if($oreimg == ''){
				$this->error("请上传项目图片");
			}
			$coinname = htmlspecialchars(trim(I('post.coinname'))); //参与币种
			if($coinname == ''){
				$this->error("请选择参与矿池的币种");
			}
			$cc_coin = htmlspecialchars(trim(I('post.cc_coin'))); //产出币种
			if($cc_coin == ''){
				$this->error("请选择矿池产出的币种");
			}			
			$summoney = htmlspecialchars(trim(I('post.summoney')));//矿矿总价值
			if($summoney == ''){
				$this->error("请输入矿池总价值");
			}			
			$fmoney = htmlspecialchars(trim(I('post.fmoney'))); //模拟进度
			if($fmoney == ''){
				$this->error("请输入矿池模拟投入金额");
			}
			$minmoney = htmlspecialchars(trim(I('post.minmoney'))); // 最低投资额度
			if($minmoney == ''){
				$this->error("请输入单笔最低投资额度");
			}
			$maxmoney = htmlspecialchars(trim(I('post.maxmoney'))); //最高投资额度
			if($maxmoney == ''){
				$this->error("请输入单笔最大投资额度");
			}
			$rtype = htmlspecialchars(trim(I('post.rtype'))); //币释放规则
			if($rtype == ''){
				$this->error("请选择币释放规则");
			}
			$sfbl = htmlspecialchars(trim(I('post.sfbl'))); //固定释放比例
			if($sfbl == ''){
				$this->error("请输入固定释放比例");
			}
			$gdnum = htmlspecialchars(trim(I('post.gdnum'))); //固定释放额度
			if($gdnum == ''){
				$this->error("请输入固定释放额度");
			}
			$gdbl = htmlspecialchars(trim(I('post.gdbl'))); //固定额度比例
			if($gdbl == ''){
				$this->error("请输入固定额度比例");
			}
			$rway = htmlspecialchars(trim(I('post.rway'))); //释放方式
			if($rway == ''){
				$this->error("请选择释放方式");
			}
			$buytype = htmlspecialchars(trim(I('post.buytype'))); //购买方式
			if($buytype == ''){
				$this->error("请选择购买方式");
			}
			
			$arrmoney = htmlspecialchars(trim(I('post.arrmoney'))); 
			
			if($arrmoney == ''){
				$arrmoney = 0;
			}

			
			$buynum = htmlspecialchars(trim(I('post.buynum'))); //单用户购买次数
			if($buynum == ''){
				$this->error("请输入单用户购买次数");
			}
			
			$sort = htmlspecialchars(trim(I('post.sort')));//排序
			if($sort == ''){
				$this->error("请输入排序编号");
			}
			$status = htmlspecialchars(trim(I('post.status'))); // 状态
			if($status == ''){
				$this->error("请输入矿池开放状态");
			}
			
			$save['oretitle'] = $oretitle;
			$save['oreimg'] = $oreimg;
			$save['summoney'] = $summoney;
			$save['fmoney'] = $fmoney;
			$save['minmoney'] = $minmoney;
			$save['maxmoney'] = $maxmoney;
			$save['coinname'] = $coinname;
			$save['cc_coin'] = $cc_coin;
			$save['rtype'] = $rtype;
			$save['status'] = $status;
			$save['addtime'] = date("Y-m-d H:i:s",time());
			$save['buytype'] = $buytype;
			$save['arrmoney'] = $arrmoney;
			$save['buynum'] = $buynum;
			$save['rway'] = $rway;
			$save['sfbl'] = $sfbl;
			$save['gdnum'] = $gdnum;
			$save['gdbl'] = $gdbl;
			$save['sort'] = $sort;

			$re = M("orepool")->add($save);
			if($re){
				$this->success("添加成功");exit();
			}else{
				$this->error("添加失败");exit();
			}
			
		}else{
			$this->error("网络错误");exit();
		}
	}
	
	//修改矿池项目
	public function editorepool(){
		$id = trim(I('get.id'));
		$info = M("orepool")->where(array('id'=>$id))->find();	
		$this->assign('info',$info);
		$this->display();
	}
	
	//删除矿池项目
	public function delore(){
		if($_GET){
			$id = trim(I('get.id'));
			$info = M("orepool")->where(array('id'=>$id))->find();	
			if(empty($info)){
				$this->error("该记录不存在");exit();
			}
			if($info['allmoney'] > 0){
				$this->error("已有会员参与该矿池，不能删除");
			}
			$re = M("orepool")->where(array('id'=>$id))->delete();
			if($re){
				$this->success("操作成功");exit();
			}else{
				$this->error("操作失败");exit();
			}
		}else{
			$this->error("非法操作");exit();
		}
		
	}



	

}

?>