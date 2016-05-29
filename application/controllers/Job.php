<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('job_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['job_list'] = $this->job_model->get();
		$this->load->view('job/index', $data);
		//var_dump($data);
	}

	public function view($where = FALSE){
		if ($where == TRUE) {
			//$data['job'] = $this->job_model->get_by(array('slug' => $where), TRUE);
			//$this->load->view('job/single', $data);
			$data['job'] = $this->job_model->job_detail(array('slug' => $where));
			$this->load->view('job/single', $data);
			//var_dump($data);
		}
		
		if(empty($data['job'])){
			show_404();
		}
		
	}

	public function add(){
		$rules = $this->job_model->rules;
		$this->form_validation->set_rules($rules);
		
		if ($this->form_validation->run() == TRUE) {
			$data = $this->page_m->array_from_post(array(
				'title', 
				'slug', 
				'body', 
				'template', 
				'parent_id'
			));
			$this->page_m->save($data, $id);
			redirect('admin/page');
		}

		$this->load->view('job/add');
	}

	public function edit($id){

	}

	public function delete($id){

	}
}
