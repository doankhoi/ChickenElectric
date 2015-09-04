<?php 
App::uses('AppController', 'Controller');

class FrontendsController extends AppController
{
	var $name = "Frontends";
	var $uses = ['Gallery', 'Article', 'Category', 'User'];
	var $helpers = ['Session', 'Paginator', 'Flash'];
	var $layout = 'template';


	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(['home', 'index', 'listcate']);
	}

	public function home(){
		$this->layout = 'home';
		$cates = $this->Category->find('all',[ 
			'conditions' => [
				'status'=>1,
				'active'=>1
			],
			'recursive'=>-1
		]);
		
		$this->set('cates', $cates);
	}
	
	public function listcate($cateId = null){
		$this->paginate = [
			'conditions'=>[
				'category_id'=>$cateId,
				'status'=>1,
				'active'=>1],
			'limit'=>10,
			'order'=>['created'=>'desc'], 
			'recursive'=>-1
		];

		$data = $this->paginate('Article');

		$this->set('articles', $data);

		$cates = $this->Category->find('all',[ 
			'conditions' => [
				'status'=>1,
				'active'=>1
			],
			'recursive'=>-1
		]);
		
		$this->set('cates', $cates);

		$galleries = $this->Gallery->find('all', [
			'conditions'=>[
				'active'=>1
			]
		]);
	}

	public function index(){

	}
}