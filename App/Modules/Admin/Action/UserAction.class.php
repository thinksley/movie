<?php

Class UserAction extends CommonAction{
    //博文列表
    Public function index(){

       $this->list=M('user')->select();

       $this->display();
    }

    Public function add(){
      $this->role=M('role')->select();
      $this->display();
    }
    Public function toAdd(){
    	$data=$_POST;
    	$data['password']=I('password','','md5');

    	$user=M('user')->where(array('username'=>I('username')))->find();
    	if($user){
    		$this->error('用户名存在请重试!');
    	}
		if(M('user')->add($data)){
			$this->success('添加成功!',U('index'));
		}else{
    		$this->error('添加失败!');
    	}
	}

    Public function edit(){
       $id=(int)$_GET['id'];
       
       $this->role=M('role')->select();

       $where=array('id'=>$id);

       $this->list=M('user')->where($where)->select();

       $this->display();
    }

    Public function toEdit(){
    	$data=$_POST;
    	$where=array('username'=>$data['username']);
    	if(M('user')->where($where)->save($data)){
    		$this->success('修改成功!',U('index'));
    	}else{
    		$this->error('修改失败!');
    	}
    }

    Public function toTrach(){
    	$id=(int)$_GET['id'];

        if(M('user')->delete($id)){
        	$this->success('删除成功',U('index'));
        }else{
        	$this->error('删除失败');
        }
    }
}

?>