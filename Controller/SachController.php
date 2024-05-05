<?php
	require_once 'Model/Sach.php';
	require_once 'Model/TacGia.php';
	$sach = new Sach();
	$tacgia = new TacGia();
	if (isset($_GET['action'])){
		$controller = $_GET['action'];
		switch($controller){
			case 'index':
				if (isset($_POST['search-btn'])){
					$search = $_POST['search'];
					$data = $sach->search($search);
					include "View/index.php";
				} else {
					$data = $sach->all();
					include "View/index.php";
				}
				
				break;
			case 'add':
				if (isset($_POST["add"])){
					$data = [
						'tensach' => $_POST["tensach"],
						'matg' => $_POST["matg"],
						'namxb' => $_POST["namxb"]
					];
					
					$sach->create($data);
					header('location:index.php');
				} else {
					$tg = $tacgia->all();
					include "View/add.php";
				}
				break;
			case 'edit':
				if (isset($_GET["id"])){
					$s = $sach->find($_GET["id"]);
					$tg = $tacgia->all();
					if (isset($_POST["edit"])){
						$data = [
							'tensach' => $_POST["tensach"],
							'matg' => $_POST["matg"],
							'namxb' => $_POST["namxb"]
						];
						
						$sach->update($data , $_POST["masach"]);
						header('location:index.php');
					} else {
						include "View/edit.php";
					}
				} 
				break;
			case 'delete':
				if (isset($_GET["id"])){
					$s = $sach->find($_GET["id"]);
					$tg = $tacgia->all();
					if (isset($_POST["delete"])){
						$sach->destroy($_POST["masach"]);
						header('location:index.php');
					} else {
						include "View/delete.php";
					}
				} 
				break;
			default:
				$data = $sach->all();
				include "View/index.php";
				break;
		}
	} else {
		$data = $sach->all();
		include "View/index.php";
	}
?>