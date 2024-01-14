<?php 

class employees_model extends CI_Model {


    public function all_employees() {
        $this->db->select('*');
        $this->db->join('employee_leave_master', 'employee_leave_master.employee_code = employee_master.employee_code', 'left');
        // $this->db->order_by()
        $query = $this->db->get('employee_master');
        if($query) {
            return $query->result_array();
        }
        return false;
    }

    public function addUpdateEmployeeleave($employee_code, $data) {
        $this->db->select('*');
        $this->db->where('employee_code', $employee_code);
        $query = $this->db->get('employee_leave_master');
        if(is_array($query->row_array())) {
            $this->db->where('employee_code', $employee_code);
            $this->db->update('employee_leave_master', $data);
        } else {
            $this->db->insert('employee_leave_master', $data);
        }
    }

}





?>