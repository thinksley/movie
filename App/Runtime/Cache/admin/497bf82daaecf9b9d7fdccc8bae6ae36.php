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
            <td>用户名</td>
            <td>上次登录时间</td>
            <td>上次登录ip</td>
            <td>用户组</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["username"]); ?></td>
                <td><?php echo (date('y-m-d H:i',$v["logintime"])); ?></td>
                <td><?php echo ($v["loginip"]); ?></td>
                <td><?php echo ($v["group"]); ?></td>
                <td>
                    [<a href="<?php echo U(GROUP_NAME.'/User/edit',array('id'=>$v['id']));?>">修改</a>]
                    [<a href="<?php echo U(GROUP_NAME.'/User/toTrach',array('id'=>$v['id']));?>">删除</a>]
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</body>
</html>