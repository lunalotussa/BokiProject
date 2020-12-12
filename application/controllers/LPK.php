<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LPK extends CI_Controller {

	public function __construct(){
		parent::__construct();
        if(!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
            redirect(base_url());
        }

		$this->load->model('lpk_model');
	}

	public function index(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		$data['aset_lancar'] = $this->lpk_model->view_row();
		$this->load->view('laporan/lpk', $data);
	}

	public function cetak(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		ob_start();
		$data['aset_Lancar'] = $this->lpk_model->view_row();
		$this->load->view('laporan/print', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Posisi Keuangan Tahunan.pdf', 'D');
	}

	public function bulanan(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		$data['aset_lancar'] = $this->lpk_model->view_row();
		$this->load->view('laporan/lpk_bulanan', $data);
	}

	public function cetak_bulanan(){
		$data['nama']       = $_SESSION['nama'];
        $data['id_user']    = $_SESSION['id_user'];
		ob_start();
		$data['aset_Lancar'] = $this->lpk_model->view_row();
		$this->load->view('laporan/print_lpk_bulanan', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Posisi Keuangan Bulanan.pdf', 'D');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
