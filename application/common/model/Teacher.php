<?php
	namespace app\common\model;
	use think\Model;
	class Teacher extends Model
	{
		//paramp string $username 
		//param string $password
		//return true
		static public function login($username,$password){
			$map=array('username'=>$username);
			$Teacher=self::get($map);
			if(!is_null($Teacher)){
				if($Teacher->checkPassword($password)){
					session('teacherId',$Teacher->getData('id'));
					return true;
				}else{
				return false;
				}
			
			}
		}
		//check password
		public function checkPassword($password){
			if($this->getData('password')===$this::entryptPassword($password)){
				return sha1(md5($password).'xinyu');
			}
		}
		static public function entryptPassword($password){
			return sha1(md5($password).'xinyu');
		}
		static public function logOut(){
			session("teacherId",null);
			return true;
		}
		static public function isLogin()
		{
			$teacherId=session("teacherId");
			if(isset($teacherId))
			{
				return true;
			}else{
				return false;
			}
		}
//		static public function log()
//		{
//			$teacherId=session("teacherId");
//			if(isset($teacherId)){
//				return 
//			}
//		}
//		
	}
?>