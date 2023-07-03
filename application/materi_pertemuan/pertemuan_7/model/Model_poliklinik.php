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
}
