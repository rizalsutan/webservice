<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class mahasiswa extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data mahasiswa
    function index_get() {
        $nama = $this->get('nama');
        if ($nama == '') {
            $mahasiswa = $this->db->get('mahasiswa')->result();
        } else {
            $this->db->where('nama', $nama);
            $mahasiswa = $this->db->get('mahasiswa')->result();
        }
        $this->response($mahasiswa, 200);
    }
 
    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'nama'           => $this->post('nama'),
                    'makul'          => $this->post('makul'),
                    'dosen' 	    => $this->post('dosen'),
                    'krs'           => $this->post('krs'));
        $insert = $this->db->insert('mahasiswa', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data mahasiswa
    function index_put() {
        $nama = $this->put('nama');
        $data = array(
                    'nama'       => $this->put('nama'),
                    'makul'      => $this->put('makul'),
                    'dosen'=> $this->put('dosen'),
                    'krs'    => $this->put('krs'));
        $this->db->where('nama', $nama);
        $update = $this->db->update('mahasiswa', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete mahasiswa
    function index_delete() {
        $nama = $this->delete('nama');
        $this->db->where('nama', $nama);
        $delete = $this->db->delete('mahasiswa');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}