<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\kangbazi\public/../application/index\view\klass\edit.html";i:1530238911;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>编辑班级</title>
	</head>
	<body>
		<form action="<?php echo url('update'); ?>" method="post">
					<input type="hidden" name="id" value="<?php echo $banjia->getData('id'); ?>" />
					<div class="form-group">
						<label>班级：</label>
						<input type="text" name="name" id="name"/ value="<?php echo $banjia->getData('name'); ?>">
					</div>
					<div class="form-group">
						<label>教师名：</label>
						<select name="teacher_Id" id="teacher_Id">
							<?php if(is_array($laoshia) || $laoshia instanceof \think\Collection || $laoshia instanceof \think\Paginator): $i = 0; $__LIST__ = $laoshia;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_Teacher): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $_Teacher->getData('id'); ?>" 
							<?php if($_Teacher->getData('id') == $banjia->getData('teacher_Id')): ?> 
							selected="selected" <?php endif; ?>>
							<?php echo $_Teacher->getData('name'); ?>
						</option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					</div>
					<button type="submit">保存</button>
		</form>
	</body>
</html>
