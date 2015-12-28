<?php

Class UserAction extends CommonAction{
    //博文列表
    Public function index(){

       $this->list=M('user')->select();

       $this->display();
    }

    Public function edit(){

       $this->list=M('user')->select();

       $this->display();
    }
    
}

?>