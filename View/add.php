<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sách</title>
</head>
<body>
	<h2>Thêm sách</h2>
	
	<form method="POST">
		<label for="tensach">Tên sách</label>
		<input type="text" name="tensach"> </br>
		
		<label for="matg">Tác giả</label>
		<select name="matg">
			<?php foreach ($tg as $tacgia){?>
				<option value="<?php echo $tacgia->matg?>"><?php echo $tacgia->tentg?></option>
			<?php }?>
		</select> </br>
		
		<label for="tensach">Năm xuất bản</label>
		<input type="number" name="namxb"> </br>
		
		<input type="submit" name="add" value="Create">
		<a href="index.php">Hủy</a>

	</form>
	
</body>
</html>