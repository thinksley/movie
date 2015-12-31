<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
    <form action="<?php echo U(GROUP_NAME.'/User/toAdd');?>" method="post">
    
    <table class="table">
        <tr>
            <th colspan="2" align="center">用户修改</th>
        </tr>
        <tr>
            <td align="right">用户名：</td>
            <td><input type="text" style="width:250px" name="username" value="" /> </td>
        </tr>
        <tr>
            <td align="right">密码：</td>
            <td><input type="text" style="width:250px" name="password" value="" /> </td>
        </tr>
        <tr>

            <td align="right">用户组：</td>
            
            <td>
                <select name="group">
                    <option value="">==请选择==</option>
                    
                    <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v["role_ename"]); ?>"><?php echo ($v["role_name"]); ?></option><?php endforeach; endif; ?>

                </select>
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