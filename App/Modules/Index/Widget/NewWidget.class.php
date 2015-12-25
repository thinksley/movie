<?php
Class NewWidget extends Widget{
	Public function render ($data){
		//zuixin博文
		$limit=$data['limit'];

		$data['news']=M('blog')->order('time DESC')->limit($limit)->select();

		return $this->renderFile('',$data);
		
	}
}
?>