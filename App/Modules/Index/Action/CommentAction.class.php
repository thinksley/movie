<?php

Class CommentAction extends Action{
    Public function add(){
    	//angular post数据要用如下来获取
    	$params = json_decode(file_get_contents('php://input'),true); 
    	
    	if(!IS_POST) halt('页面不存在');

    	$data['aid']=$params['aid'];
    	$data['username']=$params['username'];
    	$data['comment']=$params['comment'];

    	
    	if(M('comment')->add($data)){
    		echo json_encode(array(
    			'status'=>1,
    			'msg'=>'success'
    			));
    		//$this->success('评论成功!');
    	}else{
    		$this->error('评论失败!');
    	}
    }

    Public function getCommentList(){
    	$aid=I('aid');

    	$where=array('aid'=>$aid);
    	$res=M('comment')->where($where)->select();
    	echo json_encode($res);
    }
}
?>