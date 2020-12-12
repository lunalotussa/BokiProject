<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LLR extends CI_Controller {

	public function __construct(){
		parent::__construct();
        if(!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
            redirect(base_url());
        }

		//$this->load->model('llr_model');
	}

	public function index(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		//$data['aset_lancar'] = $this->llr_model->view_row();
		$this->load->view('laporan/llr', $data);
	}

	public function cetak(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		ob_start();
		//$data['aset_Lancar'] = $this->llr_model->view_row();
		$this->load->view('laporan/print_llr', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Laba Rugi Tahunan.pdf', 'D');
	}

	public function bulanan(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		//$data['aset_lancar'] = $this->llr_model->view_row();
		$this->load->view('laporan/llr_bulanan', $data);
	}

	public function cetak_bulanan(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		ob_start();
		//$data['aset_Lancar'] = $this->llr_model->view_row();
		$this->load->view('laporan/print_llr_bulanan', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Laba Rugi Bulanan.pdf', 'D');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
