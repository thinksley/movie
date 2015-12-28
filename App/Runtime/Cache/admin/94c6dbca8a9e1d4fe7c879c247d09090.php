<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
	<form action="<?php echo U(GROUP_NAME.'/Category/sortCate');?>" method="post">
		<table class="table">
			<tr>
				<th align="right">ID</th>
				<th>名称</th>
				<th>级别</th>
				<th>排序</th>
				<th align="center">操作</th>
			</tr>
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
					<td align="right"><?php echo ($v["id"]); ?></td>
					<td align="left"><?php echo ($v["html"]); echo ($v["name"]); ?></td>
					<td>
						<?php echo ($v["level"]); ?>
					</td>
					<td align="right"><input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" /></td>
					<td>
						[<a href="<?php echo U(GROUP_NAME.'/Category/addCate',array('pid'=>$v['id']));?>">添加子分类</a>]
						[<a href="">修改</a>]
						[<a href="">删除</a>]
					</td>
				</tr><?php endforeach; endif; ?>
			
			<tr>
				<td colspan="5" align="center">
					
					<input type="submit" value="排序" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>