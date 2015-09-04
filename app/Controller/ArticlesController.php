<?php


App::uses('AppController', 'Controller');

class ArticlesController extends AppController {

	var $name = "Articles";
	var $uses = ['Article', 'Category', 'User'];
	var $layout = 'dashboard';
	var $paginate =  array();
	var $helpers = ['Session', 'Paginator', 'Flash'];
	var $components = ['Session', 'RequestHandler', 'Flash'];

	public function admin_index(){
		$this->paginate = [
			'conditions'=>['Article.active'=>1],
			'limit'=>10,
			'order'=>['created'=>'desc']
		];

		$data = $this->paginate('Article');
		$this->set('articles', $data);
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

	public function admin_edit($id=null){
		$article = $this->Article->find('first', ['conditions'=>['id'=>$id], 'recursive'=>-1]);
		if($article['Article']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}

		$this->set('article', $article);
		$cates = $this->_getAllCategories();
		$this->set('cates', $cates);

		if($this->request->is('post')){
			$this->Article->set('id', $id);
			$now = date('Y:m:d h:i:s');
			$this->Article->set('modified', $now);

			if($this->Article->save($this->request->data)){
				$this->Flash->set('Chỉnh sửa thành công', ['element' => 'success']);
				$this->redirect(['action'=>'index']);
			}else{
				$this->Flash->set('Thao tác chỉnh sửa lỗi. Kiểm tra lại', ['element'=>'error']);
			}
		}
	}

	public function admin_listdeactive(){
		$this->paginate = [
			'conditions'=>['Article.active'=>0],
			'limit'=>10,
			'order'=>['modified'=>'desc']
		];

		$data = $this->paginate('Article');
		$this->set('articles', $data);
	}

	public function admin_publish($id=null){
		$article = $this->Article->find('first', [
			'conditions'=> ['id'=>$id],
			'recursive'=>-1
		]);

		if($article['Article']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}

		$this->Article->set('id', $id);
		if($article['Article']['status'] == 1){
			$this->Article->set('status', 0);
		}else{
			$this->Article->set('status', 1);
		}

		if($this->Article->save($this->request->data)){
			$this->redirect($this->referer());
		}
	}

	public function admin_delete($id=null){
		$article = $this->Article->find('first', ['conditions'=>['id'=>$id], 'recursive'=>-1]);
		if($article['Article']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}
		$this->Article->set('id', $id);
		if($article['Article']['active'] == 1){
			$this->Article->set('active', 0);
		}else{
			$this->Article->set('active', 1);
		}

		if($this->Article->save($this->request->data)){
			$this->redirect($this->referer());
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
