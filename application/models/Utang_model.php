<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Utang_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get utang by id_utang
     */
    function get_utang($id_utang)
    {
        return $this->db->get_where('utang',array('id_utang'=>$id_utang))->row_array();
    }
        
    /*
     * Get all utang
     */
    function get_all_utang()
    {
        $this->db->order_by('id_utang', 'desc');
        return $this->db->get('utang')->result_array();
    }
        
    /*
     * function to add new utang
     */
    function add_utang($params)
    {
        $this->db->insert('utang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update utang
     */
    function update_utang($id_utang,$params)
    {
        $this->db->where('id_utang',$id_utang);
        return $this->db->update('utang',$params);
    }
    
    /*
     * function to delete utang
     */
    function delete_utang($id_utang)
    {
        return $this->db->delete('utang',array('id_utang'=>$id_utang));
    }
}
