<?php
	require_once 'Model/DB.php';
	Database::connect();
	if (isset($_GET['controller'])){
		$controller = $_GET['controller'];
		switch($controller){
			case 'sach':
				require_once 'Controller/SachController.php';
			default:
				require_once 'Controller/SachController.php';
		}
	} else {
		require_once 'Controller/SachController.php';
	}
?>