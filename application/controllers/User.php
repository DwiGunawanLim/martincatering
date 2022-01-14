<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
    }
    function index()
    {
        $data['judul'] = "Halaman User";
        $data['usertotal'] = $this->userrole->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("User/vw_user", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['makanan'] = $this->userrole->get();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'Password harus diisi'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('user/vw_tambah_user', $data);
            $this->load->view('layout/footer');
        } else {
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile/';
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
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => "User",
                'date_created' => time(),
                'gambar' => $upload_image,
                'nama_key' => 'martincatering_key'
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil didaftarkan</div>');
            redirect('User');
        }
    }
    public function hapus($id)
    {
        $this->userrole->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun User Berhasil Dihapus!</div>');
        redirect('User');
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Edit Akun User";
        $data['usermodel'] = $this->userrole->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('role', 'role', 'required', [
            'required' => 'Role Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/vw_ubah_user", $data);
            $this->load->view("layout/footer");
        } else {
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $query = $this->db->set('gambar', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('user', ['id' => $id])->row();
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'role' => $this->input->post('role'),
                'id' => $this->input->post('id'),
                'gambar' => $upload_image,
                'nama_key' => 'martincatering_key',
            ];

            $this->userrole->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Akun User Berhasil Di Ubah!</div>');
            redirect('User');
        }
    }
}
