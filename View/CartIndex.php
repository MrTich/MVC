<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>stt</td>
			<td>ma sp</td>
			<td>ten</td>
			<td>gia</td>
			<td>sl</td>
			<td>Thanh tien</td>
			<td>Thao tac</td>
		</tr>
		<?php
		$tongtien = 0;
		foreach ($data as $key => $value) {
			$tongtien += $value['gia']*$value['soluong'];
			?>
			<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value['masach'];?></td>
			<td><?php echo $value['tensach'];?></td>
			<td><?php echo number_format( $value['gia']);?></td>
			<td><?php echo $value['soluong'];?></td>
			<td><?php echo number_format( $value['gia']*$value['soluong']) ;?></td>
			<td>
				<a href="index.php?controller=CartController&action=delete&id=<?php echo $value['masach'];?>">Xoa</a>
			</td>
		</tr>
			<?php
		}
		?>
	<tr>
		<td colspan="5">Tong tien</td>
		<td colspan="2"><?php echo number_format($tongtien) ?> VND</td>
	</tr>
	</table>
	
</body>
</html>