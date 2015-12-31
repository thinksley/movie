<?php

Class RoleAction extends CommonAction{
    
    Public function index(){

       $this->list=M('role')->select();

       $this->display();
    }

    Public function add(){
      $this->role=M('role')->select();
      $this->display();
    }

    Public function edit(){
       $id=(int)$_GET['id'];

       $where=array('id'=>$id);

       $this->list=M('role')->where($where)->select();

       $this->display();
    }

    Public function toEdit(){
      $data=$_POST;
      $id=(int)$_POST['id'];

      $where=array('id'=>$id);
      
      if(M('role')->where($where)->save($data)){
        $this->success('修改成功!',U('index'));
      }else{
        $this->error('修改失败!');
      }
    }

    Public function toAdd(){
      $data=$_POST;
      
      if(M('role')->add($data)){
        $this->success('修改成功!',U('index'));
      }else{
        $this->error('修改失败!');
      }
    }

     Public function toTrach(){
      $id=(int)$_GET['id'];

      if(M('role')->delete($id)){
        $this->success('删除成功',U('index'));
      }else{
        $this->error('删除失败');
      }
    }
    
}

?>