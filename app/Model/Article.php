<?php

class Article extends AppModel {

	var $name = "Article";
	var $primaryKey = 'id';
	public $belongsTo = [
		'Category'=>[
			'className'=>'Category',
			'foreignKey'=>'id'
		]
	];
}
