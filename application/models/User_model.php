<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by id_user
     */
    function get_user($id_user)
    {
        return $this->db->get_where('user',array('id_user'=>$id_user))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->order_by('id_user', 'desc');
        return $this->db->get('user')->result_array();
    }
        


    function cek_login($table,$where){      
        return $this->db->get_where($table,$where);
        //$id_user = $this->session->userdata('id_user');
    }  

    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
}