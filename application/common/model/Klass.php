<?php
	namespace app\common\model;
	use think\Model;
	class Klass extends Model
	{
		//get teacher info
		public function getTeacher(){
			$teacherId=$this->getData('teacher_Id');
			$Teacher=Teacher::get($teacherId);
			return $Teacher;
			//return dump($Teacher);
		}
	}
?>