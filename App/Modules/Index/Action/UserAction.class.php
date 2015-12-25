<?php

Class UserAction extends Action{
    Public function register(){
    	
    	if(!IS_POST) halt('页面不存在');

    	$username=I('username');
    	$password=I('password','','md5');
		$repassword=I('repassword','','md5');

		if(!empty($username) && $password == $repassword){
			$data['username']=$username;
			$data['password']=$password;
			$res=M('user')->where(array('username'=>$username))->select();

			if(count($res)){
				$this->error('用户名存在!');
			}else{
				if(M('user')->add($data)){
                    session('uid',$data['id']);
                    session('username',$data['username']);
					$this->success('注册成功!',__ROOT__.'/index.php#/movies');
				}else{
					$this->error('注册失败!');
				}
			}
		}
    }

    Public function login(){
    	
    	if(!IS_POST) halt('页面不存在');
    	$username=I('username');
    	$password=I('password','','md5');

    	$db=M('user');
    	$user=$db->where(array('username'=>$username))->find();
    	
    	if(!$user || $user['password']!=$password){
    		$this->error('账号或密码错误');
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

    	redirect(__ROOT__.'/index.php#/movies');

    }

    //退出登录
    Public function logout(){
        session_unset();
        session_destroy();
        redirect(__ROOT__.'/index.php#/movies');
    }
}

?>    