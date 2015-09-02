<?php 
App::uses('AppController', 'Controller');

class FrontendsController extends AppController
{
	var $name = "Frontends";
	var $uses = ['Gallery', 'Article', 'Category'];
	var $layout = 'template';


	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(['home']);
	}

	public function home(){
		$this->layout = 'home';
		
	}
	
}