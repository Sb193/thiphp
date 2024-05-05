<?php
	require_once 'Model/DB.php';
	class TacGia extends Database{
		public function all(){
			return parent::GetAllData("tacgia");
		}
	}
?>