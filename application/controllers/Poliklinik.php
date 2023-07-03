<?php
class Poliklinik extends CI_Controller
{
    function index(){
        $this->load->model('model_poliklinik');
        $response['listPoliklinik'] = $this->model_poliklinik->listPoliklinik();
        $this->load->view('poliklinik/index',$response);
    }
    function tambahPoliklinik(){
        $this->load->model('model_poliklinik');
        $data =$this->input->post();
        $this->model_poliklinik->tambahPoliklinik($data);
        redirect('poliklinik');
    }
    function edit($id){
		$this->load->model('model_poliklinik');
		$where = array('idPoliklinik' => $id);
		$return['dataPoliklinik'] = $this->model_poliklinik->edit_data($where,'poliklinik')->result_array();
		$this->load->view('poliklinik/edit',$return);

	}
    function editSimpan(){
		$this->load->model('model_poliklinik');
		$data = $this->input->post();
		$where = array(
			'idPoliklinik' => $data['idPoliklinik']
		);
		$this->model_poliklinik->update_data($where,$data,'poliklinik');
		redirect('poliklinik');
	}
	function hapus($id){
		$this->load->model('model_poliklinik');
		$where = array('idPoliklinik' => $id);
		$this->model_poliklinik->hapus_data($where,'poliklinik');
		redirect('poliklinik/index');
	}
    
}

?>