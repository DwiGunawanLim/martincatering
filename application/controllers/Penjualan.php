<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Penjualan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('makanan_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Penjualan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penjualan'] = $this->Penjualan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('penjualan/vw_penjualan', $data);
        $this->load->view('layout/footer', $data);
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Penjualan";
        $data['detail'] = $this->Detail_model->getById($id);
        $data['penjualan'] = $this->Penjualan_model->getByIdP($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di Isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('penjualan/vw_detail_penjualan', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $status = $this->input->post('status');
            $idp = $this->input->post('no_penjualan');
            $this->Penjualan_model->updatestatus($status, $idp);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Penjualan Berhasil Diubah!</div>');
            redirect('Penjualan');
        }
    }
    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Penjualan_model->get();
        $this->data['judul'] = 'Laporan Data Penjualan';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('Penjualan/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
