<?php

/**
* 
*/
class User extends AppModel
{
	var $name = "User";
	var $primaryKey = "id";

	public $validate = [
		'username' => [
			'too long' => [
				'rule'=>['between', 8, 32],
				'message'=>'Tên người dùng tối thiểu 8 kí tự.'
			],
			'not empty'=> [
				'rule'=>'notBlank',
				'message'=>'Tên người dùng không được rỗng.'
			],
			'duplicate username' => [
				'rule'=>'isUnique',
				'message'=>'Tên người dùng đã tồn tại.'
			]
		],
		'password'=> [
			'too long' => [
				'rule'=>['between', 8, 32],
				'message' => 'Mật khẩu người dùng tối thiểu 8 kí tự.'
			],
			'not empty'=> [
				'rule'=>'notBlank',
				'message'=>'Mật khẩu không được bỏ trống.'
			],
			'Match Password' => [
				'rule'=>'matchPasswords',
				'message'=>'Mật khẩu không trùng khớp.'
			]
		],
		'repassword'=> [
			'not empty' => [
				'rule'=>'notBlank',
				'message'=>'Nhập lại để xác nhận.'
			]
		],
		'currentpassword' =>[
                'too long' => [
                    'rule' => ['between', 5, 32],
                    'message' => 'Mật khẩu tối thiểu 5 kí tự'
                ],
                'not Empty' => [
                    'rule' => 'notBlank',
                    'message' => 'Mật khẩu cũ.'
                ],
                'check password' => [
                    'rule' => 'checkPassword',
                    'message'=> 'Mật khẩu cũ sai.'
                ]
        ],
		'email' => [
			'valid email' => [
				'rule'=>'email',
				'message'=>'Email không hợp lệ.'
			],
			'duplicate email'=>[
				'rule'=>'isUnique',
				'message'=>'Email đã được sử dụng'
			]
		],
		'type' => [
			'not empty'=>[
				'rule'=>'notBlank',
				'message'=>'Quyền người dùng không được trống.'
			]
		]
	];


	public function beforeSave($options = array()){

		if(isset($this->data['User']['password'])){
			$hash = Security::hash($this->data['User']['password'], 'blowfish');
			$this->data['User']['password'] = $hash;
		}
	}
	

	public function matchPasswords($data){
		if($this->data['User']['password']==$this->data['User']['repassword']){
            return true;
        }
        $this->invalidate('repassword', 'Xác nhận mật khẩu sai');
        return false;
	}

	public function checkPassword($data){
		$currentUser = $this->find('first', array('conditions'=>array('User.id = '.AuthComponent::user('id'))));
        $hashPass = Security::hash($data['currentpassword'], 'blowfish', $currentUser['User']['password']);
        if($currentUser['User']['password'] == $hashPass){
            return true;
        }
        return false;
	}
}