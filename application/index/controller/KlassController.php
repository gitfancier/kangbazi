<?php
	namespace app\index\controller;
	use think\Controller;
	use app\common\model\Klass;
	use app\common\model\Teacher;	

	use think\Request;
	
	class KlassController extends IndexController
	{
		public function index(){
			$pageSize=5;
			$name=Request::instance()->get('name');
			
			$Klass=new Klass;
			if(!empty($name)){
          		$Klass->where('name','like','%'.$name.'%');
        	}
   			$klasses =  $Klass->paginate($pageSize,false,[
   			'query'=>['name'=>$name,
   			
   			],
   			]);
			
			//$klasses=Klass::paginate(2);
			$this->assign("wang2",$klasses);
			//dump($klasses);
			$htmls=$this->fetch();
			return $htmls;
		}
		public function add(){
			//catch teacher table teachers ,add to show page
			$teachers=Teacher::all();
			$this->assign("luhan",$teachers);
			$htmls=$this->fetch();
			return $htmls;
			//dump($teachers);
		}
		public function save()
		{
			//dump(Request::instande()->post());
			$Request=Request::instance();
			$Klass=new Klass();

			$Klass->name=$Request->post('name');
			$Klass->teacher_Id=$Request->post('teacher_Id/d');
			//dump($Klass);			
			if(!$Klass->validate(true)->save()){
				return $this->error("添加失败".$Klass->getError());
			}
			return $this->success("添加成功",url('index'));
			
		}		
		public function delete()
		{
			//dump(Request::instance()->get());
			$id=Request::instance()->param('id/d');  //接收到的id转成整型
			if(is_null($id)||$id===0){
				return $this->error('找不到您指定的id信息');
			}
			//return;
			$Klass=Klass::get($id);
//			if(!is_null($Teacher)){
//				if($Teacher->delete()){
//					return '删除成功';
//				}
//				
//			}else{
//					return '您要的数据不存在';
//				}
			if(is_null($Klass)){
				return $this->error('数据对象不存在');
			}
			if(!is_null($Klass)){
				if($Klass->delete()){//delete from teacher where id=12
					//return '删除成功';
					$this->success('删除成功', 'klass/index');
				}
			}else{
					return '您要的数据不存在';
				}
		
		}
		public function edit(){
			$id=Request::instance()->param('id/d');
			//dump($id);
			if(false===$Klass=Klass::get($id)){
				return $this->error("找不到id为".$id.'的班级信息');
			}
			$teachers=Teacher::all();
			$this->assign("laoshia",$teachers);
			$this->assign("banjia",$Klass);
			//dump($teachers);
			$htmls=$this->fetch();
			return $htmls;
		}
		public function update()
		{
			$id=Request::instance()->param('id/d');
			if(is_null($Klass=Klass::get($id))){
				return $this->error("找不到id为".$id.'的班级信息');
			}
			//dump($Klass);
			$Klass->name=Request::instance()->post('name');
			$Klass->teacher_Id=Request::instance()->post('teacher_Id/d');
			//dump($Klass);
			if((!$Klass->validate()->save())){
				return $this->error("更新失败".$Klass->getError());
			}
			else{
				//$this->success('更新失败', 'teacher/index');
				return $this->success("更新成功",'index');
			}
		}
		
	}
?>