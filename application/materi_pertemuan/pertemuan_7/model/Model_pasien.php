<?php 
/**
 * 
 */
class Model_pasien extends CI_Model
{
	function simpanData($data){
		$nomorRekamMedis = strtotime("now");
		$dataPasien = array(
			'namaPasien'			=>$data['namaPasien'],
			'alamatPasien'			=>$data['alamatPasien'],
			'jenisKelaminPasien'	=>$data['jenisKelamin'],
			'nomorRekamMedis'		=>$nomorRekamMedis,
			'tanggalDaftar'			=>date('Y-m-d H:i:s')

		);
		$this->db->insert('pasien',$dataPasien);
		$idInsertPasien = $this->db->insert_id();

		$dataPasienPoli = array(
			'idPasien'			=> $idInsertPasien,
			'idPoliklinik'		=> $data['poliKlinik']
		);
		$this->db->insert('pasienPoli',$dataPasienPoli);

	}
}
?>