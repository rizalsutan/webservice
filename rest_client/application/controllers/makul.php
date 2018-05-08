<?php
Class makul extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data makul
    function index(){
        $data['makul'] = json_decode($this->curl->simple_get($this->API.'/makul'));
        $this->load->view('makul/list',$data);
    }
    
    // insert data makul
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kdmk'      =>  $this->input->post('kdmk'),
                'nama'=>  $this->input->post('nama'),
                'sks'    =>  $this->input->post('sks'));
            $insert =  $this->curl->simple_post($this->API.'/makul', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('makul');
        }else{
            $data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
            $this->load->view('makul/create',$data);
        }
    }
    
    // edit data makul
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
				'kdmk'      =>  $this->input->post('kdmk'),
                'nama'=>  $this->input->post('nama'),
                'sks'    =>  $this->input->post('sks'));
            $update =  $this->curl->simple_put($this->API.'/makul', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('makul');
        }else{
            $data['sks'] = json_decode($this->curl->simple_get($this->API.'/sks'));
            $params = array('kdmk'=>  $this->uri->segment(3));
            $data['makul'] = json_decode($this->curl->simple_get($this->API.'/makul',$params));
            $this->load->view('makul/edit',$data);
        }
    }
    
    // delete data makul
	 function delete($kdmk){
        if(empty($kdmk)){
            redirect('makul');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/makul', array('kdmk'=>$kdmk), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('makul');
        }
    }
}