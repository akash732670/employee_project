<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


function load_view($page, $data = '') {
    $CI = get_instance();
    $CI->load->view('header', $data);
    $CI->load->view($page ,$data);
    $CI->load->view('footer', $data);
}

function getData($table, $array_type, $select = '*') {
    $CI = get_instance();
    $CI->db->select($select);
    $query = $CI->db->get($table);
    if($query) {
        switch ($array_type) {
            case 'result_array':
                return $query->result_array();
                break;
            case 'row_array':
                return $query->row_array();
                break;
            case 'num_rows':
                return $query->num_rows();
                break;
            default:
                return false;
                break;
        }
    }
    return false;
}

function AddUpdateTable($table, $data, $where = array()) {
    $CI = get_instance();
    if(!is_array($where) || empty($where)) {
        $CI->db->insert($table, $data);
    } else {
        $CI->db->where($where);
        $CI->db->update($table, $data);
    }
}



function printAndDie($arr)
{
    echo "<pre>";
    print_r($arr);
    die;
}






?>