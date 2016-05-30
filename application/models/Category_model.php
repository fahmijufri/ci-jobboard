<?php
class Category_model extends MY_Model {

	protected $_table_name = 'category';
	protected $_primary_key = 'category_id';
	protected $_order_by = 'name';
	public $rules = array();

	public function __construct(){
		parent::__construct();
	}

}