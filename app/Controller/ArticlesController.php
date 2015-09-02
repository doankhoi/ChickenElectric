<?php


App::uses('AppController', 'Controller');

class ArticlesController extends AppController {

	var $name = "Articles";
	var $uses = ['Article', 'Category'];
	var $layout = 'dashboard';
	var $paginate =  array();
	var $helpers = ['Session', 'Paginator', 'Flash'];
	var $components = ['Session', 'RequestHandler', 'Flash'];

	public function admin_index(){
		
	}

	public function admin_add(){
		$cates = $this->_getAllCategories();
		$this->set('cates', $cates);

		if($this->request->is('post')){
			$now = date('Y:m:d h:i:s');
			$this->Article->set('created', $now);
			$this->Article->set('modified', $now);
			$this->Article->set('users_id', Authcomponent::user('id'));
			$this->Article->set('status', 0);
			$this->Article->set('active', 1);
			$this->Article->set('view', 0);

			if($this->Article->save($this->request->data)){
				$this->Flash->set('Thêm bài viết thành công', ['element' => 'success']);
				$this->redirect(['action'=>'index']);
			}else{
				$this->Flash->set('Thao tác thêm lỗi. Kiểm tra lại', ['element'=>'error']);
			}
		}
	}

	function _getAllCategories(){
		$cates = $this->Category->find('all', ['conditions'=>['active'=>1]]);
		$result = array();
		foreach ($cates as $cate) {
			$result[$cate['Category']['id']] = $cate['Category']['name'];

			foreach ($cates as $sub) {
				if($cate['Category']['id'] == $sub['Category']['sub']){
					$result[$sub['Category']['id']] = $sub['Category']['name'];
				}
			}
		}

		return $result;
	}
}
