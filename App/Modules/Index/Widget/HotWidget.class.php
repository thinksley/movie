<?php
Class HotWidget extends Widget{
	Public function render ($data){
		//热门博文
		 
		$data['blog']=M('blog')->order('click DESC')->limit(5)->select();
		return $this->renderFile('',$data);
		
	}
}
?>