<?php
class Job_model extends MY_Model {

	protected $_table_name = 'job';
	protected $_primary_key = 'job_id';
	protected $_order_by = 'date_created desc';
	public $rules = array(
		'title' => array(
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'trim|required|max_length[100]|xss_clean'
			),
		'description' => array(
			'field' => 'description',
			'label' => 'Description',
			'rules' => 'trim|required|xss_clean'
			),
		'title' => array(
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'trim|required|max_length[100]|xss_clean'
			),
		'title' => array(
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'trim|required|max_length[100]|xss_clean'
			),
		);

	public function __construct(){
		parent::__construct();
	}

	public function job_detail($where){
		$this->db->select('job.job_id AS id, job.title AS title, 
						   job.description AS description, job.apply AS apply, 
						   job.slug AS slug, job.date_created AS date_created, 
						   category.name AS cat_name, company.name AS comp_name, 
						   job_type.type AS job_type');

		$this->db->join('category','category.category_id = job.category_id');
		$this->db->join('company','company.company_id = job.company_id');
		$this->db->join('job_type','job_type.job_type_id = job.job_type_id');
		

		return $this->get_by($where, TRUE);
	}

}