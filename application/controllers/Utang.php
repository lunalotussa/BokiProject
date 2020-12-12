<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Utang extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Utang_model');
    } 

    /*
     * Listing of utang
     */
    function index()
    {
        $data['utang'] = $this->Utang_model->get_all_utang();
        
        $data['_view'] = 'utang/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new utang
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'tanggal' => $this->input->post('tanggal'),
				'utang' => $this->input->post('utang'),
				'jumlah' => $this->input->post('jumlah'),
				'jatuh_tempo' => $this->input->post('jatuh_tempo'),
            );
            
            $utang_id = $this->Utang_model->add_utang($params);
            redirect('utang/index');
        }
        else
        {            
            $data['_view'] = 'utang/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a utang
     */
    function edit($id_utang)
    {   
        // check if the utang exists before trying to edit it
        $data['utang'] = $this->Utang_model->get_utang($id_utang);
        
        if(isset($data['utang']['id_utang']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tanggal' => $this->input->post('tanggal'),
					'utang' => $this->input->post('utang'),
					'jumlah' => $this->input->post('jumlah'),
					'jatuh_tempo' => $this->input->post('jatuh_tempo'),
                );

                $this->Utang_model->update_utang($id_utang,$params);            
                redirect('utang/index');
            }
            else
            {
                $data['_view'] = 'utang/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The utang you are trying to edit does not exist.');
    } 

    /*
     * Deleting utang
     */
    function remove($id_utang)
    {
        $utang = $this->Utang_model->get_utang($id_utang);

        // check if the utang exists before trying to delete it
        if(isset($utang['id_utang']))
        {
            $this->Utang_model->delete_utang($id_utang);
            redirect('utang/index');
        }
        else
            show_error('The utang you are trying to delete does not exist.');
    }
    
}
