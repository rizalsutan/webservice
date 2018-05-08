<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class makul extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data makul
    function index_get() {
        $kdmk = $this->get('kdmk');
        if ($kdmk == '') {
            $makul = $this->db->get('makul')->result();
        } else {
            $this->db->where('kdmk', $kdmk);
            $makul = $this->db->get('makul')->result();
        }
        $this->response($makul, 200);
    }
 
    // insert new data to makul
    function index_post() {
        $data = array(
                    'kdmk'           => $this->post('kdmk'),
                    'nama'          => $this->post('nama'),
                    'sks' 	    => $this->post('sks'));
        $insert = $this->db->insert('makul', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data makul
    function index_put() {
        $kdmk = $this->put('kdmk');
        $data = array(
                    'kdmk'       => $this->put('kdmk'),
                    'nama'      => $this->put('nama'),
                    'sks'=> $this->put('sks'));
        $this->db->where('kdmk', $kdmk);
        $update = $this->db->update('makul', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete makul
    function index_delete() {
        $kdmk = $this->delete('kdmk');
        $this->db->where('kdmk', $kdmk);
        $delete = $this->db->delete('makul');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}