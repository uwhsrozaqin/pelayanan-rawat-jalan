<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	function index(){
		$this->load->model('model_pasien');
		$response['dataPasien'] = $this->model_pasien->ambilDataPasien();
		$this->load->view('dashboard_view',$response);
	}
	function edit($id){
		$this->load->model('model_poliklinik');
		$return['listPoliklinik'] = $this->model_poliklinik->listPoliklinik();

		$this->load->model('model_pasien');
		$where = array('idPasien' => $id);
		$return['dataPasien'] = $this->model_pasien->edit_data($where,'pasien')->result_array();
		$this->load->view('pasien/edit',$return);

	}
	function editSimpan(){
		$this->load->model('model_pasien');
		$data = $this->input->post();
		$where = array(
			'idPasien' => $data['idPasien']
		);
		$this->model_pasien->update_data($where,$data,'pasien');
		redirect('dashboard');
	}
	function hapus($id){
		$this->load->model('model_pasien');
		$where = array('idPasien' => $id);
		$this->model_pasien->hapus_data($where,'pasien');
		redirect('dashboard/index');
	}

}
?>