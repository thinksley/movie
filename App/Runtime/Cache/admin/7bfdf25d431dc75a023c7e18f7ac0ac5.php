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
            <td>标题</td>
            <td>所属分类</td>
            <td>点击次数</td>
            <td>发布时间</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["title"]); ?></td>
                <td><?php echo ($v[0]["name"]); ?></td>
                <td><?php echo ($v["click"]); ?></td>
                <td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
                <td>
                    <?php if(ACTION_NAME == 'index'): ?>[<a href="<?php echo U(GROUP_NAME.'/Article/edit',array('id'=>$v['id']));?>">修改</a>]
                        [<a href="<?php echo U(GROUP_NAME.'/Article/toTrach',array('id'=>$v['id'],'type'=>1));?>">删除</a>]
                    <?php else: ?>
                        [<a href="<?php echo U(GROUP_NAME.'/Article/toTrach',array('id'=>$v['id'],'type'=>0));?>">还原</a>]
                        [<a href="<?php echo U(GROUP_NAME.'/Article/delete',array('id'=>$v['id']));?>">彻底删除</a>]<?php endif; ?>

                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</body>
</html>