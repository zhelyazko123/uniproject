<?php
include 'header.php';
include_once 'dbconfig.php';
?>

		<div id="body">
			<table>
				<tr>
					<th colspan="4">
					<input type="button" id="btn-b" onclick="location.href='index.php';" value="UPLOAD MORE FILES" />
					</th>
				</tr>
				<tr>
					<td><b>Име</b></td>
					<td><b>Тип</b></td>
					<td><b>Размер(KB)</b></td>
					<td><b>Изглед</b></td>
				</tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
	?>
        <tr>
			<td><?php echo $row['file'] ?></td>
			<td><?php echo $row['type'] ?></td>
			<td><?php echo $row['size'] ?></td>
			<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>