<?php

class Category extends AppModel{
	var $name = 'Category';
	var $primaryKey = 'id';

	public $hasMany = [
		'Article'=> [
			'className'=>'Article',
			'foreignKey'=>'category_id',
			'dependent' => true
		]
	];

	public $validate = [
		'name'=>[
			'not empty' => [
				'rule'=>'notBlank',
				'message'=>'Trường tiêu đề không được trống'
			]
		]
	];
	
}