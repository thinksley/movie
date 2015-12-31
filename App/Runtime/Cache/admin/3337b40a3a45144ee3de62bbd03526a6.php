<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="#">选择按钮</a>
			
		</div>
		<div class="exit">
			<a href="<?php echo U(GROUP_NAME.'/Index/Logout');?>" target="_self">退出</a>
			
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>博文管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Article/index');?>">博文列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Article/article');?>">添加博文</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Article/trach');?>">回收站</a></dd>
			
		</dl>
		<dl>
			<dt>属性管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Attribute/index');?>">属性列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Attribute/addAttr');?>">添加属性</a></dd>
			
		</dl>
		<dl>
			<dt>分类管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Category/index');?>">分类列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Category/addCate');?>">添加分类</a></dd>
			
		</dl>
		<dl>
			<dt>用户管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/User/index');?>">用户列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/User/add');?>">添加用户</a></dd>
		</dl>
		<dl>
			<dt>角色管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Role/index');?>">角色列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Role/add');?>">添加角色</a></dd>
			
		</dl>
		<dl>
			<dt>其他</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Other/index');?>">导入</a></dd>
			
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="#"></iframe>
	</div>
</body>
</html>