<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\WWW\kangbazi\public/../application/index\view\teacher\edit.html";i:1530256552;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>新增数据</title>
		<link rel="stylesheet" href="../../../../public/static/bootstrap/css/bootstrap.css" />
		   <style type="text/css">
        #loginForm {
            background-color: #FFF;
            height: 400px;
            width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            flex-direction: column;
        }

        @media only screen and (max-width: 768px) {
            #loginForm {
                /*width:70%;*/
            }
        }

        .panel-heading.collapsed span.glyphicon-chevron-toggle:after {
            content: "\e114";
        }

        .panel-heading span.glyphicon-chevron-toggle:after {
            content: "\e113";
        }
    </style>	
	</head>
	<body>
		<body class="container" style="background-color:#ccc;">
    <div id="loginForm">
        <h3><span class="glyphicon glyphicon-user"></span> 教师编辑</h3>
			<form action="<?php echo url('teacher/update'); ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $qfdata->getData('id'); ?>">
				<div class="">
					<label>姓&nbsp;&nbsp;&nbsp;&nbsp;名：</label>			
					<input type="text" name="name" value="<?php echo $qfdata->getData('name'); ?>">
				</div>
				<div class="">
					<label>用户名：</label>
					<input type="text" name="username" value="<?php echo $qfdata->getData('username'); ?>">
				</div>
				<label>性&nbsp;&nbsp;别：</label>
				<select name="sex">
					<option value="0">男</option>
					<option value="1" <?php if($qfdata->getData('sex') == '1'): ?> selected="selected"<?php endif; ?>>女</option>
				</select>
				<div class="">
					<label>邮箱：</label>
					<input type="text" name="email" value="<?php echo $qfdata->getData('email'); ?>">
				</div>
				
				<button type="submit">保存<tton>
			</form>
		</div>
	</div>
</body>
<ml>
