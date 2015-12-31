<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>角色名</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["role_name"]); ?></td>
                <td>
                    [<a href="<?php echo U(GROUP_NAME.'/Role/edit',array('id'=>$v['id']));?>">修改</a>]
                    [<a href="<?php echo U(GROUP_NAME.'/Role/toTrach',array('id'=>$v['id']));?>">删除</a>]
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</body>
</html>