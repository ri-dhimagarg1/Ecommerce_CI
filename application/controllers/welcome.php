<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	// getting all products
	public function index()
	{
		
		$this->load->model('functionsmodel');
		$cats=$this->functionsmodel->get_cats();
		$brands=$this->functionsmodel->get_brands();
		$pros=$this->functionsmodel->get_pro();

		$this->load->view('common/try',['cats'=>$cats,'brands'=>$brands,'pros'=>$pros]);
	}
	// getting category vise product
	public function cats($id)
	{	
		$this->load->model('functionsmodel');
		$cats=$this->functionsmodel->get_cats();
		$brands=$this->functionsmodel->get_brands();
		$cat_pros = $this->functionsmodel->get_cat_pro($id);
		$this->load->view('common/cats',['cats'=>$cats,'brands'=>$brands,'cat_pros'=>$cat_pros]);

	}
	// getting brand vise product
	public function brands($id)
	{	
		$this->load->model('functionsmodel');
		$cats=$this->functionsmodel->get_cats();
		$brands=$this->functionsmodel->get_brands();
		$brand_pros = $this->functionsmodel->get_brand_pro($id);
		$this->load->view('common/brands',['cats'=>$cats,'brands'=>$brands,'brand_pros'=>$brand_pros]);

	}
	//getting details of each product
	public function details($id)
	{
		$this->load->model('functionsmodel');
		$cats=$this->functionsmodel->get_cats();
		$brands=$this->functionsmodel->get_brands();
		$detail_pros = $this->functionsmodel->get_detail_pro($id);
		$this->load->view('common/details',['cats'=>$cats,'brands'=>$brands,'detail_pros'=>$detail_pros]);

	}
	//getting search results
	public function search()
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('search_form'))
		{
			$post = $this->input->post();
			$search =  $post['user_query'];
			$this->load->model('functionsmodel');
			$cats=$this->functionsmodel->get_cats();
			$brands=$this->functionsmodel->get_brands();
			$result_pros= $this->functionsmodel->results($search);
			$this->load->view('common/results',['cats'=>$cats,'brands'=>$brands,'result_pros'=>$result_pros]);

		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */