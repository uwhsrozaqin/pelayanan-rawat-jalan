<?php
/**
 * 
 */
class Model_poliklinik extends CI_Model
{
	function listPoliklinik(){
		$query_builder = "SELECT * FROM poliklinik";
		return $this->db->query($query_builder)->result_array();
	}
	function tambahPoliklinik($data){
		$this->db->insert('poliklinik',$data);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}
