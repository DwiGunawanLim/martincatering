<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Makanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Makanan_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Makanan";
        $data['makanan'] = $this->Makanan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("makanan/vw_makanan", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Makanan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['makanan'] = $this->Makanan_model->get();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Jumlah Stok', 'required|numeric', [
            'required' => 'Jumlah Stok Wajib di isi',
            'numeric' => 'Jumlah Stok harus angka'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric', [
            'required' => 'Harga Wajib di isi',
            'numeric' => 'Harga harus angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("makanan/vw_tambah_makanan", $data);
            $this->load->view("layout/footer");
        } else {
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/makanan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $this->input->post('nama'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'nama_key' => 'martincatering_key',
                'gambar' => $upload_image
            ];
            $this->Makanan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Makanan Berhasil Ditambah!</div>');
            redirect('Makanan');
        }
    }
    function hapus($id)
    {
        $this->Makanan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Makanan Berhasil Dihapus!</div>');
        redirect('Makanan');
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Edit Data Makanan";
        $data['makanan'] = $this->Makanan_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required|numeric', [
            'required' => 'Jumlah Stok Wajib di isi',
            'numeric' => 'Jumlah Stok harus angka'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric', [
            'required' => 'Harga Wajib di isi',
            'numeric' => 'Harga harus angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("makanan/vw_ubah_makanan", $data);
            $this->load->view("layout/footer");
        } else {
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/makanan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('makanan', ['id' => $id])->row();
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $this->input->post('nama'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'id' => $this->input->post('id'),
                'gambar' => $upload_image,
                'nama_key' => 'martincatering_key',
            ];
            $this->Makanan_model->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Makanan Berhasil Di Ubah!</div>');
            redirect('Makanan');
        }
    }
}
