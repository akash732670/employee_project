<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('employees_model');
	}

	public function index() {
		if($this->session->userdata('id') == '') {
			redirect('login');
		}
		$data['employees_leave'] = $this->employees_model->all_employees();
		load_view('index', $data);
	}


	public function signup()
	{
		if($this->session->userdata('id') != '') {
			redirect(base_url());
		}
		$data['error'] = '';
		if($_POST) {
			$this->form_validation->set_rules('employee_code', 'Employee Code', 'required|is_unique[employee_master.employee_code]');
			$this->form_validation->set_rules('employee_name', 'Employee Name', 'required');
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'last Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[employee_master.email]');
			$this->form_validation->set_rules('phone', 'Phone', 'required|is_numeric');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('country', 'Country', 'required');
			$this->form_validation->set_rules('state', 'State', 'required');
			$this->form_validation->set_rules('city', 'City', 'required');
			$this->form_validation->set_rules('zipcode', 'Zip', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data['error'] = validation_errors();
				$data['employee_code'] = $this->input->post('employee_code');
				$data['employee_name'] = $this->input->post('employee_name');
				$data['first_name'] = $this->input->post('first_name');
				$data['last_name'] = $this->input->post('last_name');
				$data['username'] = $this->input->post('username');
				$data['email'] = $this->input->post('email');
				$data['phone'] = $this->input->post('phone');
				$data['address'] = $this->input->post('address');
				$data['country'] = $this->input->post('country');
				$data['state'] = $this->input->post('state');
				$data['city'] = $this->input->post('city');
				$data['zipcode'] = $this->input->post('zipcode');
				$data['password'] = $this->input->post('password');
			} else {
				$insertData  = array();
				$insertData['employee_code'] = $this->input->post('employee_code');
				$insertData['employee_name'] = $this->input->post('employee_name');
				$insertData['first_name'] = $this->input->post('first_name');
				$insertData['last_name'] = $this->input->post('last_name');
				$insertData['username'] = $this->input->post('username');
				$insertData['email'] = $this->input->post('email');
				$insertData['phone'] = $this->input->post('phone');
				$insertData['address'] = $this->input->post('address');
				$insertData['country'] = $this->input->post('country');
				$insertData['state'] = $this->input->post('state');
				$insertData['city'] = $this->input->post('city');
				$insertData['zipcode'] = $this->input->post('zipcode');
				$insertData['password'] = $this->input->post('password');
				$this->db->insert('employee_master', $insertData);
				redirect('login');
			}
		}
		load_view('login_signup/signup', $data);
	}

	public function login()
	{
		if($this->session->userdata('id') != '') {
			redirect(base_url());
		}
		$data['islogin'] = '1';
		$data['error'] = ''; 
		if($_POST) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data['error'] = validation_errors();
				$data['username'] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
			} else {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$query = $this->db->query('SELECT * FROM `employee_master` where username = "'.$username.'" AND `password` ="'.$password.'"');
				$row   = $query->row_array();
				if(is_array($row)) {
					$new_array  = array(
						'id' => $row['id'],
						'employee_code' => $row['employee_code'],
						'username' => $row['username'],
						'password' => $row['password']
					);
					$this->session->set_userdata($new_array);
					redirect(base_url());
				} else {
					$data['error'] = "Incorrect Username or Password";
				}
			}
		}
		load_view('login_signup/login', $data);
	}

	public function logout()
	{
		session_destroy();
		redirect('login');
	}
}