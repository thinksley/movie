<?php
/**
* 
*/
Class IndexAction extends CommonAction
{
	
	Public function index(){
		$this->display();
	}

	//退出登录
	Public function logout(){
		session_unset();
		session_destroy();
		$this->redirect(GROUP_NAME.'/Login/Index');
	}
}
?>
