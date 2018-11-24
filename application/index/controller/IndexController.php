<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\Teacher;
class IndexController extends Controller
{
//  public function index()
//  {
//  	//$teachers=Db::name('teacher')->select();
//      //var_dump(Db::name('teacher')->find());
//      //echo $teachers[0]['name'];
//      
//  }
     // construct function
  public function __construct()
  {
	parent::__construct();
  	if(!Teacher::isLogin()){
  		return $this->error("请先登录",'login/index');
  	}
  }
}
