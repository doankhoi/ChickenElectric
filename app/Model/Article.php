<?php

class Article extends AppModel {

	var $name = "Article";
	var $primaryKey = 'id';
	public $belongTo = [
		'Category'=>[
			'className'=>'Category',
			'foreignKey'=>'id'
		]
	];
}
