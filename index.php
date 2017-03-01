<?php
include 'header.php';
include_once 'dbconfig.php';
?>
		
		<div id="body">
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<input type="file" name="file" id="file" /> <br><br>
					<button type="submit" name="btn-upload" id="btn-upload">UPLOAD</button>
				</form>
				<br /><br />
    <?php
		if(isset($_GET['success']))
		{
	?>
        <label>Успешно качване на файла!  <a href="view.php">Натиснете тук за да видите файла.</a></label>
    <?php
		}
		else if(isset($_GET['fail']))
		{
	?>
        <label>Проблем при качването</label>
    <?php
		}
	?>
		</div>
		<div id="footer">
			<label>Изготвено от Желязко Савов и Кристиян Славейков</label>
		</div>
	</body>
</html>