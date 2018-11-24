<?php
	namespace app\common\validate;
	use think\validate;
	class Teacher extends Validate
	{
		protected $rule=[
			'name'=>'require|length:2,25',
			'username'=>'require|chsDash|unique:teacher|length:4,25',
			'sex'=>'in:0,1',
			'email'=>'email'
		];
	}
?>