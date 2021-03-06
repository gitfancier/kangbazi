<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpStudy\WWW\kangbazi\public/../application/index\view\teacher\index.html";i:1530254273;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>新余学院教师管理</title>
		<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../../../../public/static/bootstrap/css/bootstrap.css" />
		<script type="text/javascript" src="../../../../public/static/bootstrap/js/bootstrap.js" ></script>
		<link rel="stylesheet" href="../../../../public/static/font-awesome/css/font-awesome.css" />
		<!--<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	
	
		
		<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
	</head>
	<body>
		<div class="">
		<div class="navbar bg-primary">
    	<div class="navbar-header pull-left">
    		<a href="#" class="navbar-brand btn btn-lg" style="color: #FFFFFF;">
    				<span class="fa fa-leaf fa-4x" style="font-size: 20px;">教务管理系统</span>
    		</a>
    	</div>
    		<div class="navbar-header pull-right" role="navigation">
			<div class="dropdown drop">
				<div class="btn btn-block btn-group-vertical btn-lg" id="dropdownMenu1" 
						data-toggle="dropdown">
					<i class="fa fa-cog" ></i>
						欢迎光临
					<span class="caret"></span>
				</div>
				<ul class="dropdown-menu pull-right dropdown-caret dropdown-close" role="menu" aria-labelledby="dropdownMenu1">
					<li>
						
					</li>
					<li class="divider"></li>
					<li>					
				    		<a href="<?php echo url('login/logout'); ?>"><i class="fa fa-power-off"></i>退出</a>
					</li>
				</ul>
			</div>
    		</div>
		</div>
		</div>
		
		<div class="row ">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
					
					<div class="">
						<div class="navbar-header">
							<a class="navbar-brand">教务管理</a>
						</div>
						<div class="collapse navbar-collapse" id="">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo url('Teacher/index'); ?>">教师管理</a></li>
								<li><a href="<?php echo url('Klass/index'); ?>">班级管理</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right"> 							
								<li><a href="{}"></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		
		
		<div class="container">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        <h3 class="panel-title">教师管理</h3>
		    </div>
		    <div class="panel-body">
		    	<div class="row">
		    		<div class="text-left col-md-6">
		    		<div class="btn btn-default">
		    		<a href="<?php echo url('teacher/add'); ?>"><i class="glyphicon glyphicon-plus"></i>添加</a>
		    		</div>
		    	</div>
		    	<div class="text-right col-md-6">
		    		<form class="form-inline text-right" action="<?php echo url('teacher/index'); ?>">
		    			<div class="form-group">
		    				<input type="text" name="name" class="form-control" placeholder="请输入关键词姓名" />
		    			</div>
		    			<button type="submit" class="btn btn-default">
		    				<i class=" glyphicon glyphicon-search"></i>
		    			</button>
		    		</form>
		    	</div>
		    	<!--<div class="text-left col-md-6">
		    		<div class="btn btn-default">
		    		<a href="<?php echo url('login/logout'); ?>"><i class="glyphicon glyphicon-plus"></i>退出</a>
		    		</div>
		    	</div>-->
			</div>
		</div>
		
		<!--/**************************************************************************/-->
		
		    <div class="panel-body">
		   
		    <div class="row">
		    
			<div class="col-md-12">
				<table class="table table-hover table-bordered">
			<tr>
				<th>序号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>邮箱</th>
				<th>用户名</th>	
				<th>创建时间</th>
				<th>更新时间</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($qianfeng) || $qianfeng instanceof \think\Collection || $qianfeng instanceof \think\Paginator): $key = 0; $__LIST__ = $qianfeng;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qf): $mod = ($key % 2 );++$key;?>
			<tr>
				<td><?php echo $key; ?></td>
				<td><?php echo $qf->getData('name'); ?></td>
				<td><?php if($qf->getData('sex') == '0'): ?>男<?php else: ?>女<?php endif; ?></td>
				<td><?php echo $qf->getData('email'); ?></td>
				<td><?php echo $qf->getData('username'); ?></td>
				<td><?php echo $qf->getData('create_time'); ?></td>
				<td><?php echo $qf->getData('update_time'); ?></td>
				<td><a class="btn btn-danger btn-sm" href="<?php echo url('edit?id='.$qf->getData('id')); ?>"><i class="glyphicon glyphicon-pencil"></i>编辑</a>&nbsp;&nbsp;&nbsp;
					<a class="btn btn-primary btn-sm" href="<?php echo url('delete?id='.$qf->getData('id')); ?>"><i class="glyphicon glyphicon-trash"></i>删除</a>
				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			
		</table><?php echo $qianfeng->render(); ?>
			</div>
		</div>
		    </div>
		</div>
		</div>
		
	</body>
</html>
