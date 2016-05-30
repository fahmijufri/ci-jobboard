<?php
class Job_type_model extends MY_Model {

	protected $_table_name = 'job_type';
	protected $_primary_key = 'job_type_id';
	public $rules = array();

	public function __construct(){
		parent::__construct();
	}

}