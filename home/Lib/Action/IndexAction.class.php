<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$User = D("User");
    	$Food = D("Food");

    	if (session('user_id') != null){
    		$user_id = session("user_id");
    		$map["id"] = $user_id; 
    		$user = D("User")->where($map)->find();
    		$Info["user_id"] =  $user_id;
    		$Info["user_name"] = $user['name'];
    		$Info["icon"] = $user['icon'];
    	}
    	
    	$food = $Food->order("click DESC")->select();
    	for ($i=0;$i<4;$i++){
    		$Info['food'][$i]['id'] = $food[$i]['id'];
    		$Info['food'][$i]['name'] = $food[$i]['name'];
    	}
    	
    	$date=date("Y-m-d");
    	//dump($Info);
    	$this->assign($Info);
		$this->display('Index:index');
		//$this->redirect('../Food:index');


	}

	
}