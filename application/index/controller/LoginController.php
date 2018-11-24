<?php
	namespace app\index\controller;
	use app\common\model\Teacher; 
	use think\Controller;
	use think\Request;
	class LoginController extends Controller
	{
		//show login.html
		public function index(){
			$htmls=$this->fetch();
			return $htmls;
		}
		//deal login data
		public function login()
		{
			//check username is true
			//check psw is true
			//store session information
			$postData=Request::instance()->post();
			//dump($postData);
			//$map=array('username'=>$postData['username']);
			//$Teacher=Teacher::get($map);
			//teacher::entryptPassword($postData['password'])===$Teacher->getData('password')
			if(Teacher::login($postData['username'],$postData['password'])){
				return $this->success("登录成功",'teacher/index');
			}else{
				return $this->error("用户名或者密码不正确",'login/index');
			}
		}
		public function logOut()
		{
			if(Teacher::LogOut()){
				return $this->success("注销成功",'login/index');
			}
			else{
				return $this->error("退出失败",'login/index');
			}
		}
		public function test(){
			//echo Teacher::entryptPassword('123456');
			echo dump(Teacher::isLogin());
		}
	}
?>