<?php
return array(
	//开启细页html缓存
	'HTML_CACHE_ON'=>true,
	'HTML_CACHE_RULES'=>array(
			'Show:index'=>array('{:module}_{:action}_{id}',100)
		)
	 );
?>