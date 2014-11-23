<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function index(){
    	echo "helloworld";
	}

	public function login(){
		echo session("user_id");
		if ($_POST['name']!=null && $_POST['psw']!=null){
			$User= D("User");
			$tmpName = $_POST['name'];
			$tmpPsw  = $_POST['psw'];
			$map['name'] = $tmpName;
			$user = $User->where($map)->find();
			if ($user == null){
				$this->error('this account is not exits');
			}elseif(md5($tmpPsw) == $user['psw']){
				session( array(
					'name' => 'user_id'
					));
				session("user_id",$user['id']);
				$this->redirect("http://127.0.0.1/");
				return;
			}else{
				$this->error("the password is not correct!!!");
			}
		}else{
			$this->display();
		}
	}

	public function regist(){
		
		if($_POST['name']!=null && $_POST['psw']!=null){
			$User= D("User");
			$data['name']=$_POST['name'];
			$data['psw']=md5($_POST['psw']);
			$data['email']=$_POST['email'];
			$data['sex']=$_POST['sex'];
			$data['icon'] = ($_POST['sex'] == 0)?"/cdms/Public/images/boy.jpg":"/cdms/Public/images/girl.jpg";
			$data['local']=$_POST['local'];
			$user_id = $User->add($data);
			session( array(
					'name' => 'user_id'
					));
			session("user_id",$user_id);
			$this->redirect("http://127.0.0.1/");
		}else{
			$this->display();
		}

	}

	public function logout(){
		session(null);
		$this->redirect("http://127.0.0.1/");
	}
}