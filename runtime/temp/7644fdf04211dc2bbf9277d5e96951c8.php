<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\kangbazi\public/../application/index\view\teacher\add.html";i:1530255409;}*/ ?>
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
        <h3><span class="glyphicon glyphicon-user"></span> 教师添加</h3>
		
				<form action="insert" method="post" rule='from' class="form-horizontal">
					<div class="form-group">
						<label>名字：</label>
						<input type="text" name="name" />
					</div>
					<div class="form-group">
						<label>密码：</label>
						<input type="password" name="password" />
					</div>
					<div class="form-group">
						<label>用户名：</label>
					<input type="text" name="username" />
					</div>
					<div class="form-group">
						<label>性别：</label>
					<select name="sex">
						<option value="0">男</option>
						<option value="1">女</option>
					</select>
					</div>
					<div class="form-group">
						<label>邮箱：</label>
						<input type="text" name="email" />
					</div>
					
					<button type="submit" class="btn btn-danger btn-block btn-lg">保存</button>
				</form>
			</div>
		</div>
	</body>
</html>

        <!--<form>
            <div class="form-group input-group">
                <label for="userName">用户名：</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control input-group-lg" id="userName" 

name="userName" placeholder="请输入用户名" />
                </div>
            </div>
            <div class="form-group input-group">
                <label for="userPwd">用户密码：</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="text" class="form-control input-group-lg" id="userPwd" 

name="userPwd" placeholder="请输入密码" />
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="autoLogin" name="autoLogin" />下次自动登

录
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="button" id="btnLogin" class="btn btn-danger btn-block btn-lg 

">登 录</button>
                
            </div>
        </form
    </div>
</body>
</html>-->