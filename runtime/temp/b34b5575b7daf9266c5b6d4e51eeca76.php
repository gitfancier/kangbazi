<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\kangbazi\public/../application/index\view\klass\add.html";i:1530186398;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>添加班级</title>
	</head>
	<body>
		<form action="<?php echo url('save'); ?>" method="post">
			<div class="form-group">
						<label>班级：</label>
						<input type="text" name="name" id="name"/>
					</div>
					<div class="form-group">
						<label>教师名：</label>
						<select name="teacher_Id" id="teacher_Id">
							<?php if(is_array($luhan) || $luhan instanceof \think\Collection || $luhan instanceof \think\Paginator): $i = 0; $__LIST__ = $luhan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$laoshi): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $laoshi->getData('id'); ?>"><?php echo $laoshi->getData('name'); ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					</div>
					<button type="submit">保存</button>
		</form>
	</body>
</html>
