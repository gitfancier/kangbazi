<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
//	''=>['Login/index',['method'=>'get']],
//	'login'=>['Login/login',['method'=>'post']],
//	'logout'=>['Login/logOut',['method'=>'get']],
//	
//	'teacher/'=>['Teacher/index',['method'=>'get']],
//	'teacher/add'=>['Teacher/add',['method'=>'post']],
//	'teacher/insert'=>['Teacher/insert',['method'=>'get']],
//	'teacher/add'=>['Teacher/add',['method'=>'get']],
//	'teacher/edit/:id'=>['Teacher/edit',['method'=>'get'],'id'=>'\d+>'],
//	'teacher/update'=>['Teacher/update',['method'=>'post']],
//	'teacher/delete/:id'=>['Teacher/delete',['method'=>'get'],'id'=>'\d+>'],
];
