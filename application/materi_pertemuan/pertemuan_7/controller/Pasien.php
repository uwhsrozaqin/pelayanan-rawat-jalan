<?php
/**
 * Controller Pasien untuk mengelola pasien
 */
class Pasien extends CI_Controller
{
	function daftar(){
		$this->load->model('model_poliklinik');
		$return['listPoliklinik'] = $this->model_poliklinik->listPoliklinik();

		$this->load->view('pasien/tambah',$return);
	}
	function daftarSimpan(){
		$this->load->model('model_pasien');
		$data = $this->input->post();
		$this->model_pasien->simpanData($data);
		redirect('pasien/terimakasih');
	}
	function terimakasih(){
		$this->load->view('pasien/terimakasih');	
	}
}
