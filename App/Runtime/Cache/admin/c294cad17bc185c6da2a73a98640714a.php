<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
    <form action="<?php echo U(GROUP_NAME.'/Role/toAdd');?>" method="post">
    <input type="hidden" name="id" value="<?php echo ($list[0]["id"]); ?>" />
    <table class="table">
        <tr>
            <th colspan="2" align="center">角色添加</th>
        </tr>

        <tr>
            <td align="right">角色名：</td>
            <td><input type="text" style="width:250px" name="role_name" value="<?php echo ($list[0]["role_name"]); ?>" /> </td>
        </tr>
        <tr>
            <td align="right">角色字段名：</td>
            <td><input type="text" style="width:250px" name="role_ename" value="<?php echo ($list[0]["role_ename"]); ?>" /> </td>
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