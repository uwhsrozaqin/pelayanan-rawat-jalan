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
	function ambilDataPasien(){
		$query  = "SELECT * FROM pasienPoli 
					JOIN poliklinik ON poliklinik.idPoliklinik = pasienPoli.idPoliklinik
					JOIN pasien ON pasien.idPasien = pasienPoli.idPasien";
		$result = $this->db->query($query)->result_array();
		return $result;
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	


}
?>