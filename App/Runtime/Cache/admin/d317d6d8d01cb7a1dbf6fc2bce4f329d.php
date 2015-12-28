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
            <th>ID</th>
            <th>属性名称</th>
            <th>颜色</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["name"]); ?></td>
                <td style="background:<?php echo ($v["color"]); ?>"></td>
                <td>
                    [<a href="">修改</a>]
                    [<a href="">删除</a>]
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</body>
</html>