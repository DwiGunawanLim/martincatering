<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Makanan_model extends CI_Model
{

    public $table = 'makanan';
    public $id = 'makanan.id';
    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost/martincatering-rest-api/makanan',
            'auth' => ['admin', 'adminpass']
        ]);
    }

    public function get()
    {
        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
        $response = $this->_client->request('GET', 'makanan', [
            'query' => [
                'nama_key' => 'martincatering_key'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('nama', $this->session->userdata('nama'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getById($id)
    {
        // $this->db->from($this->table);
        // $this->db->where('id', $id);
        // $query = $this->db->get();
        // return $query->row_array();
        $response = $this->_client->request('GET', 'makanan', [
            'query' => [
                'id' => $id,
                'nama_key' => 'martincatering_key'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function update($data)
    {
        // $this->db->update($this->table, $data, $where);
        // return $this->db->affected_rows();
        $response = $this->_client->request('PUT', 'makanan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function insert($data)
    {
        // $this->db->insert($this->table, $data);
        // return $this->db->insert_id();
        $response = $this->_client->request('POST', 'makanan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function delete($id)
    {
        // $this->db->where($this->id, $id);
        // $this->db->delete($this->table);
        // return $this->db->affected_rows();
        $response = $this->_client->request('DELETE', 'makanan', [
            'form_params' => [
                'id' => $id,
                'nama_key' => 'martincatering_key'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function min_stok($stok, $idp)
    {
        $query = $this->db->set('stok', 'stok-' . $stok, false);
        $query = $this->db->where('id', $idp);
        $query = $this->db->update($this->table);
        return $query;
    }
    public function tmakanan()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
