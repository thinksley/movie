<?php

Class IndexAction extends Action{
    Public function index(){
    	
        $this->display();
    }

    Public function getMovieList(){
      $list=M('article')->order('id DESC')->select();
      echo json_encode($list);
    }

    Public function getMovieDetail(){
      $id=$_GET['movies'];
      $where=array('id'=>$id);
      $detail=M('article')->where($where)->select();
      echo json_encode($detail);
    }

    public function clickNum(){
      
        $id=(int)$_GET['id'];
        M('article')->where(array('id'=>$id))->setInc('click');
        $click= M('article')->where(array('id'=>$id))->getField('click');
        echo $click;
       
    }
}
?>