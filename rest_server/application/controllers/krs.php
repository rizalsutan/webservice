<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class krs extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data krs
    function index_get() {
        $kode = $this->get('kode');
        if ($kode == '') {
            $krs = $this->db->get('krs')->result();
        } else {
            $this->db->where('kode', $kode);
            $krs = $this->db->get('krs')->result();
        }
        $this->response($krs, 200);
    }
 
    // insert new data to krs
    function index_post() {
        $data = array(
                    'kode'           => $this->post('kode'),
                    'nim'          => $this->post('nim'),
                    'sks' 	    => $this->post('sks'));
        $insert = $this->db->insert('krs', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data krs
    function index_put() {
        $kode = $this->put('kode');
        $data = array(
                    'kode'       => $this->put('kode'),
                    'nim'      => $this->put('nim'),
                    'sks'=> $this->put('sks'));
        $this->db->where('kode', $kode);
        $update = $this->db->update('krs', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete krs
    function index_delete() {
        $kode = $this->delete('kode');
        $this->db->where('kode', $kode);
        $delete = $this->db->delete('krs');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}