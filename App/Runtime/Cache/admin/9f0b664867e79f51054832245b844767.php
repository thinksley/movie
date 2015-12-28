<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
<form action="<?php echo U(GROUP_NAME.'/Attribute/runAddAttr');?>" method="post">
    <table class="table" width="80%">
        <tr>
            <th colspan="2" align="center">添加博文属性</th>
        </tr>
        <tr>
            <td align="right" width="10%">
                属性名称
            </td>
            <td>
                <input  type="text" name="name" />
            </td>
        </tr>
        <tr>
            <td align="right" width="10%">
                标题颜色：
            </td>
            <td>
                <input  type="text" name="color" />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="确定" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>