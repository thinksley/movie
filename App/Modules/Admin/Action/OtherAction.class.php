<?php
Class OtherAction extends CommonAction{
     Public function index(){
     	die('失败 么么da ');
     	header("Content-type: text/html; charset=utf-8"); 
     	$hostname='http://localhost';
		$filename =$hostname.__ROOT__.'/Data/dist.txt';
		
   		$str=file_get_contents($filename, 0);

   		$arr=json_decode($str);
		$arr2=array();
		//print_r($arr);die; 

		foreach($arr as $k => $v){
			echo $v[$k];
		    //$arr2[]=$val[$k];
		}
		echo "<pre>";
		print_r($arr2);
		echo "</pre>";
     }
}

?>