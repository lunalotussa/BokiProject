<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Penjualan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get penjualan by id_penjulan
     */
    function get_penjualan($id_penjulan)
    {
        return $this->db->get_where('penjualan',array('id_penjulan'=>$id_penjulan))->row_array();
    }

    function get_piutang()
    {
        return $this->db->get_where('penjualan',array('status'=>'Belum Lunas'))->result_array();
    }
        
    /*
     * Get all penjualan
     */
    function get_all_penjualan()
    {
        //$this->db->get_where('penjualan',array('id_user'=>'2'));
        $this->db->order_by('id_penjulan', 'desc');
        return $this->db->get('penjualan')->result_array();
    }
        
    /*
     * function to add new penjualan
     */
    function add_penjualan($params)
    {
        $this->db->insert('penjualan',$params);
        //$this->db->insert('kas_penjualan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update penjualan
     */
    function update_penjualan($id_penjulan,$params)
    {
        $this->db->where('id_penjulan',$id_penjulan);
        return $this->db->update('penjualan',$params);
    }
    
    /*
     * function to delete penjualan
     */
    function delete_penjualan($id_penjulan)
    {
        return $this->db->delete('penjualan',array('id_penjulan'=>$id_penjulan));
        //return $this->db->delete('penjualan',array('id_penjulan'=>$id_penjulan));
    }
}
