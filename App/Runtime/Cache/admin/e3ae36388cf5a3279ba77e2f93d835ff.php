<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
	<form action="<?php echo U(GROUP_NAME.'/Category/runAddCate');?>" method="post">
		<table class="table">
			<tr>
				<th align="right">分类栏目名称：</th>
				<td>
					<input type="text" name="name" />
				</td>
			</tr>
			<tr>
				<td align="right">排序：</td>
				<td>
					<input type="text" name='sort' value="100" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
					<input type="submit" value="保存" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>