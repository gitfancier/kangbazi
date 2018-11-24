<?php
	namespace app\index\controller;
	//use think\Db;
	use think\Controller;
	use app\common\model\Teacher;
	use think\Request;
	class TeacherController extends Controller
	{
		public function index()
		{
			$name=Request::instance()->get('name');
			
			$pageSize=5;
			$Teacher=new Teacher;
//			if(!empty($name)){
//				$condition['name']=array('like','%'.$name.'%');
//				$teachers=$Teacher->where($condition)->paginate($pageSize);
//			}
//			else{
//				$teachers=$Teacher->paginate($pageSize);
//			}
			if(!empty($name)){
          		$Teacher->where('name','like','%'.$name.'%');
        	}
   			$teachers =  $Teacher->paginate($pageSize,false,[
   			'query'=>['name'=>$name,
   			
   			],
   			]);
			$this->assign("qianfeng",$teachers);
			$htmls=$this->fetch();
			return $htmls;
//			$teachers=Db::name('teacher')->select();
//			echo $teachers[0]['name'];
//			$Teacher=new Teacher();
//			$teachers=$Teacher->select();
//			$teacher=$teachers[1];
//			dump($teachers);
//			dump($teacher->getData('name'));
			//echo $teachers[0]['id'];
//			//return $teacher->getData('name');

			
		}
		public function insert()
		{
//			//dump($_POST);
//			$data=array();
//			$data['name']='xiaozhao';
//			$data['username']='xiaozhao';
//			$data['sex']=0;
//			$data['email']='xiaozhao@email.com';
//			dump($data);
			$postData=Request::instance()->post();
			//dump($postData);
			$Teacher=new Teacher();
//			$status=$Teacher->data($data)->save();
//			dump($status);
//			return "hello insert";
			$Teacher->name=$postData['name'];
			$Teacher->username=$postData['username'];
			$Teacher->password=teacher::entryptPassword($postData['password']);
			$Teacher->sex=$postData['sex'];
			$Teacher->email=$postData['email'];
			$Teacher->create_time=time();
			$Teacher->update_time=time();
			
			$status=$Teacher->validate(true)->save($Teacher->getData());
			if($status==false){
				//return '新增失败，原因是：'.$Teacher->getError();
				$this->error('新增失败，原因是：'.$Teacher->getError());
			}else{
				//return '新增成功id为'.$Teacher->id;
				$this->success('新增成功id为:'.$Teacher->id, 'teacher/add');
			}
			
		}
		public function add(){
			$htmls=$this->fetch();
			return $htmls;
		}
		public function delete()
		{
			//dump(Request::instance()->get());
			$id=Request::instance()->param('id/d');  //接收到的id转成整型
			if(is_null($id)||$id===0){
				return $this->error('找不到您指定的id信息');
			}
			//return;
			$Teacher=Teacher::get($id);
//			if(!is_null($Teacher)){
//				if($Teacher->delete()){
//					return '删除成功';
//				}
//				
//			}else{
//					return '您要的数据不存在';
//				}
			if(is_null($Teacher)){
				return $this->error('数据对象不存在');
			}
			if(!is_null($Teacher)){
				if($Teacher->delete()){//delete from teacher where id=12
					//return '删除成功';
					$this->success('删除成功', 'teacher/index');
				}
			}else{
					return '您要的数据不存在';
				}
			
			
		}
		public function edit()
		{
			$id=Request::instance()->param('id/d');
			//dump($id);
			$Teacher=Teacher::get($id);
			if(is_null($Teacher)){
				return $this->error('找不到id为'.$id.'的教师信息');
			}
			//dump($id);
			$this->assign('qfdata',$Teacher);
			$htmls=$this->fetch();
			return $htmls;
		}
		public function update(){
//			$teacher=Request::instance()->post();
//			$Teacher=new Teacher();
//			if($Teacher->validate(true)->isUpdate(true)->save($teacher)){
//				//$message='更新成功';
//				$this->success('更新成功', 'teacher/index');
//			}else{
//				//$message='更新失败';
//				$this->success('更新失败', 'teacher/index');
//			}
//			//return $message;
//		}


			$id=Request::instance()->post('id/d');
			$Teacher=Teacher::get($id);
			$Teacher->name=Request::instance()->post('name');
			$Teacher->username=Request::instance()->post('username');
			$Teacher->sex=Request::instance()->post('sex/d');
			$Teacher->email=Request::instance()->post('email');
			if($Teacher->validate(true)->save($Teacher->getData())){
				$this->success('更新成功', 'teacher/index');
			}else{
					//$message='更新失败';
					$this->success('更新失败', 'teacher/index');
				}
			}
	}
?>