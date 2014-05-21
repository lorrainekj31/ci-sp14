<?php
//mailing_list.php is a codeigniter controller

class Mailing_list extends CI_Controller
{
	function __construct(){
		parent::__construct();
		//$this->load->model('Mailing_list_model');
			
		}//end constructor()

	public function index()
	{//here we are making data available to or header and footer
		$this->load->model('Mailing_list_model');
		$data['query'] = $this->Mailing_list_model->get_mailing_list();			
		$data['title'] = "Here is our title tag!";
		$data['banner'] = "Here is our Web Site!";
		$data['copyright'] = "copyright goes here!";	
		$this->load->view('header',$data);
		$this->load->view('mailing_list/view_mailing_list', $data);
		
		$this->load->view('footer', $data);
	
	}//end index()

	public function view($id)
	{//this will show us the data from a single page
		$this->load->model('Mailing_list_model');
		$data['query'] = $this->Mailing_list_model->get_id($id);	
		$this->config->set_item('style','cerulean.css');		
		$data['title'] = "Here is our title tag!";
		$data['banner'] = "Here is our web site!";
		$data['copyright'] = "copyright goes here!";
		$this->load->view('header',$data);
		$this->load->view('mailing_list/view_mailing_list_detail', $data);
		
		$this->load->view('footer', $data);
	
	}//end view()
	
	public function add()
	{//a form to add a new record	
		
		$this->load->helper('form');	
		$data['title'] = "Adding a record!";
		$data['banner'] = "Add a record!";
		$data['copyright'] = "copyright goes here!";	
		$this->load->view('header',$data);		
		$this->load->view('mailing_list/add_mailing_list', $data);
		
		$this->load->view('footer', $data);	
	}//end add()
	
	public function insert()
	{//will insert the data entered via add
		$this->load->model('Mailing_list_model');
		$this->load->library('form_validation');
		//must have at least one validation rule to insert
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('state_code','State code','trim|required');
		$this->form_validation->set_rules('zip_postal','Zip postal','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		
			
		if($this->form_validation->run() == FALSE)
		{//failed validation - send back to form				
			$this->load->helper('form');	
			$data['title'] = "Adding a record!";
			$data['banner'] = "Data Entry Error!";
			$data['copyright'] = "copyright goes here!";	
			$this->load->view('header',$data);		

		//$this->load->view('mailing_list/add_mailing_list', $data);
		
		$this->load->view('footer', $data);									
			echo "insert failed!";
		}else{//insert data	
			$post = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'state_code' => $this->input->post('state_code'),
				'zip_postal' => $this->input->post('zip_postal'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'bio' => $this->input->post('bio'),
				'interests' => $this->input->post('interests'),
				'num_tours' => $this->input->post('num_tours'),			
			
			);
		
		$this->Mailing_list_model->insert($post);
		echo "Date inserted?";
						
	}//end insert()		
}
}

?>
