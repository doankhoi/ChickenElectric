<?php

App::uses('CakeEmail','Network/Email');

class UsersController extends AppController
{
	public $name = "Users";
	var $uses = ['User', 'Audit'];
	var $layout = 'dashboard';
	var $paginate = array();

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(['admin_register']);
	}

	public function admin_login(){
		$this->layout = 'login';
		if($this->request->is('post')){

			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirectUrl().'/');
			}else{
				$this->Session->setFlash('Tên người dùng hoặc mật khẩu không đúng !');
			}
		}
	}

	public function admin_logout(){
		$this->redirect($this->Auth->logout());
	}

	public function admin_index(){
		$this->paginate = [
			'conditions'=>'id != \''.AuthComponent::user('id').'\'',
			'limit'=>10,
			'order'=>['created'=>'desc'], 
			'recursive'=>-1
		];

		$data = $this->paginate('User');
		$this->set('users', $data);
		$this->set('power', AuthComponent::user('type'));
	}

	public function admin_register(){

		if ($this->request->is('post')) {
			$now = date('Y:m:d h:i:s');
			$this->User->set('created', $now);
			$this->User->set('modified', $now);
			$this->User->set('active', 1);
			$this->User->set('status', 0);

			if($this->User->save($this->request->data)){
				$this->saveAudit('Thêm người dùng: '.$this->request->data['User']['username'], $now);
				$this->redirect(['action'=>'index']);
			}
		}
	}

	public function admin_view($id = null){
		$user = $this->User->find('first', [
			'conditions'=>['id'=>$id],
			'recursive'=>-1
			]
		);

		if(!isset($user['User'])){
			$this->redirect(['action'=>'index']);
		}

		$this->set('user', $user);
	}

	public function admin_edit($id = null){
		$user = $this->User->find('first', [
			'conditions'=> ['id' => $id],
			'recursive'=>-1
		]);

		if($user['User']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}

		$this->set('user', $user);

		if($this->request->is('post')){
			$now = date('Y:m:d h:i:s');
			$this->User->set('id', $id);
			$this->User->set('modified', $now);
			if($this->User->save($this->request->data)){
				$this->Audit->save('Chỉnh sửa thông tin: '.$user['User']['username'], $now);
				$this->redirect(['action'=>'index']);
			}
		}
	}

	public function admin_delete($id = null){
		$user = $this->User->find('first', ['conditions'=>['id'=>$id]]);
		if ($user['User']['id'] == '') {
			$this->redirect(['action'=>'index']);
		}

		$this->User->set('id', $id);
		if($user['User']['active'] == 1)
		{
			$this->User->set('active', 0);
		}
		else{
			$this->User->set('active', 1);
		}

		if($this->User->save($this->request->data)){
			$now = date('Y:m:d h:i:s');
			$this->saveAudit('Thay đổi trạng thái người dùng: '.$user['User']['username'], $now);
			$this->redirect(['action'=>'index']);
		}
	}

	public function admin_newuser(){
		$this->paginate = [
			'conditions'=>[
				'id !=' => AuthComponent::user('id'),
				'status' => 0,
				'active' => 1
			],
			'order'=>['created'=>'desc'],
			'limit'=>10, 
			'recursive'=>-1
		];

		$data = $this->paginate('User');
		$this->set('users', $data);
		$this->set('power', AuthComponent::user('type'));
	}

	public function admin_listdeactive(){
		$this->paginate = [
			'conditions'=>[
				'id !=' => AuthComponent::user('id'),
				'active' => 0
			],
			'order'=>['modified'=>'desc'],
			'limit'=>10, 
			'recursive'=>-1
		];

		$data = $this->paginate('User');
		$this->set('users', $data);
	}

	public function admin_confirm($id = null){
		$user = $this->User->find('first', 
			['conditions'=>['id'=>$id],
			'recursive'=>-1
		]);

		if($user['User']['id'] == ''){
			$this->redirect(['action'=>'index']);
		}

		$this->User->set('id', $id);
		$this->User->set('status', 1);
		if($this->User->save($this->request->data)){
			$this->redirect($this->referer());
		}
	}

	public function changepass($id = null){
		if($this->request->is('post')){
			$this->User->set($this->request->data);
			if($this->User->validates(['fieldList'=>['currentpassword', 'password', 'repassword']])){
				$pass = $this->request->data['User']['password'];
				$data = [
					'User'=>[
						'id'=>$id,
						'password'=>$password
					]
				];

				$this->User->set('id', $id);
				if($this->User->save($data)){
					$this->Flash('Đổi password thành công. Hãy đăng nhập lại!');
					$this->redirect(['action'=>'login']);
				}
			}else{
				$errors = $this->User->validationErrors;
			}
		}
	}

	function saveAudit($action, $time){
		$this->Audit->set([
            'action'=>$action,
            'created'=>$time,
            'updated'=>$time,
            'users_id'=>AuthComponent::user('id'),
            'active'=>1
        ]); 
        $this->Audit->save();
	}

}