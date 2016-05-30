<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('job_model');
		$this->load->model('category_model');
		$this->load->model('job_type_model');
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
			$data['job'] = $this->job_model->job_detail(array('slug' => $where));
			$id = $data['job']['id'];

			$view = $data['job']['views'];
			$view += 1;
			$this->job_model->save(array('views' => $view), $id);
			$this->load->view('job/single', $data);
			var_dump($data);
		}
		
		if(empty($data['job'])){
			show_404();
		}
		

	}

	public function add(){
		$now = date('Y-m-d H:i:s');
		$data['category'] = $this->category_model->get();
		$data['job_type'] = $this->job_type_model->get();
		var_dump($data);
		$rules = $this->job_model->rules;
		$this->form_validation->set_rules($rules);
		
		if ($this->form_validation->run() == TRUE) {
			$post = $this->job_model->array_from_post(array(
					'title',
					'description',
					'apply', 
					'category',
					'job_type'
				));

			$savedata = array(
				'title' => $post['title'],
				'description' => $post['description'],
				'apply' => $post['apply'],
				'category_id' => $post['category'],
				'job_type_id' => $post['job_type'],
				'date_created' => $now,
				'slug' => $this->_slug($post['title']),
				'company_id' => 1,
				'user_id' => 1
			);

			$this->job_model->save($savedata);
			redirect('job');
		} else {
			$this->load->view('job/add', $data);
		}

		
	}

	public function edit($id){

	}

	public function delete($id){

	}

	public function _slug($title){
		$config = array(
				'field' => 'slug',
				'title' => 'title',
				'table' => 'job',
				'id' => 'job_id',
			);
		$this->load->library('slug', $config);
		
		$data = array(
				'title' => $title
			);
		return $this->slug->create_uri($data);
	}

	public function _combo_box($str){
		if($str === '0'){
			$this->form_validation->set_message('_combo_box', '{field} must have value');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
