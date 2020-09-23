<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>aodep</title>
</head>
<body>
	<h2>ĐÂY LÀ masster layout</h2>
	<div class="header"></div>
	<div class="container">
		<?php require_once"./mvc/views/pages/".$data["number"].".php" ?>
		<?php echo $data["kq"]; ?>
		<?php while ($row = mysqli_fetch_array($data["dl"]))

				var_dump($row);
		 ?>
	</div>
	<div class="footer"></div>
</body>
</html>