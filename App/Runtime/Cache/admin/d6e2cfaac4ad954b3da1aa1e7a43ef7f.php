<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head >
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Uploadify/uploadify.css"/>
<script type="text/javascript" src='__PUBLIC__/js/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Uploadify/jquery.uploadify.min.js'></script>
<script type="text/javascript">
     var PUBLIC = '__PUBLIC__';
     var uploadUrl = '<?php echo U("uploadPic");?>';
     var sid = '<?php echo session_id();?>';
     var ROOT = '__ROOT__';
</script>
<script type="text/javascript">
$(function(){
    

    /**
     * 上传图片
     */
    $('#thumb').uploadify({
        swf : PUBLIC + '/Uploadify/uploadify.swf',  //引入Uploadify核心Flash文件
        uploader : uploadUrl,   //PHP处理脚本地址
        width : 120,    //上传按钮宽度
        height : 30,    //上传按钮高度
        buttonImage : PUBLIC + '/Uploadify/browse-btn.png', //上传按钮背景图地址
        fileTypeDesc : 'Image File',    //选择文件提示文字
        fileTypeExts : '*.jpeg; *.jpg; *.png; *.gif',   //允许选择的文件类型
        formData : {'session_id' : sid},
        //上传成功后的回调函数
        onUploadSuccess : function (file, data, response) {
            eval('var data = ' + data);
            if (data.status) {
                $('input[name=max]').val(data.path.max);
                $('input[name=medium]').val(data.path.medium);
                $('input[name=mini]').val(data.path.mini);

                $('#prev-thumb').find('img').attr('src',ROOT + '/Uploads/Pic/' + data.path.mini);
            } else {
                alert(data.msg);
            }
        }
    });
})        
</script>
</head>
<body>

    <form action="<?php echo U(GROUP_NAME.'/Article/toEdit');?>" method="post">
    <input type="hidden" name="id" value="<?php echo ($list[0]["id"]); ?>">
        <table class="table" width="80%">
            <tr>
                <th colspan="2" align="center">博文修改</th>
            </tr>
            
            
            <tr>
                <td align="right">点击次数：</td>
                <td><input type="text" style="width:250px" name="click" value="<?php echo ($list[0]["click"]); ?>" /> </td>
            </tr>
            <tr>
                <td align="right">标题：</td>
                <td><input type="text" value="<?php echo ($list[0]["title"]); ?>" style="width:250px" name="title" /> </td>
            </tr>
            <tr>
                <td align="right">图片：</td>
                <td>
                    <input type="hidden" name='max' value=''/>
                    <input type="hidden" name='medium' value=''/>
                    <input type="hidden" name='mini' value=''/>
                    <input type="file" name='thumb' id='thumb'/>
                    <div id="prev-thumb"><img src="__ROOT__/Uploads/Pic/<?php echo ($list[0]["minithumb"]); ?>" /></div>
                </td>
            </tr>
             <tr>
                <td align="right">上映时间：</td>
                <td><input type="text" style="width:250px" name="roadshow" value="<?php echo ($list[0]["readshow"]); ?>" /> </td>
            </tr>
            <tr>
                <td align="right">摘要：</td>
                <td><input type="text" style="width:250px" name="summary" value="<?php echo ($list[0]["summary"]); ?>" /> </td>
            </tr>
            <tr>
                <td colspan="2">
                   <textarea name="content" id="content"><?php echo ($list[0]["content"]); ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="确定" />
                </td>
            </tr>
        </table>
    </form>

<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.config.js" ></script>
<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.all.min.js" ></script>
<script type="text/javascript">

        var UEurl="<?php echo U('Admin/Ueditor/index');?>";
        UE.getEditor('content',{

            serverUrl:UEurl,
            UEDITOR_HOME_URL:"__ROOT__/Data/ueditor/",
            initialFrameWidth:1000,
            initialFrameHeight:450
        });
       
</script>


</body>
</html>