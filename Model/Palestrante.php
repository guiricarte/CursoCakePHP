<?php
	class Palestrante extends AppModel {

		public $hasMany = array('Palestra' => array('foreign_key' => 'palestrante_id'));

		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

		public $validate = array(
        	'nome' => array( 
        		'requer' => array(
        			'rule' => 'notEmpty'
        			)
        		),
        	'descricao' => array( 
        		'requer' => array(
        			'rule' => 'notEmpty'
        			)
        		),
        	'url' => array(
        		'pode_vazio' => array( 
        			'allowEmpty' => true,
        			'requir' => false ),
        		'url' => array( 
        			'rule' => 'url'
        			)
        		)
 		);
	}