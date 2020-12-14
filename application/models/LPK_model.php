<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LPK_Model extends CI_Model {
  public function view(){
    return $this->db->get('aset_lancar')->result();
  }
  
  public function view_row(){
    return $this->db->get('aset_lancar')->result();
  }
}