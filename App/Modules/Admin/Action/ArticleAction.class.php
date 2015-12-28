<?php

Class ArticleAction extends CommonAction{
    //博文列表
    Public function index(){

        $arr=array();
        $article=M('Article')->select();
        
        foreach ($article as $key => $value) {
            $where=array('id'=>$value['cid']);
            $res=M('cate')->where($where)->select();
            
            $arr[$key]=array_merge($value,$res);
        }

        $this->assign('list',$arr);

        $this->display();
    }

    //删除到 / 还原 到回收站
    Public function toTrach(){
        $id=(int)$_GET['id'];
        $type=(int)$_GET['type'];  //1 为回收站  0 为不删除
        $msg=$type ? '删除' : '还原';
        $update=array(
            'id'=>$id,
            'del'=>$type
        );

        //把id作为where条件
        if(M('blog')->save($update)){
            $this->success($msg.'成功',U(GROUP_NAME.'/Blog/index'));
        }else{
            $this->error($msg.'失败');
        }
    }

    //彻底删除
    Public function delete(){
        $id=(int)$_GET['id'];
        if(M('blog')->delete($id)){
           M('blog_attr')->where(array('bid'=>$id))->delete();
           $this->success('删除成功',U(GROUP_NAME.'/Blog/trach'));
        }else{
            $this->error('删除失败');
        }
    }

    //回收站
    Public function trach(){

        $this->blog=D('BlogRelation')->getBlogs(1);
        $this->display('index');
    }

    //添加博文
    Public function article(){
        import('Class.Category',APP_PATH);
        
        $cate=M('cate')->order('sort')->select();
        $this->cate=Category::unlimitedForLevel($cate);
        $this->display();
    }

    //修改
    Public function edit(){
        
        $id=(int)$_GET['id'];
        $where=array('id'=>$id);
        $this->list=M('article')->where($where)->select();
        
        $this->display();
    }
    
    Public function toEdit(){
        $id=(int)$_POST['id'];
        $where=array('id'=>$id);
       
        if(M('article')->where($where)->save($_POST)){
            $this->success('编辑成功',U(GROUP_NAME.'/Article/index'));
        }else{
            $this->error('编辑失败');
        }

    }


    //处理提交过来的博文
    Public function addArticle(){
        $data=array(
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'summary'=>$_POST['summary'],
            'minithumb'=>$_POST['mini'],
            'mediumthumb'=>$_POST['medium'],
            'maxthumb'=>$_POST['max'],
            'roadshow'=>$_POST['roadshow'],
            'time'=>time(),
            'click'=>(int)$_POST['click'],
            'cid'=>(int)$_POST['cid']
        );

        if($bid=M('article')->add($data)){
            
            $this->success('添加成功',U(GROUP_NAME.'/Article/index'));
        }else{
            $this->error('添加失败');
        }

    }

    //处理上传图片
    Public function uploadPic(){

        if (!$this->isPost()) {
            halt('页面不存在');
        }

        $upload = $this->_upload('Pic', '800,380,120', '800,380,120');
        echo json_encode($upload);

    }

    
}

?>