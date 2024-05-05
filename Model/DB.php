<?php
	class Database{
		public static $hostname = 'localhost';
		public static $username = 'root';
		public static $password = '';
		public static $dbname = 'test1';
		public static $conn = NULL;
		
		public static function connect(){
			self::$conn = new mysqli(self::$hostname , self::$username , self::$password , self::$dbname);
			if (!self::$conn){
				echo "Kết nối thất bại!";
			} else {
				mysqli_set_charset(self::$conn , 'utf8');
			}
		}
		
		public function execute($sql){
			$result = self::$conn->query($sql);
			return $result;
		}
		
		public function GetAllData($table){
			$result = self::execute("SELECT * FROM `$table`");
			
			$data = array();
			if (mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_object($result)){
					$data[] = $row;
				}
				
				return $data;
			}
		}
		
		public function GetAllDataCollab($table , $where){
			$result = self::execute("SELECT * FROM $table WHERE $where");
			
			$data = array();
			if (mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_object($result)){
					$data[] = $row;
				}
				
				return $data;
			}
		}
		
		public function GetDataWhere($table , $where){
			$result = self::execute("SELECT * FROM $table WHERE $where");
			
			$data =array();
			if (mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_object($result)){
					return $row;
				} 
			}
			return $data;
		}
		
		public function GetAllDataWhere($table , $where){
			$result = self::execute("SELECT * FROM $table WHERE $where");
			
			$data =array();
			if (mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_object($result)){
					$data[] = $row;
				}
			}
			return $data;
		}
		
		public function Add($table , $datas){
			$field = '';
			$data = '';
			
			foreach ($datas as $key => $value){
				$field = $field."`".$key."`,";
				$data = $data."'".$value."',";
			}
			
			$field = rtrim($field , ',');
			$data = rtrim($data , ',');
			
			return self::execute("INSERT INTO `$table`($field) VALUES ($data)");
		}
		
		public function Edit($table , $datas , $id){
			$field = '';
			
			foreach ($datas as $key => $value){
				$field = $field."`".$key."` = '".$value."'".",";
			}
			
			$field = rtrim($field , ',');
			
			return self::execute("UPDATE `$table` SET $field WHERE $id");
		}
		
		public function Delete($table , $id){
			return self::execute("DELETE FROM `$table` WHERE $id");
		}
		
		
		
		
		
	}
?>