<?php
return array(
	'DB_HOST'=>'127.0.0.1',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_NAME'=>'movie',
	'DB_PREFIX'=>'mv_',

	//'SHOW_PAGE_TRACE'=>True,
	
	'APP_GROUP_LIST'=>'Index,Admin',
	'DEFAULT_GROUP'=>'Index',
	'APP_GROUP_MODE'=>1,
	'APP_GROUP_PATH'=>'Modules',

	//??ˮӡ????ļ?
	'LOAD_EXT_CONFIG'=>'water',

	'URL_ROUTER_ON'=>true,

	//http://127.0.0.1/blog/index.php/c_154  输出154
	'URL_ROUTE_RULES'=>array(
		'/^c_(\d+)$/'=>'Index/List/index?id=:1',  //:1 表示(\d+)
		':id\d'=>'Index/Show/index'
		),

	//图片上传
	'UPLOAD_MAX_SIZE'=>2000000,
	'UPLOAD_PATH'=> './Uploads/',
	'UPLOAD_EXTS' => array('jpg', 'jpeg', 'gif', 'png'),	//允许上传文件的后缀
	  

)
?>