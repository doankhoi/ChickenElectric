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
	
}