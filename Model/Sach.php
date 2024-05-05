<?php
	require_once 'Model/DB.php';
	class Sach extends Database{
		public function all(){
			return parent::GetAllDataCollab("`sach` , `tacgia`" , "sach.matg = tacgia.matg");
		}
		
		public function create($data){
			return parent::Add("sach" , $data);
		}
		
		public function find($id){
			return parent::GetDataWhere("sach" , "masach = '$id'");
		}
		
		public function search($id){
			return parent::GetAllDataWhere("`sach` , `tacgia`" , "sach.matg = tacgia.matg AND tensach LIKE '%$id%'");
		}
		
		public function update($data, $id){
			return parent::Edit("sach" , $data);
		}
		
		public function destroy( $id){
			return parent::Delete("sach" , "masach = '$id'");
		}
	}
?>