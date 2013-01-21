<?php
	class Inscricao extends AppModel {
		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

		public $validate = array(
        	'nome' => array( 
        		'requer' => array(
        			'rule' => 'notEmpty'
        			)
        		),
        	'telefone' => array( 
        		'só_numeros' => array(
        			'rule' => 'numeric'
        			)
        		),
        	'endereco' => array( 
        		'minimo' => array(
        			'rule' => array('minLength', '10')
        			)
        		),
        	'email' => array(
        		'verif_email' => array(
        			'rule' => 'email'
        			),
        		'verif_unico' => array(
        			'rule' => 'isUnique'
        			)
        	)
	       );
}