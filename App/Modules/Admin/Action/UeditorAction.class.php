<?php
/**
* 百度编辑器控制器
*/
// namespace Admin\Controller;
// use Think\Controller;
class UeditorAction extends CommonAction{
	



	public function _initialize(){

	}

	public function index(){
		 import('ORG.Net.UploadFile');
		 $upload=new UploadFile();
	 	 $upload->autoSub=true;
		 $upload->subType='date';
		 $upload->dateFormat='Ym';

		$CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents(CONF_PATH."config.json")), true);

		$action = htmlspecialchars($_GET['action']);

		switch ($action) {
		    case 'config':
		        $result =  json_encode($CONFIG);
		        break;

		    /* 上传图片 */
		    case 'uploadimage':

				if($upload->upload('./Uploads/')){
					$info=$upload->getUploadFileInfo();

					//引入外部的图像类处理水印
					import('Class.Image',APP_PATH);
					Image::water('./Uploads/'.$info[0]['savename']);

					echo json_encode(array(
					'url'=>__ROOT__.'/Uploads/'.$info[0]['savename'],
					'original'=>$info[0]['name'],
					'state'=>'SUCCESS'
					));
				}else{
					 echo json_encode(array(
							'state'=>$upload->getErrorMsg()
						  ));
				}

		        break;

		    default:
		        $result = json_encode(array(
		            'state'=> '请求地址出错'
		        ));
		        break;
		}

		/* 输出结果 */
		if (isset($_GET["callback"])) {
		    if (preg_match("/^[\w_]+$/", $_GET["callback"])) {
		        echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';
		    } else {
		        echo json_encode(array(
		            'state'=> 'callback参数不合法'
		        ));
		    }
		} else {
		    echo $result;
		}


	}


}



?>