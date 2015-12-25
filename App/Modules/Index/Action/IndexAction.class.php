<?php

Class IndexAction extends Action{
    Public function index(){
    	
       //  //读取导航
       //  $cate=M('cate')->order('sort')->select();
       //  import('Class.Category',APP_PATH);
       //  $this->cate=Category::unlimitedForLayer($cate);
        

       //  //首页数据
       // $topCate=M('cate')->where(array('pid'=>0))->order('sort')->select();
       //  $db=M('blog');
       //  foreach($topCate as $k => $v){
       //  	$cids=Category::getChildsId($cate,$v['id']);
       //  	$cids[]=$v['id'];
        	
       //  	$where=array('cid'=>array('IN',$cids));
       //  	$topCate[$k]['blog']=$db->field(array('id','title','time'))->where($where)->order('time DESC')->select();
       //  }

       //  //S('index_list',$topCate,10);  //写入缓存
       //  $this->list=$topCate;

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
}
?>