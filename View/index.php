<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sách</title>
</head>
<body>
	<h2>Danh sách sách</h2>
	<form action="index.php?controller=sach&action=index" method="POST">
		<input type="search" name="search" >
		<input type="submit" name="search-btn" value="Search">
	</form>
	<a href="index.php?controller=index&action=add">Thêm<a/>
	<table border="1">
		<thead>
			<tr>
				<th>Mã sách</th>
				<th>Tên sách</th>
				<th>Tác giả</th>
				<th>Năm xuất bản</th>
				<th>Chức năng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $sach){?>
				<tr>
					<td><?php echo $sach->masach?></td>
					<td><?php echo $sach->tensach?></td>
					<td><?php echo $sach->tentg?></td>
					<td><?php echo $sach->namxb?></td>
					<td>
						<a href="index.php?controller=index&action=edit&id=<?php echo $sach->masach?>">Sửa<a/>
						<a href="index.php?controller=index&action=delete&id=<?php echo $sach->masach?>">Xóa<a/>
					</td>
				</tr>
			<?php }?>
		
		</tbody>
	<table>
</body>
</html>