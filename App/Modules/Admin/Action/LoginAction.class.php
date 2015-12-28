<?php
/**
* 
*/
Class LoginAction extends Action
{
	
	Public function index(){

		$this->display();

	}

	//登录表单操作
	Public function login(){

		if(!IS_POST) halt('页面不存在');
		
		if(I('code','','md5')!=session('verify')) $this->error('验证码错误');
		
		$usrname= I('username');
		$pwd=I('password','','md5');

		
		$db=M('user');
		$user=$db->where(array('username'=>I('username')))->find();
		
		if(!$user || $user['password']!=$pwd){
			$this->error('账号或密码错误');
		}

		if($user['group']!='admin'){
			$this->error('非管理员，禁止访问');
		}

		$data=array(
				'id'=>$user['id'],
				'logintime'=>time(),
				'loginip'=>get_client_ip()
			);

		$db->save($data);

		session('uid',$user['id']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s',$user['logintime']));

		redirect(__GROUP__);

	}

	Public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
}
?>
