<?php


class FoodAction extends Action {
    public function addClick(){
        $Food = D("Food");
        $food_id = $_GET['food_id'];
        $map['food_id'] = $food_id;
        $food = $Food ->where($map)->find();
        $food['click']= $food['click']+1;
        $Food->save($food);
        $this->redirect("index?food_id=$food_id");
    }
    
    public function index(){
    	if(($_GET['food_id'])==null){
    		$this->error("please choose a food you like");
    	}
        //dump($_GET['food_id']);
        $user_id= session("user_id");
    	$food_id  = $_GET['food_id'];
    	$Food = D("Food");
        $User = D("User"); 
    	$Comment = D("Comment");
    	//send the food information 
    	$map['id'] = $food_id;
    	$food = $Food->where($map)->find();
        $map = null;
        $map['id'] = $user_id;
        $user = $User->where($map)->find();   
    	$Info['food_id'] = $food['id'];
    	$Info['food_name'] = $food['name'];
    	$Info['food_introduction'] = $food['introduction'];
    	$Info['food_image'] = $food['image'];
    	$Info['food_address'] = $food['address'];
        $Info["user_id"] =  $user_id;
        $Info["user_name"] = $user['name'];
        $Info["icon"] = $user['icon'];
    	//send the commenmt
        $map = null;
        $map['food_id'] = $food_id ;
    	$comment=$Comment->where($map)->select();
    	//dump($comment);
        for($i=0;$comment[$i] != null;$i++){
    		$map = null;
            $map['id']=$comment[$i]['user_id'];
            $user = $User ->where($map)->find(); 
            $Info['comment'][$i]['name']=$user['name'];
            $Info['comment'][$i]['icon']=$user['icon'];
            $Info['comment'][$i]['content']= $comment[$i]['content'];    		
    	}
        
        //dump($Info);
        //dump($user);
        $this->assign("user_id",$user_id);
    	$this->assign($Info);
    	$this->display();
	}

	public function update(){
        //dump($_POST);
		if (session('user_id')==null){
            $this->error("sorry ,please log in ~");
        }
        $Comment=D("Comment");
		$user_id=session('user_id');
		$food_id=$_POST['food_id'];
		//$state =$_POST['state'];
		//$comment_id= $_POST['comment_id'];
		//$toUser_id= $_POST['toUser_id'];
		$content= $_POST['content']; 
		//add a comemnt
		$data['user_id']=$user_id;
		$data['food_id']=$food_id;
		$data['content']=$content;
		$data['date']=date("Y-m-d");  
		$data['state'] = 0;
		$data['toUser_id']=0;
		$data['toComment_id']=0;
        dump($data);
        $Comment->add($data);
        $this->redirect("index?food_id=$food_id");
	}
}