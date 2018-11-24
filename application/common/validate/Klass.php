<?php
	namespace app\common\validate;
	use think\validate;
	class Klass extends Validate
	{
		protected $rule=[
			'name'=>'require|length:2,25',
			'teacher_Id'=>'require',
			
		];
	}
?>