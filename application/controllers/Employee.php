<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('employees_model');
	}


    public function leave_app() {
        $employee_code = $this->session->userdata('employee_code');
        $data['employee_code'] = $employee_code;
        $data['leave_type'] = getData('leavmaster', 'result_array');
        if($_POST) {
            $this->form_validation->set_rules('employee_code', 'Employee Code', 'required');
			$this->form_validation->set_rules('from_date', 'From Date', 'required');
			$this->form_validation->set_rules('end_date', 'End Name', 'required');
			$this->form_validation->set_rules('leave_type', 'leave type', 'required');
			$this->form_validation->set_rules('comment', 'Comment', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data['error'] = validation_errors();
				$data['from_date'] = $this->input->post('from_date');
				$data['end_date'] = $this->input->post('end_date');
				$data['leave_type'] = $this->input->post('leave_type');
				$data['comment'] = $this->input->post('comment');
            } else {
                $fromdate = strtotime($this->input->post('from_date'));
                $todate = strtotime($this->input->post('end_date'));
                $datediff = $todate - $fromdate;
                $totaldiff =  round($datediff / (60 * 60 * 24));
                $insertData  = array();
                $insertData['leave_type'] = $this->input->post('leave_type');
				$insertData['employee_code'] = $this->input->post('employee_code');
				$insertData['fromdate'] = $this->input->post('from_date');
				$insertData['todate'] = $this->input->post('end_date');
				$insertData['comment'] = $this->input->post('comment');
                $insertData['numberofDays'] = $totaldiff;
                $this->employees_model->addUpdateEmployeeleave($employee_code,$insertData);
				redirect(base_url());
            }
        }
        load_view('leave_app', $data);
    }
}

?>