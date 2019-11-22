<?php
	class User_model extends CI_Model{
		public function login($email, $password){
			return $this->db->query("Select * from user
				Where email='".$email."' AND password='".$password."'")->row();
		}

		public function insert_user($data){
			return $this->db->insert('user',$data);
		}

		public function select_user(){
			return $this->db->get('user')->result();
		}

		public function select_by_id($id){
			$this->db->where('id_user', $id);
			return $this->db->get('user')->row();
		}

		public function update_user($data,$id){
			$this->db->where('id_user',$id);
			return $this->db->update('user',$data);
		}

		public function delete_user($id){
			$this->db->where('id_user', $id);
			$this->db->delete('user');
		}

	}

?>