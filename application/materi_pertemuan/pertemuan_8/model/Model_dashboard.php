<?php 
/**
 * 
 */
class Model_dashboard extends CI_Model
{
	function checkDatabase($data){
		$where_array = array(
               'username' =>$data['username'],
               'password'=>md5($data['password'])
              );  

		$result = $this->db->get_where('users',$where_array)->result_array();
		return $result;
	}
}
?>