<?php


App::uses('AppController', 'Controller');

class CategoriesController extends AppController {

	var $name = "Categories";
	var $layout = "dashboard";
	var $components = ['Upload'];

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function admin_index(){
		$this->paginate = [
			'conditions'=>['Category.active'=>1],
			'limit'=>10,
			'order'=>['created'=>'desc']
		];

		$data = $this->paginate('Category');
		$this->set('categories', $data);
	}

	public function admin_add(){
		$this->set('sb',$this->Category->find('list',array(
                                    'conditions'=>array(
                                        'Category.sub'=>0,
                                        'active'=>1
                                        ))));

		if($this->request->is('post')){

			$arrParam = $this->request->data;
            $file = $arrParam['Category']['image'];                                
            $destination = WWW_ROOT . 'img' . DS . 'gallery' . DS;
            if(empty($file['name'])){
                $arrParam['Category']['image'] = '';
           	}else{
                $this->Upload->upload($file, $destination, null, null, null);
                if($this->Upload->errors){
                    $this->Session->setFlash( implode('<br />',$this->Upload->errors) );
                    $this->redirect(['controller'=>'categories', 'action'=>'add']);                        
                }else{
                    $arrParam['Category']['image'] = $this->Upload->result;
                }
            }

			$this->Category->set('status',1);
			$this->Category->set('active',1);
			if($this->request->data['Category']['sub'] == ''){
				$this->Category->set('sub', 0);
			}
			$now = date('Y:m:d h:i:s');
			$this->Category->set('created', $now);
			$this->Category->set('modified', $now);

			if($this->Category->save($this->request->data) ){
				$this->redirect(['action'=>'index']);
			}
		}
	}

	public function admin_edit($id=null){
		$this->set('sub',$this->Category->find('list',array(
                                    'conditions'=>array(
                                        'Category.sub'=>0,
                                        'active'=>1
                                        ))));
		$cate = $this->Category->find('first', [
			'conditions'=>['id'=>$id], 
			'recursive'=>-1
		]);

		if($cate['Category']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}

		$this->set('cate', $cate);

		if($this->request->is('post')){

			$now = date('Y:m:d h:i:s');
			$this->Category->set('id', $id);
			$this->Category->set('modified', $now);

			$file = $this->request->data['Category']['image'];                                
            $destination = WWW_ROOT . 'img' . DS . 'gallery' . DS;
            if(empty($file['name'])){
                $this->request->data['Category']['image'] = $cate['Category']['image'];
           	}else{
                $this->Upload->upload($file, $destination, null, null, null);
                if($this->Upload->errors){
                    $this->Session->setFlash( implode('<br />',$this->Upload->errors) );
                    $this->redirect(['controller'=>'categories', 'action'=>'add']);                        
                }else{
                    $this->request->data['Category']['image'] = $this->Upload->result;
                }
            }

			if($this->Category->save($this->request->data)){
				$this->redirect(['action'=>'index']);
			}
		}
	}


	public function admin_showhide($id=null){
		$cate = $this->Category->find('first', ['conditions'=>['id'=>$id]]);
		if($cate['Category']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}

		$this->Category->set('id', $id);
		if($cate['Category']['status']==1){
			$this->Category->set('status', 0);
		}else{
			$this->Category->set('status', 1);
		}

		if($this->Category->save($this->request->data)){
			
			$this->redirect(['action'=>'index']);
		}
	}

	public function admin_delete($id=null){
		$cate = $this->Category->find('first', ['conditions'=>['id'=>$id]]);
		if($cate['Category']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}

		$this->Category->set('id', $id);
		if($cate['Category']['active']==1){
			$this->Category->set('active', 0);
		}else{
			$this->Category->set('active', 1);
		}

		if($this->Category->save($this->request->data)){
			$this->redirect(['action'=>'index']);
		}
	}
}
