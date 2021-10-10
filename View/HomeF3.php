<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sach</title>
</head>
<body>
	<?php
/*print_r($data);*/
foreach ($data as $key => $value) {
	?>
	<div>
		<?php echo $value['masach'] .'-'. $value['tensach'] ;?>
	</div>
	<?php
}
	?>
</body>
</html>