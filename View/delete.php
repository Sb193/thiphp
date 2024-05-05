<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xóa sách</title>
</head>
<body>
	<h2>Xóa sách</h2>
	
	<form method="POST">
		<input type="hidden" name="masach" value="<?php echo $s->masach?>">
		
		<label for="tensach">Tên sách</label>
		<input type="text" name="tensach" value="<?php echo $s->tensach?>"> </br>
		
		<label for="matg">Tác giả</label>
		<select name="matg">
			<?php foreach ($tg as $tacgia){?>
				<option <?php if ($tacgia->matg == $s->matg) echo "selected"?> value="<?php echo $tacgia->matg?>"><?php echo $tacgia->tentg?></option>
			<?php }?>
		</select> </br>
		
		<label for="tensach">Năm xuất bản</label>
		<input type="number" name="namxb" value="<?php echo $s->namxb?>"> </br>
		<h3>Bạn có chắc muốn xóa sách này không?</h3>
		<input type="submit" name="delete" value="Delete">
		<a href="index.php">Hủy</a>

	</form>
	
</body>
</html>